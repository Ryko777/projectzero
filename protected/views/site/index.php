<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--<h1>Welcome to <i><?php //echo CHtml::encode(Yii::app()->name); ?></i></h1>-->

<p>Varu intro ...</p>





<p>Project Progress Bar ...</p>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Progressbar - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#progressbar" ).progressbar({
value: 2
});
});
</script>
</head>
<body>
<div id="progressbar"></div>
</body>
</html>