<html>

  <body>

    <?php

      session_start();

      $name= $_POST["name"];
      $mail= $_POST["mail"];
      $subject= $_POST["subject"];
      $message= $_POST["message"];

      $conn = new mysqli('localhost:4000', 'root', '','dbproject');
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{

      $stmt=$conn->prepare("insert into contactus (name,mail,subject,message) values(?,?,?,?)");
      $stmt->bind_param("ssss",$name,$mail,$subject,$message);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      }

      header("Location: HTMLPage2.html");

    ?>

  </body>

</html>
