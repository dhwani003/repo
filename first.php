<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>firstcode</title>
</head>
<body>
<form method="POST" action="second.php" name="form1">
 <label>name</label>
 <input type ="textbox" id="name" name="name">

 <label>Roll_no</label>
 <input type ="number" id="Roll_no" name="Roll_no">

 
 <input type ="submit" name="submit"> 
</form>
<?php
    if(isset($_POST['submit']))
    {
        echo $_POST['name'];
        echo $_POST['Roll_no'];
    }


?>
</body>
</html>