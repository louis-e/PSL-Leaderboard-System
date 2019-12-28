<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databasename";


echo "		  P   S   L<br>";
echo "PHP - SQL - Leaderboard<br><br>";

try
{
	$conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname , $username, $password);
	$statement = $conn->prepare("INSERT INTO leaderboard (name, score) VALUES (?, ?)");
	$statement->execute(array($_GET['name'], $_GET['score']));
	
	echo "<br><br><br>Highscore was added successfully!<br>";
}
catch(PDOException $e)
{
    echo $statement . "
" . $e->getMessage();
}

$conn = null;
?>