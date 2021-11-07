<?php
    $flag=0;
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $conn = mysqli_connect("localhost", "root", "", "Tradz");
    $sql = "select email,password from user";  
    $query =mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0)
    {  
	    while($row = mysqli_fetch_assoc($query))
         { 
             if($row['email']==$email)
             {
                $var1=$row['email'];
                $var2=$row['password'];
                echo "<script>alert('Login Successful');</script>";
                echo "<script>location.href='./buysell.php?val1=$var1'</script>";
             }	
             else
             {
                $flag=1;
             }	
         }
    }
    if($flag==1)
    {
        echo "<script>alert('Invalid User! Login again');</script>";
        echo "<script>window.location.href='loginpage.html';</script>";
    }
?>
