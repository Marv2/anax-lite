<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
</head>
<body>

<h1>Rendering blocks in layout regions</h1>

<p><?= $message ?>

<?php if ($this->regionHasContent("flash")) : ?>
<div class="flash-wrap">
    <?php $this->renderRegion("flash") ?>
</div>
<?php endif; ?>

<?php if ($this->regionHasContent("main")) : ?>
<div class="main-wrap">
    <?php $this->renderRegion("main") ?>
</div>
<?php endif; ?>

<?php if ($this->regionHasContent("footer")) : ?>
<div class="footer-wrap">
    <?php $this->renderRegion("footer") ?>
</div>
<?php endif; ?>

</body>
</html>
