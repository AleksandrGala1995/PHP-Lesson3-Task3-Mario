<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть висоту піраміди Маріо (від 1 до 15): <input type="number" name="height"><br>
    <input type="submit">
</form>
    
<p align="right">
    
<?php
if (!empty($_POST['height'])) {
    $height = $_POST['height'];
   
   
   if (($height>=1)&&($height<=15))
   {
       for ($i=1; $i<=$height; $i++){
           
         for ($j=1; $j<=$i; $j++){ 
         echo "#";
         }
         echo "<br>";  
       }
        
   } else 
   {
      echo "Введені неправильні дані"; 
   }
}
?>
</p>

</body>
</html>