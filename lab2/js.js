$(document).ready(function () {

    $('#form2').submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                $('#p_one').html(result);
            }
        });
    });


    $('#form3').submit(function (event) {
        event.preventDefault();

        // создать объект для формы
        // var formData = new FormData(document.forms.form3);
        // отослать
        var xhr = new XMLHttpRequest();
        var name = $('#name').val();
        xhr.open("GET", "Select__Time.php?name=" + name, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = update;
        xhr.send();
        
        function update(){
            
            if (xhr.status === 200) {
                var res = "";
                let times = xhr.responseXML.firstChild.children;
                for (var i = 0; i < times.length; i++) {
                    res += times[i].children[0].firstChild.nodeValue + "<br>";
                }
             $('#p_two').html(res);
            
            }
        }
    });





    $('#form4').submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                JSON.parse(result);
                $('#p_tree').html(result);
            }
        });
    });
});