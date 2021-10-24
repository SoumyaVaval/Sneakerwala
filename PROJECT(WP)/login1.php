<?php
            include("database.php");
            extract($_POST);

            if(isset($submit))
            {
                $rs=mysqli_query($conn,"select * from signup where username='$username' and password='$password'");
                if(mysqli_num_rows($rs)<1)
                {
                    $found="N";
                }
                else
                {
                    $_SESSION["login"]=$username;
                }
            }
            if (isset($_SESSION["login"]))
            {
                header("Location: HTMLPage1.html");
                exit;
            }
			if (isset($found)) {
                echo '<script type="text/javascript">alert("Invalid userid or password. Please try again.");</script>';
			}
?>
<html>

<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Extended+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="sw.png" />
    <meta charset="utf-8">
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        margin: 0px;
    }

    .nav {
        display: flex;
        background: #72e400;
        align-items: center;
    }

    .sneakerwala {
        margin-left: 20px;
        margin-right: auto;
        font-family: 'Libre Barcode 39 Extended Text', cursive;
        font-style: normal;
        font-weight: normal;
        font-size: 65px;
        line-height: 120px;
        align-items: center;
        text-align: center;
        color: #000000;
    }

    .cart {
        margin-right: 20px;
        font-family: Righteous;
        font-size: 35px;
        text-align: center;
        color: #000000;
    }

    .cart:hover {
        color: rgb(44, 44, 44);
    }

    .allShoes{
        font-family:sans-serif;
        padding:10px;
        padding-bottom:0px;
        font-size: 30px;
        margin: 30px;
        margin-bottom:0px
    }

    .showingProducts{
        font-family:sans-serif;
        padding:10px;
        padding-top:0px;
        font-size: 20px;
        margin-left: 30px;
        color:rgb(151, 151, 151);
    }

    .icon {
        height: 30px;
        width: 30px;
        padding: 5px;
    }

    .iconAlign {
        text-align: center;
        padding: 10px;
        background: #72e400;
        padding-bottom: 30px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .nav2 {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
        background: black;
        color: white;
        margin-top: 0px;
        padding: 15px;
        font-size: 20px;
        text-align: center;
        line-height: 100%;
    }

    .navContent {
        margin-left: 50px;
        margin-right: 50px
    }

    .nav_a {
        color: white;
        margin-left:20px;
    }

    .nav_a:hover {
        color: #72e400;
    }

    .top {
        background: black;
        color: white;
        font-family: sans-serif;
        line-height: 40px;
        font-size: 20px;
        text-align: center;
        outline: none;
        width: 100%;
        border: none;
        margin-top: 20px;
        border-radius:0px
    }
    .top:hover{
        background: rgb(44, 44, 44);
    }

    .info {
        background: #72e400;
    }

    input {
        font-size: 14px;
        width: auto;
        color: #696e79;
        box-sizing: content-box;
        padding: 10px;
        margin-left: 60px;
        border: 1px solid #f5f5f6;
        border-radius: 50px 0px 0px 50px;
        outline: none;
    }

    .go {
        height: 20px;
        margin-right: 60px;
        border: none;
        box-sizing: content-box;
        font-weight: bold;
        background: #000000;
        color: white;
        font-family: sans-serif;
        outline: none;
        border-radius: 0px 50px 50px 0px;
        padding: 10px;
    }

    .go:hover {
        background: rgb(44, 44, 44);
    }

    .footer {
        width: 170px;
        list-style-type: none;
    }

    .foot {
        display: flex;
        justify-content: space-between;
        font-family: sans-serif;
    }

    .connect {
        background: #72e400;
        text-align: center;
        font-family: sans-serif;
        padding: 10px;
    }
    s{
        font-size:20px;
        color:rgb(151, 151, 151);

    }
    .stock{
        font-size:20px;
        color:red;
        text-align: left;
        padding: 10px;
        width: 100%;
    }
    .nav3{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    form{
        display: flex;
        align-items: center;
        margin-top:20px;
    }
</style>

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
            <a href="HTMLPage1.html">SNEAKERWALA</a>
        </div>
        <form action="https://www.google.com/search" method="GET">
            <div>
                <input type="text" name="q" placeholder="search products">
            </div>
            <div>
                <button class="go" type="submit" value="gsearch">GO</button>
            </div>
        </form>
        <div>
            <a class="cart" href="cart.html">cart</a> 
        </div>
    </div>
    <div class="nav2">
        <div class="navContent">
            <a class="nav_a" href="HTMLPage1.html">home</a>
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
            <a class="nav_a" href="HTMLPage2.html">contact us</a>
        </div>
        <div class="navContent">
            <a class="nav_a" href="login1.php">login</a>
        </div>
    </div>
    <div>

       


<style>
    .login_input{
        box-sizing: content-box;
        padding:10px;
        border-radius:7px;
        border: solid 2px black;
        outline:none;
        margin:0px;
    }
    .button_login{
        font-weight: bold;
        color: white;
        background:rgb(0, 0, 0);
        border-radius: 7px;
        padding:10px;
        border: none;
        font-size: x-large;
        outline: none;
        margin: 0px;
    }
    .button_login:hover{
        background: rgb(44, 44, 44);
    }
    .login_form{
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .txt2{
        font-family: sans-serif;
        text-align: center;
    }

    .loginnow{
        text-align: center;
        font-family: sans-serif;
        font-weight: bold;
        font-size:30px;
    }
</style>
<body>
    <br>
    <p class="loginnow">Login</p>
	<div class="limiter">
		<div>
			<div>
				<form class="login_form" name="form1" method="post" > 
					

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="login_input" type="text" placeholder="username" name="username" id="loginid2"><br>
					</div>
                    <br>
					
					<div data-validate="Password is required">
						<input class="login_input" type="password" placeholder="password" name="password" id="pass2"><br>
					</div>
                    <br>
					<div class="container-login100-form-btn m-t-17">
							<input name="submit" type="submit" id="submit" value="Login" class="button_login">
					</div>
                    <br>
					<div class="w-full text-center p-t-55">

						<a href="signup.html" class="txt2">
                        New Member? <b>Sign up now</b> 
						</a>
                    </div>
                    <br>
        
				</form>
			</div>
		</div>
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

