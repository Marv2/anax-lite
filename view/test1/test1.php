<?php
//include __DIR__ . "/header.php";

// All variables for this view is available in $data
//$this->renderView("view/header", $data);


// Specific variables

$this->renderView("view/header", [
    "title" => $title,
]);




// Get all available variables
//var_dump(get_defined_vars());

$linkDuck = $this->asset("img/and.jpg");
$linkViewTest1 = $this->url("view/test1");
$linkViewTest2 = $this->url("view/test2");
$linkGoogle = $this->url("https://google.se");

?><doctype html>
<meta charset="utf-8">
<title><?= $title ?></title>
<p><?= $message ?></p>
<p>Svaret på frågan är: <?= $answer ?></p>
<p>Link to <a href="<?= $linkGoogle ?>">Google</a></p>
<p>Here is a link to a static asset <a href="<?= $linkDuck ?>">and.jpg</a>.</p>
<p>Here is the same car within a paragraph as an image <img src="<?= $linkDuck ?>">, the image source is linked as a asset.</p>
<p>Here are two links to the test routes: <a href="<?= $linkViewTest1 ?>">view/test1</a> | <a href="<?= $linkViewTest2 ?>">view/test2</a></p>
<p>These variables are defined.</p>
<ul>
<?php foreach (get_defined_vars() as $key => $val) : ?>
    <li><?= $key ?></li>
<?php endforeach; ?>
</ul>

<?php
$this->renderView("view/footer", [
    "copyright" => $copyright
]);
