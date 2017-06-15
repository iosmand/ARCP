<?php
$time_start = microtime(true);	// Proccess timer start
$page = $_GET['s'];				// GET from URL ?s=***
$servername = "localhost";		// hostname of database
$username = "";		// username of database user
$password = "";		// password of database user
$dbname = "";		// name of database
// DON'T FORGET SET UP DATABASE CONFIGURATION

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);						// Started DB connection
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);										// Setted DB error mode
	$title = $conn->query("SELECT * FROM pages WHERE pagename = '{$page}'")->fetch(PDO::FETCH_ASSOC);	// Looking for title
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();	// if connection has error
    }

$conn = null;										// Stopped DB connection

if (empty($title['id'])) {							// if $title 'id' empty
	$page = "anasayfa";								// Write $page as "anasayfa"
	$title = array('title' => 'Ana Sayfa');			// Fix for title
}
//top
include_once('./includes/'.$page.'-top.html');
echo "<title>".$title['title']."</title>"; // title
include_once("./includes/header.html"); // head
//body
include_once('./includes/contents/'.$page.'.html'); // body
//end
include_once("./includes/footer.html");
$time_end = microtime(true);		// Proccess timer end
$timing = $time_end - $time_start;	// Proccess timer calculate
$ss = round($timing, 4);			// Proccess timer cut
echo "$ss saniyede oluşturuldu.\n";	// Write proccess timer on screen
include_once("./includes/footer-end.html"); // bottom
?>
