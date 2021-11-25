<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks For Donating</title>
</head>
<body>

<?php $SCORE = (int) $_POST["momo"] ?>
 <?php if ($SCORE >= 95): ?>
    <strong  style="font-size: 50px;
      color: #161111;">A+</strong>

<?php elseif ( $SCORE >=90): ?>
    <strong  style="font-size: 50px;
      color: #161111;">A</strong>

<?php elseif ( $SCORE >=85): ?>
    <strong  style="font-size: 50px;
      color: #161111;">B+</strong>

<?php elseif ( $SCORE >=80): ?>
    <strong  style="font-size: 50px;
      color: #161111;">B</strong>

<?php elseif ( $SCORE >=75): ?>
    <strong  style="font-size: 50px;
      color: #161111;">C+</strong>

<?php elseif ( $SCORE >=70): ?>
    <strong  style="font-size: 50px;
      color: #161111;">C</strong>

<?php elseif ( $SCORE ===0): ?>
    <strong  style="font-size: 50px;
      color: #161111;">No scored entered</strong>

<?php else : ?>
    <strong id="fail" style="font-size: 50px;
      color: #161111;">F</strong>
      

<?php endif ?>
</body>
</html>