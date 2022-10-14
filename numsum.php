<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="numsum.php"  method="get">
    First Number: <input type="number"  name="num1">
    Second Number:  <input type="number"  name="num2">
                    <input type="Submit">
    </form>
    <br>
  Answer:  <?php echo $_GET["num1"] + $_GET["num2"] ?>

  </body>
</html>
