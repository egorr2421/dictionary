var table = document.getElementsByClassName("word");
for(var i=0;i< table.length;i++){
    table[i].onclick= function () {

        alert(this.getAttribute('nameWord'));
        $.ajax({
            type:'POST',
            url:'/dictionary',
            data:{'word':this.getAttribute('nameWord')},
            success: function (result) {
                result = jQuery.parseJSON(result);
                alert(result['a']);
            }
        });
    }
}

var adminBtn = document.getElementById("admin_btn");
adminBtn.onclick = function () {
    var infinitive = $("#infinitive").val();
    var simple = $("#simple").val();
    var part = $("#part").val();
    var translation = $("#translation").val();

    $.ajax({
        type:'POST',
        url:'admin',
        data:{'infinitive':infinitive , 'simple':simple , 'part':part , 'translation':translation},
        success: function (result) {
            result = jQuery.parseJSON(result);

            if (result['a'] == 'ok'){
                $("#infinitive").val('');
                $("#simple").val('');
                $("#part").val('');
                $("#translation").val('');
                var tbody = document.getElementById("irregular").getElementsByTagName("TBODY")[0];
                var row = document.createElement("TR");
                var td = document.createElement("TH");
                var nam = parseInt(tbody.lastElementChild.firstElementChild.textContent);
                nam +=1;
                td.appendChild(document.createTextNode(nam));
                var td1 = document.createElement("TD");
                td1.appendChild(document.createTextNode(infinitive));
                var td2 = document.createElement("TD");
                td2.appendChild (document.createTextNode(simple));
                var td3 = document.createElement("TD");
                td3.appendChild(document.createTextNode(part));
                var td4 = document.createElement("TD");
                td4.appendChild (document.createTextNode(translation));
                row.appendChild(td);
                row.appendChild(td1);
                row.appendChild(td2);
                row.appendChild(td3);
                row.appendChild(td4);
                tbody.appendChild(row);
            }else{
                if(result['a'].infinitive){
                    alert(result['a'].infinitive );
                }else{
                    if(result['a']['past_simple']){
                        alert(result['a']['past_simple']);
                    }else{
                        if(result['a']['past_participle']){
                            alert(result['a']['past_participle'] );
                        }else
                            if(result['a']['translation']){
                            alert(result['a']['translation'] );
                        }
                    }
                }

            }
        }
    });
};
$(window).scroll(function(){
    var target = $('#add');
    var targetPos = target.offset().top;
    var winHeight = $(window).height();
    var scrollToElem = targetPos - winHeight;
    var winScrollTop = $(this).scrollTop();
    console.log(scrollToElem);
    if(winScrollTop > scrollToElem){

        for (var i =0 ;i<10; i++ ){
            var tbody = document.getElementById("irregular").getElementsByTagName("TBODY")[0];
            var row = document.createElement("TR");
            var td = document.createElement("TH");
            td.appendChild(document.createTextNode("new test"));
            var td1 = document.createElement("TD");
            td1.appendChild(document.createTextNode("new test"));
            var td2 = document.createElement("TD");
            td2.appendChild (document.createTextNode("new test"));
            var td3 = document.createElement("TD");
            td3.appendChild(document.createTextNode("new test"));
            var td4 = document.createElement("TD");
            td4.appendChild (document.createTextNode("new test"));
            row.appendChild(td);
            row.appendChild(td1);
            row.appendChild(td2);
            row.appendChild(td3);
            row.appendChild(td4);
            tbody.appendChild(row);
        }
    }
});