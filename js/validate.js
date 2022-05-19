function validation_contact() {
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var phone = document.getElementById('phone');
    var message = document.getElementById('message');
    var name_error = document.getElementById('name_error');
    var email_error = document.getElementById('email_error');
    var phone_error = document.getElementById('phone_error');
    var message_error = document.getElementById('message_error');

    if(name.value == ""){
        name.focus();
        name_error.style.display="block";
        return false;
    }
    else{
        name_error.style.display="none";
    }

    if(email.value == ""){
        email.focus();
        email_error.style.display="block";
        return false;
    }
    else{
        email_error.style.display="none";
    }

    if(phone.value == ""){
        phone.focus();
        phone_error.style.display="block";
        return false;
    }
    else{
        phone_error.style.display="none";
    }
    
    if(message.value == ""){
        message.focus();
        message_error.style.display="block";
        return false;
    }
    else{
        message_error.style.display="none";
    }
}