<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include "functions.php";
    include "data.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body{
            background-color:red;
        }

    </style>
</head>
<body>
    

    <h1 style="text-align:center">På denna sida rankar jag rotfrukter</h2>

    <h2>Rotfrukter som är rankade:</h2>
    <ul>
        <?php
            listItems($rotfrukter);
        ?>
    </ul>
    <br/>
    <br/>
    <h3>Vad tycker jag om den här rotfrukten?</h3>
    <form method="GET" action="index.php">
        <select name="selected">
        <?php
            optionItems($rotfrukterId);
        ?>
        </select>
        <button type="submit">Ta reda på't</button>
    </form>


    
</body>
</html>
