<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="pass.php" method="post">
    Password:  <input type="password" name="Password"><br>
             <input type="submit">
      </form>
      <br><br>
    <?php echo $_POST["Password"]; ?>
  </body>
</html>
