<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databasename";

echo "		  P   S   L<br>";
echo "PHP - SQL - Leaderboard<br><br>";

echo "Creating database table...<br>";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
                                                $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE leaderboard (
            name VARCHAR(30) NOT NULL,
            score INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
            )";

    $conn->exec($sql);
	echo "<br><br><br>PSL was set up successfully<br>";
	echo "You can now add a new score with ";
	echo '<a href="https://' . $_SERVER['HTTP_HOST'] . '/addScore.php?name=username&score=100">https://' . $_SERVER['HTTP_HOST'] . '/addScore.php?name=username&score=100</a>';;
	
	echo "<br>and get the scores with ";
	echo '<a href="https://' . $_SERVER['HTTP_HOST'] . '/getScore.php">https://' . $_SERVER['HTTP_HOST'] . '/getScore.php</a>';;
}
catch(PDOException $e)
{
    echo $sql . "
" . $e->getMessage();
}

$conn = null;
?>