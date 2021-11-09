<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginstyle.css">
    </head>
	<body background="images/viewdetails.jpg" style=" background-color:#fadadd;background-size:cover;background-repeat: no-repeat;width:100%;height:100%">
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
            <th><a href="Logout.html">Logout</a></th>
            <th><a href="home.html#about">About</a></th>
            </tr> 
            </table>                             			
		</div>
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
                $query =mysqli_query($conn,"select propertyid,prop_type,email,img1,img2,img3,img4,price,area,location,descrip,video from property where propertyid='$data'");
                if(mysqli_num_rows($query)>0)
                {  
                    while($row = mysqli_fetch_assoc($query))
                    {
                    ?>
                    <div>
                    <table width="100%">
                        <br>
                        <br>
                        <br>
                    <tr>
                        <th><img src="images/<?php echo $row['img1']?>" style="width:300px;height:300px;"></th>
                        <th><img src="images/<?php echo $row['img2']?>" style="width:300px;height:300px;"></th>
                        <th><img src="images/<?php echo $row['img3']?>" style="width:300px;height:300px;"></th>
                        <th><img src="images/<?php echo $row['img4']?>" style="width:300px;height:300px;"></th>     
                    <tr>
                    </table>
                    </div>
                    <div align="center" background="#fff">
                    <br>
                    <br>
                    <br>
                    <table align="center" style="float:center;">
                    <tr align="center"><video src="images/<?php echo $row['video']?>" controls width='800px' height='600px' ></video></tr>
                    <tr><p style="font-size:20px;"><b>Watch the video to know more!</b></p>
                </table>
                     <br><br><br>
                    
                    </div>
                    <div style="background-image:images/viewdetails.jpg;height:400px;width:100%;">
                    <b><p style="font-size:25px;"> Property details</p></b>
                    <table style="width:65%;cell-padding:2px;text-align:left;margin-left:10px;font-size:25px;color:#000;">
                        <tr><th>Price</th><th>:</th><th><?php echo $row['price']; ?>/-</th></tr>
                        <tr><th>Area(yards)</th><th>:</th><th><?php echo $row['area']; ?></th</tr>
                        <tr><th>Location</th><th>:</th><th><?php echo $row['location']; ?></th></tr>
                        <tr><th>Description</th><th>:</th><th><?php echo $row['descrip']; ?></th></tr>
                        <tr><th>Asset</th><th>:</th><th><?php echo $row['prop_type']; ?></th></tr>
                    </table>
                    <?php
                    }
                    $query1=mysqli_query($conn,"select u.Name,u.email,u.phno from property p,user u where p.email=u.email and p.propertyid='$data'");
                    if($row1 = mysqli_fetch_assoc($query1))
                    {
                    ?>
                    <b><p style="font-size:25px;">Contact the owner now</p></b>
                        <table style="width:100%;cell-padding:5px;text-align:left;margin-left:10px;font-size:25px;color:#000;">
                        <tr><th>Owner Name</th><th>:</th><th><?php echo $row1['Name']; ?></th></tr>
                        <tr><th>Email Id</th><th>:</th><th><?php echo $row1['email']; ?></th</tr>
                        <tr><th>Contact No</th><th>:</th><th><?php echo $row1['phno']; ?></th></tr>
                        </table>
                    <?php
                    }
                  }
               }
            }
        ?>
        </div>
        </div>
</body>
</html> 