<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   echo "There are two variable based on the add,sub,mul and div find out the two variable";
   ?> 
   <div>
    <?php
   $v1=18;
   $v2=13;
   ?> 
    <p style="color: green;">
    <?php
   echo "The addition of two variable is = ",$v1+$v2;
   ?> 
    </p>
    <p style="color: orangered;">
    <?php
   echo "The subtraction of two variable is = ",$v1-$v2;
   ?> 
    </p>
    <p style="color:lightgreen;">
    <?php
   echo "The multiplication of two variable is = ",$v1*$v2;
   ?> 
    </p>
    <p style="color:red;">
    <?php
   echo "The division of two variable is = ",$v1/$v2;
   ?> 
    </p>
    <box>Enter your variable 1:</box><input type="number" id="V1">
    <box>Enter your variable 2:</box><input type="number" id="V2">
    <button type="submit" onclick="doit()">Submit</button>
   </div>
</body>
<style>
    body{
        text-align: center;
        margin-top: 100px;
        margin-left: 200px;
        margin-right: 200px;
        background-color: lightgray;
    }
    div{
        background-color: white;
        padding: 12px;
        border: none;
        border-radius: 9px;
    }
    div input{
        padding:5px;
        border-radius: 6px;
    }
    div button{
        color:white;
        background-color: green;
        border-radius: 2px;
        padding: 12px;
        margin-top: 10px;
    }
</style>
</html>
