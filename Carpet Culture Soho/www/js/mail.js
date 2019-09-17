$('#infoForm').submit(function() {

    var postTo = 'http://avijitroy.me/sms_forward.php?PhoneNumber=%2B19177245981';

    $.post(postTo,({name: $('[name=name]').val(), email: $('[name=email]').val(), message: $('[name=message]').val()}),
    function(data) {
        alert(data);
        if(data != "") {
            // do something
        } else {
            // couldn't connect
        }
        },'json');
    return false;

});