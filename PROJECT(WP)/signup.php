<html>

  <body>

    <?php

      session_start();

      $Name= $_POST["username"];
      $Pass= $_POST["pass"];
      $Email= $_POST["email"];
      $Phone= $_POST["phone"];

      $conn = new mysqli('localhost', 'root', '','wpproject');
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{

      $stmt=$conn->prepare("insert into signup values($Email, $Phone, $Name, $Pass)");
      $stmt->bind_param("sssss",$Name,$Roll,$Email,$phone,$gender);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      }

    ?>

  </body>

</html>

