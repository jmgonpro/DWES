<?php 
    /**
     * Ejercicio 3. Operaciones aritméticas.
     * 
     * Escribe un script que muestre al usuario un formulario con una operación aritmética básica, 
     * generada aleatoriamente. Una vez completado el formulario, el script indicará si la operación se 
     * realizó correctamente. 
     * 
     * @author Juan Manuel González Prófumo
    */

    $procesaFormulario = $comprobarResultado = false;
    $operaciones = array("+", "-", "*", "/");
    $indice = rand(0, 3);
    $n1 = rand(1, 100);
    $n2 = rand(1, 100);
    $resultado = $valor1 = $valor2 = 0;
    $datos = array();
    $msgResultado = $operacion = "";

    if (isset($_POST["comprobar"])) {
        $procesaFormulario = true;
        $valor1 = $_POST["n1"];
        $valor2 = $_POST["n2"];
        $operacion = $_POST["operacion"];
        $resultado = $_POST["resultado"];

        switch ($operacion) {
            case '+':
                if ($resultado == ($valor1 + $valor2)) {
                    $msgResultado = "<p>$valor1 $operacion $valor2 = " . ($valor1+$valor2) . "</p><p>$resultado</p><p>Resultado correcto</p>";
                }

                else {
                    $msgResultado = "<p>$valor1 $operacion $valor2 = " . ($valor1+$valor2) . "</p><p>$resultado</p><p>Resultado incorrecto</p>";
                }
                break;
            case '-':
                if ($resultado == ($valor1 - $valor2)) {
                    $msgResultado = "<p>$valor1 $operacion $valor2 = " . ($valor1-$valor2) . "</p><p>$resultado</p><p>Resultado correcto</p>";
                }

                else {
                    $msgResultado ="<p>$valor1 $operacion $valor2 = " . ($valor1-$valor2) . "</p><p>$resultado</p><p>Resultado incorrecto</p>";
                }
                break;
            case '*':
                if ($resultado == ($valor1 * $valor2)) {
                    $msgResultado = "<p>$valor1 $operacion $valor2 = " . ($valor1*$valor2) . "</p><p>$resultado</p><p>Resultado correcto</p>";
                }

                else {
                    $msgResultado = "<p>$valor1 $operacion $valor2 = " . ($valor1*$valor2) . "</p><p>$resultado</p><p>Resultado incorrecto</p>";
                }
                break;
            default:
                if ($resultado == ($valor1 / $valor2)) {
                    $msgResultado = "<p>$valor1 $operacion $valor2 = " . ($valor1/$valor2) . "</p><p>$resultado</p><p>Resultado correcto</p>";
                }

                else {
                    $msgResultado = "<p>$valor1 $operacion $valor2 = " . ($valor1/$valor2) . "</p><p>$resultado</p><p>Resultado incorrecto</p>";
                }
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones aritméticas</title>
</head>
<body>
    <h2>Operaciones aritméticas</h2>

    <form action="" method="post">
        <?php
            echo "$n1 $operaciones[$indice] $n2 = ";
        ?>  

        <label for="resultado"><input type="number" name="resultado" value=<?php echo $resultado ?>></label>
        <input type="hidden" name="n1" value=<?php echo $n1 ?>>
        <input type="hidden" name="n2" value=<?php echo $n2 ?>>
        <input type="hidden" name="operacion" value=<?php echo $operaciones[$indice] ?>>
        <input type="submit" name="comprobar" value="Comprobar">
    </form>

    <?php
        if ($procesaFormulario) {
            echo "<p>$msgResultado</p>";
        } 
    ?>
</body>
</html>