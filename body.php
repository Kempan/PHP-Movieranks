<html>

<head>
    <style>
        .content{
            border:2px solid black;
            display: flex;
            justify-content:center;
        }

    </style>
</head>
<div class="content">
<ul>

<?php
    include './variabler.php';
    
    echo "<h1>$pageName</h1>";

    $movieList = array("8/10, Titanic",
    "3/10, Geostorm",
    "7/10, Ted",
    "9/10, The green mile",
    "5/10, Astrix & Obelix"
    );

    rsort($movieList);
    
    echo "<div class='lista'>";
    foreach($movieList as $movies){
        echo "<li>$movies</li>";
    }
    echo "</div>";
    include './footer.php';

    
?>

</ul>

</div>