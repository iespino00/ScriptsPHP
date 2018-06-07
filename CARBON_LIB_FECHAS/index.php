<?php
require_once('vendor/autoload.php');
use Carbon\Carbon;

//Que zonas horarias existen
/*echo"<pre>";
var_dump(DateTimeZone::listIdentifiers()); */

//Idiomas que soporta la libreria
// vendor/nesbot/carbon/src/Carbon/lang

//Configurar zona horaria
//date_default_timezone_set('America/Mexico_City');

//Configurar Idioma español
Carbon::setLocale('es');

//Mostrar fecha actual
//echo Carbon::now()->toDateTimeString();

//Para convertir una fecha al formato de carbon solamente
//creamos un objeto y enviamos la fecha por el constructor
$fecha = new Carbon('2016-10-12');

//Funcion que toma la fecha y la fecha actual para decirnos que tiempo ha pasado
$lapso_tiempo = $fecha->diffForHumans(); 

echo $lapso_tiempo;

//Funcion para sumarle dias a una fecha
$fecha2 = new Carbon('2017-11-11');
echo "<p>".$fecha2->addDay(3);


//Funcion para saber si la fecha es fin de semana o no. $fecha3->isWeekend()
$fecha3 = new Carbon ('2018-06-09');
$finDeSemana= ($fecha3->isWeekend()) ? $fecha3." Si es un Fin de semana" : $fecha3." No es un Fin de Semana";
echo "<p>".$finDeSemana;


//Función para calcular la edad.
$fecha4 = new Carbon ('1989-06-21'); // ó $fecha4 = Carbon::createFromDate(1989, 06 ,21); 
echo "<p>". $fecha4->age ." Años";


//Calcular la fecha de "mañana"
$fecha4 = new Carbon('tomorrow');
echo "<p> Mañana es: ".$fecha4;


//calcular la fecha de ayer
$fechaAyer = new Carbon('yesterday');
echo "<p> Ayer fué: ".$fechaAyer;

//Indica la fecha del siguiente viernes:
$NextFriday = new Carbon('next friday');
echo "<p> El siguiente viernes es : ".$NextFriday;

//Indica la fecha del pasado viernes:
$lastFriday = new Carbon('last friday');
echo "<p> El pasado viernes fué : ".$lastFriday;

//Imprimir Año Mes y Día
$fechaActual = new Carbon();
echo "<p>". $fechaActual;
echo "<p>El año es: ".$fechaActual->year;
echo "<p>El mes es: ".$fechaActual->month;
echo "<p>El año día es: ".$fechaActual->day;
echo "<p>La hora es: ".$fechaActual->hour;
echo "<p>Minutos: ".$fechaActual->minute;


?>