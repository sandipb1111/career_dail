<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        // Include your database connection
        login($conn); // Pass the database connection as a parameter
    }elseif (isset($_POST["registration"])) {
        registration($conn);
    }
}

function login($conn) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    $sql = "SELECT * FROM student where username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row["username"]===$username && $row["password"]===$password){
            $_SESSION["loggedin"]=true;
            $_SESSION["username"]=$row["username"];
            header("location:index.php");
            exit();
    }else{
        
        header("location: register.php?error=Incorrect username or password");
        exit();
    }
}else{
    header("location:register.php?error=Incorrect username or password");
    exit();
}
}

function registration($conn) {

    $username = $_POST['signName'];
    $email = $_POST['signEmail'];
    $password = $_POST['signPassword'];
    $cpassword = $_POST['signConfPassword'];
   
    $err="";
    $exist=false;
    if(($password ==$cpassword) ){
        $sql = "INSERT INTO student (`username`,`email`,`password`,`confirmpass`) VALUES ('$username','$email','$password','$cpassword')";
        $result = mysqli_query($conn,$sql);
        if($result){
            
        }

    }

    
    
}
?>
