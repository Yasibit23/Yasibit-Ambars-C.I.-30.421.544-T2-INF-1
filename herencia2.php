<?php

class convertir 
{
    public $tasa = 34.88;
    function convertirdolar($montobs)
{
    return $montobs / $this->tasa;
}
}

class Operaciones extends convertir 
{
    public function sumar($cantidad) 
    {
        return $cantidad + 100;
    }
}

class Padre
{
    public $a = 'Hola,';
    public $hola = 'esto es una clase sobre herencia';

    public function imprimir ()
    {
        echo $this->a.''.$this->hola;
    }
}

?> 
<html>
<body>
<?php

$resolver = new Operaciones;
echo $resolver->convertirdolar(75);
echo "<h1>Espacio</h1>";
echo $resolver->sumar(75);
echo "<br><br>";

class Hija extends Padre 
{   
}
$hija = new Hija();
$hija->imprimir();
?>
</body>
</html>