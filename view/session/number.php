<?php
$sessionName = "ANAXSESSION";

$app->session = new Marv\Session\Session($sessionName);
//$app->session->setApp($app);
//$app->session->configure("session.php");


$app->session->start();

//$app->session->destroy($sessionName);


$inc = isset($_GET['increment']) ? htmlspecialchars($_GET['increment']) : null;
$dec = isset($_GET['decrement']) ? htmlspecialchars($_GET['decrement']) : null;

echo "Increment $inc<br>";
echo "Decrement $dec<br>";

$num = $app->session->get("number");

if ($num === false) {
    $app->session->set("number", 0);
}


if ((isset($inc)) && $num !== false) {
    $app->session->increase("number");
}

if ((isset($dec)) && $num !== false) {
    $app->session->decrease("number");
}


echo $app->session->get("number");




//var_dump($app->session);
?>
<article>
    <ul>
        <li><a href="?increment">Öka</li>
        <li><a href="?decrement">Minska</li>
    </ul>
</article>

<!--
<form action="" method="GET">
    <input type="submit" name="increment" value="Öka">
    <input type="submit" name="decrement" value="Minska">
</form>
-->
