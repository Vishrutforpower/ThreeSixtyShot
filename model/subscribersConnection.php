<?php
// Database configuration
$servername = "unclaimedfinancecom.ipagemysql.com";
$username = "unclaimedfinance";
$password = "Jeremiah2720!";
$database = "subscribers";

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

/*
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = new mysqli($servername, $username, $password, $database);

// get the post records
//I need help with doing this part, I want to send the email record into the txtEmail variable
$txtEmail = $_POST['txtEmail'];

// database insert SQL code
$sql = "INSERT INTO `subscribers` (`fldEmail`) VALUES ('$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>

*/
