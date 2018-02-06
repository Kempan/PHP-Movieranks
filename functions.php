<?php 

    function listItems($array){
        krsort($array);
        foreach($array as $title => $rating){
            echo "<li>$title</li>";
        }
    }

    function optionItems($array){
        rsort($array);
        foreach($array as $title => $rating){
            echo "<option>$rating</option>";
        }
    }

    
    
?>