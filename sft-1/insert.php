<?php

    include ('config.php');

    $r_username = $_POST['r_username'];
    $r_pass = $_POST['r_pass'];
    $r_c_pass = $_POST['r_c_pass'];
    $r_email = $_POST['r_email'];
    $r_phone = $_POST['r_phone'];


    $username_pattern = "/[A-Za-z .]{3,20}/";
    $phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $emailPattern = "/(.+)@(.+){2,}\.(.+){2,}/";
    
    // $emailPattern = "/(cse|eee|law|bba|eng|cvl|arc|thm)_\d{10}@lus\.ac\.bd/";
    // $passPattern = "/((?=.*\d)(?=.*[a-z])(?=.*[@!@#$%^&*_+-])/";
    $passPattern = "/[a-z0-9;!@#$]{0,16}/";

    if(!preg_match( $username_pattern,$r_username)){
        echo $r_username;
    }


    else if (!preg_match(  $passPattern,$r_pass)){

        echo "<script>alert('Invalid password!')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    else if ($r_pass !== $r_c_pass){

        echo "<script>alert('Not same password!')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    else if (!preg_match(  $emailPattern,$r_email)){

        echo "<script>alert('Invalid email!')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    else if (!preg_match(  $phone_pattern,$r_phone)){

        echo "<script>alert('Invalid Phone!')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    else{
        $insertQuery="INSERT INTO `users`(`username`, `pass`, `email`, `mobile`) VALUES ('$r_username','$r_pass','$r_email','$r_phone')";

        if(!mysqli_query($conn,$insertQuery)){
            die("Unavalible to insert!");
        }
        
        else{
            echo "<script>alert('Completed')</script>";
            echo "<script>location.href='login.php'</script>";
        }
    }

    ?>