<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
#$phrase = "Mwendwa Academy";
#echo $phrase;
#echo substr($phrase, 9);
#echo strtolower($phrase);
#echo strtoupper($phrase);
#echo 40;
#echo 40+21.556678;
#echo 3*4;
#echo 38 % 11;
#echo 4+7*11;
#$num++;
#$num--;
#$num = $num + 33;
#$num -=33;
#echo $num;
#echo abs(-$num);
#echo max(10,27.1);
#echo pow(3,4);
#echo sqrt(121);
#echo round(2.79);
#echo ceil(2.1);
#echo ceil(2.0);
#echo floor(2.9);
#echo (4+7)*11;
  <form action="string.php" method="get">
     Name: <input type="text" name="Username">
           <input action="Submit">
   </form>
   <br>
   <?php echo $_GET["Username"];
   ?>
 </body>
</html>
