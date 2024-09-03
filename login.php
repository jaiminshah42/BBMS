<?php      
    include('includes/config1.php');  
    $emailaddress = $_POST['emailaddress'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $emailaddress = stripcslashes($emailaddress);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $emailaddress);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from registration where emailaddress = '$emailaddress' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count > 0){  
            
            header("location:index.php");
            //echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            //echo '<script>alert("Error...")</script>';  
            header("location:loginpage.html");   
        }     
?>  