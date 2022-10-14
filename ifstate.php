<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$isMale = false;
$isTall = true;
if ($isMale && $isTall)
#if ($isMale || $isTall)
{
  echo "You are a Tall Male";
}elseif ($isMale && !$isTall){
echo "You are not a Tall Male";
} elseif (!$isMale && $isTall){
  echo "You are not a Male but Tall";
} else {
  echo "You are not Male a Tall!!!!!";
}
     ?>

  </body>
</html>
