<?php 

$server_name="localhost:4000";
$user_name="root";
$pass=""; 
$db="dbproject";

$conn=mysqli_connect($server_name,$user_name,$pass,$db);
if(!$conn){
    die('unable to connect');

}
if (isset($_POST['name'])) {

$username = $_POST['name'];  
$password = $_POST['password'];

$sql = "select * from signup where uname = '$username' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);
if($count == 1){  
    echo "<h3><center> Login successful </center></h3>";  
}  
else{  
    echo "<h3> Login failed. Invalid username or password.</h3>";  
}
}        
?>  

<!DOCTYPE html>
<html>

<head>
    
    <title>All Products</title>
    <link rel="stylesheet" href="login_ir.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Extended+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="sw.png" />
    <meta charset="utf-8">
</head>
<script>
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    function outOfStock() {
        alert("this product is currently out of stock")
    }

</script>

<body>
    <div class="nav">
        <div class="sneakerwala">
            <a href="">SNEAKERWALA</a>
        </div>
        <form class="google" action="https://www.google.com/search" method="GET">
            <div>
                <input class="gog" type="text" name="q" placeholder="search products">
            </div>
            <div>
                <button class="go" type="submit" value="gsearch">GO</button>
            </div>
        </form>
        <div>
            <a class="cart" href="">cart</a> 
        </div>
    </div>
    <div class="nav2">
        <div class="navContent">
            <a class="nav_a" href="">home</a>
        </div>
        <div class="navContent">
            <a class="nav_a" href="productL.html">all shoes</a>
        </div>
        <div class="navContent">
            <a class="nav_a" href="someShoes.html">some shoes</a>
        </div>
        <div class="navContent">
            <a class="nav_a" href="aboutUs.html">about us</a>
        </div>
        <div class="navContent">
            <a class="nav_a" href="">contact us</a>
        </div>
        <div class="navContent">
            <a class="nav_a" href="login.html">login</a>
        </div>
    </div>
    <div class="login_div">
    
        <form class="login" method="POST" action="#">
            <input class="login_input" type="text" name="name" placeholder="Enter Username"> <br><br>
            <input class="login_input" type="password" name="password" placeholder="Enter Password" > <br><br>
            <input class="button_login" type="submit" value="sign in">
            <a href="signup.html" class="button_login">sign up</a>
        </form>
    </div>
    <div>
        <button class="top" onclick="topFunction()">Back to top</button>
    </div>
    <div class="info">
        <div class="foot">
            <ul class="footer">
                <li>
                    <b>Mail us:</b>
                </li>
                <li>
                    Mukesh Patel Technolgy Park, Village: Babulde Bank of Tapi River, National Highway No: 3, Shirpur
                    Dist, Savalade, Maharashtra 425405
                </li>
            </ul>
            <ul class="footer">
                <li>
                    <b>Careers:</b>
                </li>
                <li>
                    Sorry we are currently over our employee limit. There won't be an opening for atleast 2 years. See
                    you then. Good luck.
                </li>
            </ul>
            <ul class="footer">
                <li>
                    <b>
                        Policy:
                    </b>
                </li>
                <li>
                    Our policy is very heretically banal with profound but fastidious pointers. So do not be polemical
                    about it.
                </li>
            </ul>
            <ul class="footer">
                <li>
                    <b>Owners:</b>
                </li>
                <li>
                    Soumya Vaval
                </li>
                <li>
                    Aryan Verma
                </li>
                <li>
                    Ananya Garg
                </li>
                <li>
                    Swara Shah
                </li>
            </ul>
            <ul class="footer">
                <li>
                    © 2020, Sneakerwala.com, Inc. or its affiliates
                </li>
            </ul>
        </div>
    </div>
    <div class="connect">
        connect with us
    </div>
    <div class="iconAlign">
        <a href="https://www.instagram.com/9GAG/"><img src="instagram-sketched.png" class="icon"></a>
        <a href="https://www.facebook.com/9gag"><img src="facebook.png" class="icon"></a>
        <a href="https://twitter.com/9GAG"><img src="twitter.png" class="icon"></a>
    </div>
</body>



</html>
