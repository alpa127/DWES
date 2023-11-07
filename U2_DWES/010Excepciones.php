<?php
    function dividir($a, $b){
        return $a/$b;
    }

    $num1=10;
    $num2=0;
    // Se produce la excepción y no la capturamos
    echo 'Resultado: '.dividir($num1,$num2);

    // Se produce la excepción y si la capturamos
    try{
        echo 'Resultado: '.dividir($num1,$num2);
    } catch(Throwable $e){
        echo 'Error: '.$e->getMessage();
    }

    function dividirConExcepcion($a,$b){
        // Comprueba que los tipos de datos son enteros
        //y si no lanza una excepción de tipo exception

        if(!is_int($a) or !is_int($b)){
            throw new Exception('Excepcion tipos de datos incorrecto');
        }
        return $a/$b;
        
        
    }
?>