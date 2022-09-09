<?php

    session_start();

    include ('config.php');

    $r_pass = $_POST['r_pass'];
    $r_email = $_POST['r_email'];
    



    // $emailPattern = "/(cse|eee|law|bba|eng|cvl|arc|thm)_\d{10}@lus\.ac\.bd/";
    $emailPattern = "/(.+)@(.+){2,}\.(.+){2,}/";


    if (!preg_match(  $emailPattern,$r_email)){

        echo "<script>alert('Invalid email!')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    else{
        $sql = "SELECT * FROM `users` WHERE `email` = '$r_email' AND `pass` = '$r_pass';";

        $result = $conn->query($sql);


  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $id =  $row["id"];
      $username =  $row["username"];
      $mobile =  $row["mobile"];
      $email =  $row["email"];

    }

    $user = array(
        "id" => $id,
        "username" => $username,
        'email' => $email,
        "mobile" => $mobile
      );
  
      $_SESSION['user'] = $user;

    echo "<script>
    window.location.href = 'index.php';
    </script>";
}
else{
    
    echo "<script>
    alart('User not found');
    window.location.href = 'login.php';
    </script>";
}
    }

    ?>