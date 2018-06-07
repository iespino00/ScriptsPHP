<?php
class Student
{
    public $nombre; //Se puede accesar desde el Objeto
    public $notas = array(); //Se puede Accesar desde el Objeto
    private $promedio; //solo es usado dentro de la clase y no es heredable (protected si es heredable)

    //funcion que se autoejecuta cuando defines un objeto, le puedes poner argumentos de inicialización, por defecto todo es vacio
    public function __construct($arg_nombre="", $arg_notas=array()) 
    {
        //ponemos el argumento pasado cuando defines el objeto
        $this->nombre= $arg_nombre;
        $this->notas=$arg_notas;
    }

    public function promedio()
    {
        $total=0;

        foreach($this->notas as $nota)
        {
            $total+=$nota; //acumulo la nota actual
        }
        $this->promedio = $total/4; //grabo el promedio de las 4 notas en la variable promedio, recuerde que las variables dentro de una clase se accesan con $this->

        return $this->promedio;   //retornamos el promedio
    }

    public function imprimir_notas()
    {
        $i=0;
        foreach($this->notas as $nota)
        {
            $i++;
            echo "Nota ".$i. " es: ".$nota ."<br/>";
        }
    }
}


?>