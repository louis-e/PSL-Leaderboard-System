<?php
$password = 'admin';

if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
    header('Location: login.php');
    exit;
}


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databasename";

echo "		  P   S   L<br>";
echo "PHP - SQL - Leaderboard<br><br>";

echo "Administration Panel<br>--------------------------------<br><br><br><br>";

try
{
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT name, score FROM leaderboard";
	$result = $conn->query($sql);
	echo "There are $result->num_rows scores in your database.";
}
catch(PDOException $e)
{
    echo $statement . "
" . $e->getMessage();
}
$conn = null;
?>