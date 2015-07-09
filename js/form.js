function validate(){
    atpos = document.form_user_complain.email.value.indexOf("@");
    dotpos = document.form_user_complain.email.value.lastIndexOf(".");
    
    if (document.form_user_complain.name.value == null || document.form_user_complain.name.value == "")
    {
        alert("Name must be entered!!");
        document.form_user_complain.name.focus();
        return false;
    }
    
    if (document.form_user_complain.email.value == "" )
    {
        alert("Please provide your Email!!");
        document.form_user_complain.email.focus();
        return false;
    }
    
    if (atpos < 1 || (dotpos - atpops < 2) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form_user_complain.email.value))
    {
        alert("Please enter a valid email address!!");
        document.form_user_complain.email.focus();
        return false;
    }

    if (document.form_user_complain.subject.value == "-1")
    {
        alert("Please provide the Subject!!");
        return false;
    }
    
    if (document.form_user_complain.complain.value == "" || document.form_user_complain.complain.value == null)
    {
        alert("Please register your complain!!");
        return false;
    }
    return (true);
    
}
