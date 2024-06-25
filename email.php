?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "project";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if ($conn ->connect_error) {
    echo "Connect error";
}

$email = $_POST['email'];

$query = "INSERT INTO email (Sno, email) VALUES (NULL, '$email');";

if (mysqli_query( $conn, $query)) {
    echo "<script type='text/javascript'>alert('Email Entered')</script>";
}
else {
    echo "<script type='text/javascript'>alert('Email Not Entered')</script>";
}

mysqli_close($conn);
?>