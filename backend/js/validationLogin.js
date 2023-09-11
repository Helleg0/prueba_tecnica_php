function login(){
    var data = new FormData(document.forms.namedItem("form-login")); // the values ​​of the form fields are captured
    var ajax = new XMLHttpRequest(); //create ajax instase
    ajax.open("POST", "../backend/controller/controllerLogin.php", true) // communication with the destination file is opened
   
    //Defines a function that will be executed when the request completes.
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            document.getElementById("errorEmail3").style.display = "none"; //error management
            document.getElementById("errorPassword3").style.display = "none"; //error management

            location.href = "../frontend/index.php"; //redirect
        }else if(obj.msg == "Login fail"){
            document.getElementById("errorEmail3").style.display = "block"; //error management
            document.getElementById("errorPassword3").style.display = "block"; //error management
        }
    }
    ajax.send(data);
}

//function that finally allows to enter
function validateLoginFields(){
    validateEmail();
    validatePassword();

    if(validateEmail() && validatePassword()){
        login();
    }
}

//funtion with regex validation
function validateEmail(){
    email = document.getElementById("email").value;
    const regExp = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;    
    
    if(email.match(regExp) != null){
       document.getElementById("errorEmail").style.display = "none";//error management
        return true;
    } else { 
       document.getElementById("errorEmail").style.display = "block";//error management
        return false;
    }
}

//funtion with regex validation
function validatePassword(){
    password = document.getElementById("password").value;
    const regExp = /(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;    
    
    console.log(password.length);
    if(password.match(regExp) != null){
        if(password.length > 7 && password.length < 17){
          document.getElementById("errorPassword1").style.display = "none";//error management
          document.getElementById("errorPassword2").style.display = "none";//error management
            return true;
        } else {
          document.getElementById("errorPassword2").style.display = "block";//error management
            return false;
        }        
    } else { 
            document.getElementById("errorPassword1").style.display = "block";//error management
        return false;
    }
    
}