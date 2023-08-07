<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>second</title>
</head>
<body>
    <?php
   echo "i am php";
   ?>
   <br>
   <?php
   if(isset($_POST['submit']))
    {
        echo $_POST['name'];
        echo $_POST['Roll_no'];
    }
    
$today=date("d/m/y");
echo $today;

?>

</body>
</html>