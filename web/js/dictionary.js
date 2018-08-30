
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
        })
    }

}