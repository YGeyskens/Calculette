<?php
    
    $n1 = $_POST['1'];
    $n2 = $_POST['2'];
    $op = $_POST['operateur'];

    function puissance($x,$y){
        $res = 1;
        for ($i=0;$i<$y;$i++)
        $res *= $x;
        return $res;
    }

    if(isset($n1) && isset($n2)){

        if($n1 != NULL && $n2 != NULL){
            if($op == 'division' AND $n2 == 0){
                echo 'Impossible de diviser par 0, veuillez entrer une autre valeur';
            }else{
                switch($op){
                    case 'multiplication':
                        $result = $n1 * $n2;
                        echo 'Voici le résultar: ' .$result;
                    break;  
                    
                    case 'addition':
                        $result = $n1 + $n2;
                        echo 'Voici le résultar: ' .$result;
                    break;
                    
                    case 'division':
                        $result = $n1 / $n2;
                        echo 'Voici le résultar: ' .$result;
                    break; 
                    
                    case 'soustraction':
                        $result = $n1 - $n2;
                        echo 'Voici le résultar: ' .$result;
                    break;
                    
                    case 'puissance':
                        $result = puissance($n1,$n2);
                        echo 'Voici le résultar: ' .$result;
                    break;
                }
            }
        }
    }
    else{
        echo 'Veuillez entrer un nombre dans chaque champs formulaire';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Calculatrice</title>
    </head>
    <body>
        <header>
            <h1>
                Calculatrice
            </h1>
        </header>
        <form action="#" method ="post" name ="form">
            <p>
                Nombre 1: <input name="1" type="text">
            </p>
            <p>
                Nombre 2: <input name="2" type="text">
            </p>
            <select name="operateur" >

                <option value="multiplication">x</option>
                <option value="addition">+</option>
                <option value="division">%</option>
                <option value="soustraction">-</option>
                <option value="puissance">*</option>

            </select>
            <input type="submit" value="calculer">
            <input type="reset" value="effacer">
        </form>
    </body>
</html>