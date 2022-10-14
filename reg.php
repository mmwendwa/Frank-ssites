<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="reg.php" method="post">
      Name: <input type="text"  name="Username">
       Age: <input type="number"  name="age">
            <input type="submit">
      <br>
  <!<input type="submit">
    </form>
    <br>
  This is your name:  <?php echo $_POST["Username"];?>
  <br>
  This is your age:  <?php echo $_POST["age"]; ?>
  </body>
</html>
