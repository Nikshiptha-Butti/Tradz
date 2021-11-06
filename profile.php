<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginstyle.css">
    </head>
	<body  style="background-color:#ADD;background-size:cover;background-repeat: no-repeat;width:100%;height:100%">
		<div class="hi">
		<div class="topnav">
            <table class="one">
            <tr>
			<th><img src="images/tradz logo.png" style="width:80px;height:80px;border-radius:20%;"></img></th>
            <th><p style="color:#fff;font-size:50px;font-family:Monotype Corsiva;font-style:italic;">Tradz</p></th>
            <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
            <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
            <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
			<th><a href="Home.html">Home</a></th>
		    <th><a href="Register.html">Sign Up</a></th>
			<th><a href="homepage.html/#about">About</a></th>
            <th><a href="Logout.html">Logout</a></th>
            <th><a href="./editprofile.php?var=<?php echo $_GET["var"]?>">Edit_Profile</a></th>
            </tr> 
            </table>                             			
		</div>
        <div>
        <?php
         if(isset($_GET["var"]))
         {
             $data = $_GET["var"];
             $conn = mysqli_connect("localhost", "root", "", "Tradz");
             if($conn==false)
             {
                die("ERROR: Could not connect.".mysqli_connect_error());
             }
             else
             {
                $query =mysqli_query($conn,"select Name,email,password,phno,gender from user where email='$data'");
                if(mysqli_num_rows($query)>0)
                {  
                    while($row = mysqli_fetch_assoc($query))
                    {
                    ?>
                    <b><p style="font-size:50px;text-align:center;">User Profile</p></b>
                        <table style="width:100%;cell-padding:5px;text-align:left;margin-left:150px;font-size:25px;color:#000;">
                        <tr><th>Name</th><th>:</th><th><?php echo $row['Name']; ?></th></tr>
                        <tr><th>Email Id</th><th>:</th><th><?php echo $row['email']; ?></th</tr>
                        <tr><th>Password</th><th>:</th><th><?php echo $row['password']; ?></th</tr>
                        <tr><th>Email Id</th><th>:</th><th><?php echo $row['gender']; ?></th</tr>
                        <tr><th>Contact No</th><th>:</th><th><?php echo $row['phno']; ?></th></tr>
                        </table>
                <?php
                    }
                }
            }
        }
                ?>
    </body>
    </html>