<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="buysell.css">
</head>
<body background="images/buysellback.jpg" style="background-size:cover;background-repeat: no-repeat;width:100%;height:100%">
    <div class="hi">
    <div class="topnav">
        <table class="one">
            <tr>
        <th><img src="images/tradz logo.png" style="width:80px;height:80px;border-radius:20%;"></img></th>
        <th><p style="color:#fff;font-size:50px;font-family:Monotype Corsiva;font-style:italic;">Tradz</p></th>
        <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
        <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
        <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
        <th><a href="Home.html">Home</a></th>
        <th><a href="Register.html">Sign Up</a></th>
        <th><a href="loginpage.html">Login</a></th>
        <th><a href="./profile.php?var=<?php echo $_GET['val1']?>">Profile</a></th>
        <th><a href="loginpage.html">Logout</a></th>
        </tr> 
        </table>                             			
    </div>
    <table style="margin-left:auto;margin-right:auto; width:70%;padding:30px 30px;">
        <tr><th><button class="button1"><a href="./buycust.php?val1=<?php echo $_GET['val1']?>" style="text-decoration:none;">Buy</a></button>
        <button class="button2"><a href="./sellcust.html?val1=<?php echo $_GET['val1']?>" style="text-decoration:none;">Sell</a></button></th></tr>
        <tr><th><button class="button3"><a href="./giverent.html?val1=<?php echo $_GET['val1']?>" style="text-decoration:none;">Give Rent</a></button>
    <button class="button4"><a href="./takerent.php?val1=<?php echo $_GET['val1']?>" style="text-decoration:none;">Take Rent</a></button></th></tr>
    </table>
    </div>
</body>
</html>