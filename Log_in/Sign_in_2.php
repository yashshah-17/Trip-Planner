<?php 
session_start();
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
    
    $username=test_input($_POST["username"]);
    $password=test_input($_POST["password"]);
}

function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

$query=mysqli_query($conn,"(Select * from sign_up where Username='$username' and Password='$password')");

$row=mysqli_fetch_array($query);

$_SESSION['myValue']=$username;
if($row['Username']==$username && $row['Password']==$password)
{
    //echo"Login Successful!! Welcome ".$row['Name'];
    
    header("Location: it_form.html");
}
else
{
    echo"Invalid username/pasword";
}
?>