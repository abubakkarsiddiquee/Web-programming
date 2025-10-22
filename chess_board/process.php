<?php 
    $size = $_POST['size'];

    echo "<table style='border:1px solid black; border-collapse:collapse'>";
    for($i=0;$i<$size;$i++){
        echo "<tr>";
        $flag=0;
        if($i%2 == 0){
            $flag=0;
        }
        else{
            $flag=1;
        }
        for($j=0;$j<$size;$j++){
            if($flag==0){
                echo "<td style='background-color:black; width:20px;height:20px'></td>";
                $flag=1;
            }
            else{
                echo "<td style='background-color:white'></td>";
                $flag=0;
            }
            
        }
        echo "</tr>";
    }
    echo "</table>";

?>