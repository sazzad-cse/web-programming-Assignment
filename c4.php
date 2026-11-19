
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Work</title>
</head>
<body>
    <div>
        <?php 
$v1 = 16;
$v2 = 80;
echo "The two variable are = ",$v1." and ",$v2;
echo "<br>The addition of two variable is = ",$v1+$v2;
echo "<br>The subtraction of two variable is =",$v1-$v2;
echo "<br>The multiplication of two variable is = ",$v1*$v2;
echo "<br>The division of two variable is = ",$v1/$v2;
?>
    </div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 50px;
        background-color: lightgoldenrodyellow;
        text-align: center;
    }
    div{
        background-color: lightblue;
        padding: 20px;
        border-radius: 10px;
        display: inline-block;
        width: 350px;
        height: auto;
        border: 2px solid black;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 16px;
    }
</style>
</html>