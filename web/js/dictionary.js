
    function addWord() {
        var table = document.getElementsByClassName("word");
        for(var i=0;i< table.length;i++){
            table[i].onclick= function () {
                var  back = this.style;
                // alert(this.getAttribute('nameWord'));
                $.ajax({
                    type:'POST',
                    url:'/dictionary',
                    data:{'word':this.getAttribute('nameWord')},
                    success: function (result) {
                        result = jQuery.parseJSON(result);
                        if (result['a']=='succesful'){
                            back.backgroundColor='#ECECEC';
                        }else{
                            // alert('_____');
                        }
                    }
                });
            }
        };
    }
    addWord();
    var tr = true;

    $(window).scroll(function(){
        var target = $('#add');
        var targetPos = target.offset().top;
        var winHeight = $(window).height();
        var scrollToElem = targetPos - winHeight;
        var winScrollTop = $(this).scrollTop();
        // console.log(scrollToElem);
        ///



        ///
        if(winScrollTop > scrollToElem && tr){
            tr= false;
            console.log(document.getElementById('add').getAttribute('offset'));
            $.ajax({
                type:'GET',
                url:'/dictionary',
                data:{'offset':document.getElementById('add').getAttribute('offset')},
                success: function (result) {
                    result = jQuery.parseJSON(result);
                    if (result['a']=='succesful'){

                        var nuber = parseInt(result['number']);
                        // console.log(nuber);
                        var offset =parseInt( document.getElementById('add').getAttribute('offset'));
                        offset += nuber;
                        document.getElementById('add').setAttribute('offset',offset);
                        for (var i =0 ;i<nuber; i++ ){
                            var tbody = document.getElementById("irregular").getElementsByTagName("TBODY")[0];
                            var row = document.createElement("TR");
                            row.setAttribute('class','word');
                            row.setAttribute('nameword',result['mas'][i]['id']);
                            var td = document.createElement("TH");
                            td.setAttribute('scop','row');
                            var nam = parseInt(tbody.lastElementChild.firstElementChild.textContent);
                            nam +=1;
                            td.appendChild(document.createTextNode(nam));
                            var td1 = document.createElement("TD");
                            td1.appendChild(document.createTextNode(result['mas'][i]['infinitive']));
                            var td2 = document.createElement("TD");
                            td2.appendChild (document.createTextNode(result['mas'][i]['past_simple']));
                            var td3 = document.createElement("TD");
                            td3.appendChild(document.createTextNode(result['mas'][i]['past_participle']));
                            var td4 = document.createElement("TD");
                            td4.appendChild (document.createTextNode(result['mas'][i]['translation']));
                            row.appendChild(td);
                            row.appendChild(td1);
                            row.appendChild(td2);
                            row.appendChild(td3);
                            row.appendChild(td4);
                            tbody.appendChild(row);
                        }
                        addWord();

                        tr=true;
                    }else{
                        alert('_____');
                    }
                }
            });

        }
    });
