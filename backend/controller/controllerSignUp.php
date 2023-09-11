<?php
require ("../connection.php"); // We call the class where we have the methods to connect to the db


//verify that the variables do not come empty
if(isset($_POST['username'], $_POST['email'], $_POST['password']) and 
!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['password'])){

    //save the data 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);

    $con = new Connection(); //instance
    $pdo = $con->connect(); //connection

    $validation = "SELECT email,username FROM user_db WHERE email= '".$email."'"."OR username='".$username."'"; //SQL search
    $result = mysqli_query($pdo, $validation); //make the query in the db
    $estancia = mysqli_num_rows($result); 

    //validate the data
    if($estancia){
        $answer['msg']="Email in use"; 
       
    }else{
        $sql = "INSERT INTO user_db(username, email, pass) VALUES ('$username', '$email', '$pass')"; //insert date into table

    if(mysqli_query($pdo, $sql)){
        $answer['ok']= true;
        $answer['status']= 200;
        $answer['msg']="User in use"; //confirmation state


    }else{
        $answer['msg']= "user could not be sign up"; // fail

    }
    $con->disconnect($pdo); //disconnect db
    }
    
} else {
    $answer['msg']= "fill out all fields"; //fail

}

echo json_encode($answer);