<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="loginstyle.css">
        <link rel="stylesheet" href="buy.css">
        <link rel="stylesheet" href="/assets/favicon.ico">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
        <body background="images/buyback.jpg" style="background-size:cover;background-repeat: no-repeat;width:100%;height:100%">
            <div class="hi">
            <div class="topnav">
                <table class="one">
                    <tr>
                <th><img src="images/tradz logo.png" style="width:80px;height:80px;border-radius:20%"></img></th>
                <th><p style="color:#fff;font-size:50px;font-family:Monotype Corsiva;font-style:italic;">Tradz</p></th>
                <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                <th><a href="Home.html">Home</a></th>
                <th><a href="Register.html">Sign Up</a></th>
                <th><a href="About.html">About</a></th>
                <th><a href="./buysell.php?val1=<?php echo $_GET['val1']?>">Dashboard</a></th>
                <th><a href="loginpage.html">Logout</a></th>
                    </tr>
                </table>                             			
            </div>
            <div style="width:100%;background:images/takerentback.jpg">
            <form method="post" action="">
                <div id="sidebar" style="float:left;width:35%;background-color:white;">
                 <table class="three">
                    <tr><img style="margin-left:40px;width:400px;height:250px;" src="images/lease.jpg"></img></tr>
                    <tr class="buyterms"><th>Purpose    </th><th><input type="text" name="purpose" value="Lease" readonly></th></tr>
                    <tr class="buyterms"><th>Location   </th><th><input type="text" name="loc" placeholder="Enter city name"></th></tr>
                    <tr class="buyterms"><th>Price      </th><th><select id="price" name="price">
                        <option value="select" disabled selected>select</option><option value="5000">&lt 5000</option><option value="10000">&lt 10000</option><option value="15000">&lt 15000</option><option value="25000">&lt 25000</option><option value="50000">&lt 50000</option><option value="100000">&lt 1 lakh</option><option value="1000000">&gt 1 lakh</option>
                                                    </select></th></tr>
                     <tr class="buyterms"><th>Asset</th><th><select id="proptype" name="property">
                        <option value="select" disabled selected>select</option><option value="Land">Land</option><option value="Building">Building</option>
                                                    </select></th></tr>
                     <tr class="buyterms"><th>Area</th><th><input type="text" placeholder="specify in yards" name="Area"></th></tr>
                   </table>
                   <br>
                   <input type="submit" class="button" name="search" value="search"><br><br>
                </form> 
                </div>
				<div class="cards" style="float:left;width:60%;border-radius:5px;">
                <?php
                if(isset($_POST['search']))
                {
                 $purpose=$_POST['purpose'];
                 $location=$_POST['loc'];
                 $price=$_POST['price'];
                 $asset=$_POST['property'];
                 $area=$_POST['Area'];
                 $status='Lease';
                 $conn = mysqli_connect("localhost", "root", "", "Tradz");
                 if($conn==false)
                 {
                     die("ERROR: Could not connect.".mysqli_connect_error());
                 }
                 else
                 {
                      $query =mysqli_query($conn,"select propertyid,img1,price,area,location from property where price<='$price' and location='$location' and area>='$area' and status='Lease'");
                      if(mysqli_num_rows($query)>0)
                      {  
                          while($row = mysqli_fetch_assoc($query))
                          {
                                  ?>
                                   
                                   <div class="cards" style="margin-left:35px;">
                                      <table width="100%" style="background:white;border-color:#009B77">
                                          <tr>
                                              <th>
                                   <img src="images/<?php echo $row['img1']?>" style="width:400px;height:300px;" alt="" class="card__image"></th>
                                  <th>
                                   <table style="width:315px;cell-padding:5px;text-align:left;margin-left:10px;font-size:25px;color:#009B77;">
                                   <tr><th>    Price</th><th><?php echo $row['price']; ?></th></tr>
                                   <tr><th>    Area</th><th><?php echo $row['area']; ?></th</tr>
                                   <tr><th>    Location</th><th><?php echo $row['location']; ?></th></tr>
                                   <tr><th><a href="./viewdetails.php?var=<?php echo $row['propertyid'];?>" name="view" class="card__link">View details<th></tr>
                                   </table>
                                  </th>
                                  </tr>
                                  <table>
                                      <tr></tr>
                          </table>
                                  <tr></tr>
                                  </div></table>
                    <?php
                    }
                  }
               }
            }
            else
            {
                 $conn = mysqli_connect("localhost", "root", "", "Tradz");
                 if($conn==false)
                 {
                     die("ERROR: Could not connect.".mysqli_connect_error());
                 }
                 else
                 {
					$query=mysqli_query($conn,"select propertyid,img1,price,area,location from property where status='Lease'");
                    $x=mysqli_num_rows($query);
                    for($i=0;$i<3;$i++)
                    {
                        $row = mysqli_fetch_assoc($query)
                        ?>
                         <div class="cards" style="margin-left:35px;">
                                    <table width="100%" style="background:white;border-color:#009B77">
                                        <tr>
                                            <th>
                                 <img src="images/<?php echo $row['img1']?>" style="width:400px;height:300px;" alt="" class="card__image"></th>
                                <th>
                                 <table style="width:315px;cell-padding:5px;text-align:left;margin-left:10px;font-size:25px;color:#009B77;">
                                 <tr><th>    Price</th><th><?php echo $row['price']; ?></th></tr>
                                 <tr><th>    Area</th><th><?php echo $row['area']; ?></th</tr>
                                 <tr><th>    Location</th><th><?php echo $row['location']; ?></th></tr>
                                 <tr><th><a href="./viewdetails.php?var=<?php echo $row['propertyid'];?>" class="card__link">View details<th></tr>
                                 </table>
                                </th>
                                </tr>
                                <table>
                                    <tr></tr>
                        </table>
                                <tr></tr>
                                </div></table>
				  <?php
				  }
                }
            }
            ?>
                  
              </div>
        </body>
</html>