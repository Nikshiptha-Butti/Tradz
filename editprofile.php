<html>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="reglogin.css">
 </head>
 <body background="images/regback.jpg" style="background-size:cover;background-repeat:no-repeat;width:100%;height:80%">
     <div class="hi">
     <div class="topnav">
         <table class="one">
             <tr>
         <th><img src="images/tradz logo.png" style="width:80px;height:80px;border-radius:20%;"></img></th>
         <th><p style="color:#fff;font-size:50px;font-family:Monotype Corsiva;font-style:italic;">Tradz</p></th>
         <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
     <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
     <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
         <th><a href="Home.html">Home &emsp;</a></th>
         <th><a href="loginpage.html">Login &emsp;</a></th>
         <th><a href="About.html">About &emsp;</a></th>
         <th><a href="loginpage.html">Logout</a></th>
         </tr> 
         </table>                             			
     </div>
     <?php
     echo $_GET["var"];
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
 <div  class="reglog">
     <p style="font-size:40px;font-family:Comic Sans;text-align:center;">Register</p>
     <form method="post" action="update.php">
         <table class="three" align="center">
             <tr class="reglog">
                 <th>Name</th>
                 <th><input type="text" class="regtext" name="uname" value="<?php echo $row['Name']?>" required /></th></tr>
                 <tr class="reglog">
                 <th>Email Id</th>
                 <th><input type="email" class="regtext" name="email" value="<?php echo $row['email']?>" required /></th></tr>
                 <tr class="reglog">
                 <th>Password</th>
                 <th><input type="password" class="regpass" id="name" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onchange='check();' required /></th>
                 </tr>
                 <tr class="reglog">
                 <th>Confirm Password</th>
                 <th><input type="password" class="regpass" id="confirmpass" name="confirmpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onchange='check();' required /></th>
             </tr>
             <tr class="reglog">
                 <th>Gender</th>
                 <th><input type="radio" class="regpass" name="Gender"  id="Male" value="Male" required /><label for="Male">Male</label>&emsp;&emsp;
                     <input type="radio" class="regpass" name="Gender" id="Female" value="Female" required /><label for="Male">Female</label></th>
                 </tr>
                 <tr class="reglog">
                 <th>Phone Number</th>
                 <th><input type="text" class="regtext" name="phno" value="<?php echo $row['phno']?>" pattern="^\d{10}$" title="Must contain only digits" required /></th>
             </tr>
             </table>
             <p class="reglogterms"><input type="checkbox" name="terms" id="terms" onchange="activateButton(this)" required />  I hereby declare that I agree to the terms and conditions of Tradz. <a href="Terms.html">Click Here</a> to view the Terms and Conditions.<br><br></p>
             <input type="submit" class="button" name="Update" value="Update" id="submit">
             <?php
            }
        }
    }
}
        ?>
 </body>
</html>