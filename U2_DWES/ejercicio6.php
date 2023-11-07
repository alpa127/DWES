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
        if($num1!=0&&$num2!=0){
            if(is_int($num1)&&is_int($num2)){
                echo '<br/>La suma de '.$num1.' y '.$num2.' es: '.($num1+$num2);
                echo '<br/>La resta de '.$num1.' y '.$num2.' es: '.($num1-$num2);
                echo '<br/>La multiplicación de '.$num1.'*'.$num2.' es: '.($num1*$num2);
                echo '<br/>La división de '.$num1.'/'.$num2.' es: '.($num1/$num2);
                echo '<br/>El resto de '.$num1.'%'.$num2.' es: '.($num1%$num2);
                echo '<br/>La potencia de '.$num1.'**'.$num2.' es: '.($num1**$num2);
            }
            else{
                echo'Uno de los 2 números no cumple una condición:';
                echo'Numero no entero';
            }
        } else{
            echo'Uno de los 2 números no cumple una condición:';
            echo'Numero=0';
        }
    ?>
</body>
</html>