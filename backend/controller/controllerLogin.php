<?php
require ("../connection.php"); // We call the class where we have the methods to connect to the db

//verify that the variables do not come empty
if(isset($_POST['email'], $_POST['password']) and 
 !empty($_POST['email']) and !empty($_POST['password'])){
 
    //save the data 
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);

    $con = new Connection(); //instance
    $pdo = $con->connect(); //connection

    $validation = "SELECT username,email,pass FROM user_db WHERE email= '".$email."'"."AND pass='".$pass."'"; //SQL search
    $result = mysqli_query($pdo,$validation); //make the query in the db
    $stay= mysqli_num_rows($result);

    //validate the data
    if($stay){
        $answer['ok']= true;
        $answer['status']= 200;
        $answer['msg']="Login Successfull"; //confirmation state

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $username = $row['username'];
                $email = $row['email'];
                }
        }
        
        //save login details
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['email'] = $email;
    }else{
        $answer['msg'] = "Login fail"; //fail
    }
    $con->disconnect($pdo); //db disconnect
}else{
    $answer['msg']= "Please fill out all fields"; //fail
}

echo json_encode($answer);