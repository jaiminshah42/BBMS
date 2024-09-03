<?php      
    include('includes/config1.php'); 

	$fullname = $_POST['fullname'];  
    $emailaddress = $_POST['emailaddress'];	
	$mobilenumber = $_POST['mobilenumber'];  
    $age = $_POST['age'];
    $password = $_POST['password']; 

    if (isset($_POST['submit'])) {
	  	// code...

	  }  
      
        //to prevent from mysqli injection  
		$fullname = stripcslashes($fullname);  
        $emailaddress = stripcslashes($emailaddress);
        $mobilenumber = stripcslashes($mobilenumber);  
        $age = stripcslashes($age);
        $password = stripcslashes($password); 

        $fullname = mysqli_real_escape_string($con, $fullname);  
     	$emailaddress = mysqli_real_escape_string($con, $emailaddress); 
		$mobilenumber = mysqli_real_escape_string($con, $mobilenumber);  
      	$age = mysqli_real_escape_string($con, $age);
      	$password = mysqli_real_escape_string($con, $password); 		
	
	$sql = "INSERT INTO registration". "(fullname,emailaddress,mobilenumber,age,password) ". "VALUES ('$fullname','$emailaddress','$mobilenumber','$age','$password')";

	

	if(mysqli_query($con, $sql)){ 
		echo '<script>alert("User Created Successfully...")</script>'; 
		echo "Record inserted successfully";  
	 	header("location:loginpage.html");
	 	
	}
	else{  
	echo '<script>alert("Error...")</script>';  
		header("location:registration.html");	
	}  
	  
	mysqli_close($con);  
?> 