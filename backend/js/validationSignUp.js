function signUp(){
    var data = new FormData(document.forms.namedItem("form-signup")); // the values ​​of the form fields are captured
    var ajax = new XMLHttpRequest(); //create ajax instase
    ajax.open("POST", "../backend/controller/controllerSignUp.php", true) // communication with the destination file is opened
   
   //Defines a function that will be executed when the request completes.
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            document.getElementById("errorEmail2").style.display = "none"; //error management
            location.href = "../frontend/login.php"; //redirect
            alert("Successful Sign up");
           
        }else if(obj.msg == "Email in use"){
          document.getElementById("errorEmail2").style.display = "block";//error management  
        }
        else if(obj.msg == "User in use"){
        document.getElementById("errorUsername").style.display = "block";//error management  
      }
    }
    ajax.send(data);
}