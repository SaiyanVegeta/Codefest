<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $check = $_POST['check'];
  $text = $_POST['texto'];
  $arr = Array();

  for($i = 0; $i< sizeof($check); $i++ ) {
    $arr[] = "('{$check[$i]}', '{$text[$i]}')";
  }

  echo 'INSERT INTO `table` (`checkbox`, `texto`) VALUES '.implode($arr, ',');
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../gh-fork-ribbon.css" />
</head>
<body>


<form action="" method="post" id="form">

  <input type="checkbox" name="check[]" value="1" /><input type="text" name="texto[]" value="um" disabled="disabled" />
  <input type="checkbox" name="check[]" value="2" /><input type="text" name="texto[]" value="dois" disabled="disabled" />
  <input type="checkbox" name="check[]" value="3" /><input type="text" name="texto[]" value="tres" disabled="disabled" />
  <input type="checkbox" name="check[]" value="4" /><input type="text" name="texto[]" value="quatro" disabled="disabled" />
  <input type="checkbox" name="check[]" value="5" /><input type="text" name="texto[]" value="cinco" disabled="disabled" />

  <input type="submit" value="ok" />
</form>

<script>
(function(document, undefined){
  'use strict';
  var $form = document.getElementById('form'),
      $check = $form.querySelectorAll('input[type="checkbox"]');

  $check = [].slice.call($check);

  $check.forEach(function($each) {
    $each.addEventListener('click', function(){
      var $inputText = this.nextSibling;

      if (this.checked) {
        $inputText.removeAttribute('disabled');
      } else {
        $inputText.setAttribute('disabled', 'disabled');
      }
    });
  });
}(document));
</script>

<div class="github-fork-ribbon-wrapper right">
  <div class="github-fork-ribbon">
    <a href="https://github.com/wbruno/examples">Fork me on GitHub</a>
  </div>
</div>
</body>
</html>

