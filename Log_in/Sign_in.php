<?php 

  /* $name=$gender=$dob=$email=$username=$password="";
   $nameErr=$genderErr=$dobErr=$emailErr=$usernameErr=$passwordErr="";*/
   $conn = mysqli_connect("localhost","root","");
// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo'Connection successful';
}*/

$db= mysqli_select_db($conn,"Trip_Planner");
/*if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo'DB Connected';
}
        

// Create database
/*$sql = "trip_planner";
if (mysql_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysql_error($conn);
}

mysqli_close($conn);
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = test_input($_POST["name"]);
    $gender=test_input($_POST["gender"]);
    $dob=test_input($_POST["dob"]);
    $email=test_input($_POST["email"]);
    $username=test_input($_POST["username"]);
    $password=test_input($_POST["password"]);
}

   /*	if (empty($_POST["name"]))
        {
            $nameErr="Name is required";
        }
    	else 
        {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            {
                $nameErr = "Only letters and white space allowed"; 
            } 
        }
        if(empty($_POST["gender"]))
        {
       	    $genderErr="Gender is required";
        }
        else
        {
       	    $gender=test_input($_POST["gender"]);
        }
        if(empty($_POST["dob"]))
        {
       	    $dobErr="Date of birth is required";
        }
        else
        {
       	    $dob=test_input($_POST["dob"]);
        }
        if(empty($_POST["email"]))
        {
       	    $emailErr="Email is required";
        }
        else
        {
       	    $email=test_input($_POST["email"]);
       	    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
       	    {
       		  $emailErr="Invalid";
       	    }
       	   
        }
        if(empty($_POST["username"]))
        {
       	    $usernameErr="Username is required";
        }
        else
        {
       	    $username=test_input($_POST["username"]);
       	    if(!preg_match("/^[a-zA-Z ]*$/",$username))
       	    {
       		   $usernameErr="Only letter and whitespace allowed";
       	    }
        }
        if(empty($_POST["password"]))
        {
       	    $passwordErr="Password is required";
        }
        else
        {
            $password=test_input($_POST["password"]);
      	    if(preg_match("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$^", $password))
            {
            
      		    $passwordErr="Only letters and numbers are allowed";
      	    }
        }
}*/
    
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $query=mysqli_query($conn,"INSERT INTO sign_up (Name,Gender,DOB,Email,Username,Password) VALUES ('$name', '$gender', '$dob','$email','$username','$password')");

    header("Location:Sign_in.html");
?>