<?php
if(isset($_POST['title']) && !empty($_POST['title'])){
    // echo("<p>Title of embed is: " . $_POST['title'] . "</p>");
    $urlm = "https://sudao.site/embedgen/twitter/embed.php?title=" . $_POST['title'] . "&description=";
}
else {
die("Required field title was not filled out.");
}
if(isset($_POST['desc']) && !empty($_POST['desc'])){
    // echo("<p>Description of embed is: " . $_POST['desc'] . "</p>");
    $urlm = $urlm . $_POST['desc'] . "&image=";
}
else {
die("Required field description was not filled out.");
}
$urlm = $urlm . $_POST['image'];
$urlm = str_ireplace(" ", "%20", $urlm);
$url = "Paste this URL Into Twitter: " . $urlm;
$url = htmlspecialchars($url)
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<center><p><?php echo($url); ?></p></center>