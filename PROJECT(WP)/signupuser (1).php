<html>

  <body>

    <?php

      session_start();

      $email= $_POST["email"];
      $phone= $_POST["phone"];
      $username= $_POST["username"];
      $password= $_POST["password"];

      $conn = new mysqli('localhost:4000', 'root', '','dbproject');
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{

      $stmt=$conn->prepare("insert into signup(email,phone,username,password) values(?,?,?,?)");
      $stmt->bind_param("ssss",$email,$phone,$username,$password);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      }

      header("Location: login1.php");

    ?>

  </body>

</html>