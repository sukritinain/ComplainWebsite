function validate(){
    atpos = document.form_user_message.email.value.indexOf("@");
    dotpos = document.form_user_message.email.value.lastIndexOf(".");
    
    if (document.form_user_message.name.value == null || document.form_user_message.name.value == "")
    {
        alert("Name must be Entered!!");
        document.form_user_message.name.focus();
        return false;
    }
    
    if (document.form_user_message.email.value == "")
    {
        alert("Please provide your Email!!");
        document.form_user_message.email.focus();
        return false;
    }
    
    if (atpos < 1 || (dotpos - atpops < 2) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form_user_message.email.value)
    {
        alert("Please enter a valid email address!!");
        document.form_user_message.EmailID.focus();
        return false;
    }
    
    if (document.form_user_message.complain.value == "" || document.form_user_message.complain.value == null)
    {
        alert("Please register your Complain!!");
        return false;
    }
    return (true);
}



