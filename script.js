function validateform(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var product = document.getElementById("product").value;
    var isValid = true;
    
    var username_Error = document.getElementById("username_error");
    var password_Error = document.getElementById("password_error");
    var product_Error = document.getElementById("product_error");

    product_Error.innerHTML = "";
    username_Error.innerHTML = "";
    password_Error.innerHTML = "";

    if(username === ""){
        username_Error.innerHTML = "The name can't be empty!";
        isValid = false;
    } else if(username.match(/\d/)){
        username_Error.innerHTML = "The name can't include a number!";
        isValid = false;
    }else if(/[,.?]/.test(username)){
        username_Error.innerHTML = "The name can't include commas, full stops, or question marks!";
        isValid = false;
    }if(password === ""){
        password_Error.innerHTML = "Password can't be empty!";
        isValid = false;
    } else if(password.length < 5){
        password_Error.innerHTML = "Password can't be less than 5 characters!";
        isValid = false;
    }else if(password.length > 10){
        password_Error.innerHTML = "Password can't be more than 10 characters!";
        isValid = false;
    }else if(product === ""){
        product_Error.innerHTML = "product can't be empty!";
        isValid = false;
    }
    
    return isValid;
}