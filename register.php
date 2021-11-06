<?php 
    $flag=0;
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $confirmpass=$_POST['confirmpass'];
    $gender=$_POST['Gender'];
    $phno=$_POST['phno'];
    if ($password === $confirmpass) {
        $conn = mysqli_connect("localhost", "root", "", "Tradz");
    if($conn==false)
    {
        die("ERROR: Could not connect.".mysqli_connect_error());
    }
    else
    {
        $sql = "select email,password from user";  
        $query =mysqli_query($conn, $sql);
        if(mysqli_num_rows($query)>0)
        {  
            while($row = mysqli_fetch_assoc($query))
            { 
             if($row['email']==$email && $row['password']==$password)
             {
                $flag=1;
                break;
             }
            }
        }
        if($flag==0)
        {
            $sql1 = "insert into user values(DEFAULT,'{$name}','{$email}','{$password}','$phno','$gender')";
            $query1 =mysqli_query($conn,$sql1);
            if($query1)
            {
                echo "<script>alert('Registration Successful');</script>";
                echo "<script>window.location.href='loginpage.html';</script>";
            }
        }
        else
        {
            echo "<script>alert('User already exists.Register now');</script>";
            echo "<script>window.location.href='register.html';</script>";
        }
    }
    }
    else 
    {
        echo "<script>alert('Passwords doesnot match');</script>";
        echo "<script>window.location.href='register.html';</script>";
    }
    
?>
</html>