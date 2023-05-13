<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$category = ['Desarrollo', 'Seguridad', 'Redes', 'Base de datos'];
    echo "<h1>Mi perfil</h1>";
    $age        = 20;
    $name       = "Hugo Pozos";
    $direccion  = "El Ahuehuete #47, Veracruz";
    $nacimiento = "29 Junio 2002";
    $proyectos  = 3;
    $data = "Me llamo $name y tengo $age años";

    echo "<h2>$name</h2>";
    echo "<h3>$direccion</h3>";
    echo "<h3>$nacimiento</h3>";

    $description = <<< EOD
    Programador backend con varios años de xp.
    <br> 
    Proyectos: ($proyectos)
    EOD;

    //$seleccion = implode('|', $category);
    //print_r($category); //print_r para imprimir arreglos
    //echo $data;

    echo $description;
    ?>
</body>
</html>