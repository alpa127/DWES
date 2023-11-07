<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1=rand(0,10);
        $num2=rand(0,10);        
        $num3=rand(0,10);

        echo'Los numeros generados son: '.$num1.', '.$num2.', '.$num3.'.';
        if($num1==$num2){   
            echo'Los numeros '.$num1.' y '.$num2.' están repetidos';
        }
        if($num1==$num3){
            echo'Los numeros '.$num1.' y '.$num3.' están repetidos';
        }
        if($num3==$num2){
            echo'Los numeros '.$num3.' y '.$num2.' están repetidos';
        }

        if($num1<$num2<$num3){
                echo'El orden de menor a mayor sería: '.$num1.', '.$num2.', '.$num3;    
        }
        if($num1<$num3<$num2){
            echo'El orden de menor a mayor sería: '.$num1.', '.$num3.', '.$num2;    
        }
        if($num2<$num1<$num3){
            echo'El orden de menor a mayor sería: '.$num2.', '.$num1.', '.$num3;    
        }
        if($num2<$num3<$num1){
            echo'El orden de menor a mayor sería: '.$num2.', '.$num3.', '.$num1;    
        }
        if($num3<$num1<$num2){
            echo'El orden de menor a mayor sería: '.$num3.', '.$num1.', '.$num2;    
        }
        if($num3<$num2<$num1){
            echo'El orden de menor a mayor sería: '.$num3.', '.$num2.', '.$num1;    
        }
        
    ?>
</body>
</html>