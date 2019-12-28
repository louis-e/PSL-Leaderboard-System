<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databasename";

try
{
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT name, score FROM leaderboard";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "Name: " . $row["name"]. " - Score: " . $row["score"]. "<br>";
		}
	} else
	{
		echo "There are no scores in the database";
	}
	
	$conn->close();
}
catch(PDOException $e)
{
    echo $statement . "
" . $e->getMessage();
}
$conn = null;
?>