<?php
$time_start = microtime(true);
$page = $_GET['s'];
$servername = "localhost";
$username = "admin_db331";
$password = "5zyJVSGFKJ";
$dbname = "admin_db331";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$title = $conn->query("SELECT * FROM pages WHERE pagename = '{$page}'")->fetch(PDO::FETCH_ASSOC);
	//$pagectrl = $conn->query("SELECT * FROM pages WHERE ")
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$conn = null;

if (empty($title['id'])) {
	$page = "anasayfa";
	$title = array('title' => 'Ana Sayfa');
}
//top
include_once('./includes/'.$page.'-top.html');
echo "<title>".$title['title']."</title>"; // title
include_once("./includes/header.html"); // head
//body
include_once('./includes/contents/'.$page.'.html'); // body
//end
include_once("./includes/footer.html");
$time_end = microtime(true);
$timing = $time_end - $time_start;
$ss = round($timing, 4);
echo "$ss saniyede oluşturuldu.\n";
include_once("./includes/footer-end.html"); // bottom
?>
