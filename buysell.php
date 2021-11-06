<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="buysell.css">
</head>
<body style="background-size:cover;background-repeat: no-repeat;width:100%;height:100%">
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
        <th><a href="./profile.php?var=<?php echo $_GET["val1"]?>">Profile</a></th>
        </tr> 
        </table>                             			
    </div>
    <table style="margin-left:auto;margin-right:auto; width:70%;padding:30px 30px;">
        <tr><th><button class="button1"><a href="buycust.php" style="text-decoration:none;">Buy</a></button>
        <button class="button2"><a href="sellcust.html" style="text-decoration:none;">Sell</a></button></th></tr>
        <tr><th><button class="button3"><a href="giverent.html" style="text-decoration:none;">Give Rent</a></button>
    <button class="button4"><a href="takerent.php" style="text-decoration:none;">Take Rent</a></button></th></tr>
    </table>
    <?php 
    echo "Me";
    if(isset($_GET["val"]))
    {
       
        $data = $_GET["val1"];
        echo $data;
    }
    ?>
    </div>
</body>
</html>