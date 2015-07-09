function validate(){
    if (document.form_user_anonymous_complain.subject.value == "-1")
    {
        alert("Please provide the Subject!");
        return false;
    }
    
    if (document.form_user_anonymous_complain.complain.value == "" || document.form_user_anonymous_complain.complain.value == null)
    {
        alert("Please register your complain!");
        return false;
    }
    return (true);
    
}
