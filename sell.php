<?php 
    $flag=0;
    $email=$_POST['email'];
    $proptype=$_POST['property'];
    $loc=$_POST['loc'];
    $price=$_POST['price'];
    $area=$_POST['Area'];
    $status=$_POST['status'];
    $desc=$_POST['description'];
    $pic1=$_POST['pic1'];
    $pic2=$_POST['pic2'];
    $pic3=$_POST['pic3'];
    $pic4=$_POST['pic4'];
    $v=$_POST['video'];
    $conn = mysqli_connect("localhost", "root", "", "Tradz");
    if($conn==false)
    {
        die("ERROR: Could not connect.".mysqli_connect_error());
    }
    else
    {  
            $sql = "insert into property values(DEFAULT,'$email','$proptype','$loc','$price','$area','$status','$desc','$pic1','$pic2','$pic3','$pic4','$v')";
            $query1 =mysqli_query($conn,$sql);
            if($query1)
            {
                echo "<script>alert('Thank you for uploading new property');</script>";
                $val1= $_GET['val1'];
                echo "<script>window.location.href='./buysell.php?val1=';</script>";
            }
    }
?>
</html>