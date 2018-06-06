<?php
echo '*****************$_SERVER ******************************** <BR><p>';
// ********************          $_SERVER         **************************
//para saber todas las variables: var_dump($_SERVER);
/*          $_SERVER["HTTP_USER_AGENT"]
Nos informa principalmente sobre el sistema operativo y tipo y versión de navegador utilizado por el internauta. Su principal utilidad radica en que, a partir de esta información, podemos redireccionar nuestros usuarios hacia páginas optimizadas para su navegador o realizar cualquier otro tipo de acción en el contexto de un navegador determinado.
*/
echo '<p>';
$servidor = $_SERVER["HTTP_USER_AGENT"];
echo '$_SERVER["HTTP_USER_AGENT"]<br>';
echo $servidor;
echo "<p>";


/*          $_SERVER["HTTP_ACCEPT_LANGUAGE"]
Nos informa principalmente sobre el sistema operativo y tipo y versión de navegador utilizado por el internauta. Su principal utilidad radica en que, a partir de esta información, podemos redireccionar nuestros usuarios hacia páginas optimizadas para su navegador o realizar cualquier otro tipo de acción en el contexto de un navegador determinado.
*/
$servidor = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
echo '$_SERVER["HTTP_ACCEPT_LANGUAGE"]<br>';
echo $servidor;
echo "<p>";


/*          $_SERVER["HTTP_REFERER"]
Nos indica la URL desde la cual el internauta ha tenido acceso a la página. Muy interesante para generar botones de "Atrás" dinámicos o para crear nuestros propios sistemas de estadísticas de visitas.
*/
$servidor = $_SERVER["HTTP_REFERER"];
echo '$_SERVER["HTTP_REFERER"]: Nos indica la URL desde la cual el internauta ha tenido acceso a la página. Muy interesante para generar botones de "Atrás" dinámicos o para crear nuestros propios sistemas de estadísticas de visitas.<br>';
echo $servidor;
echo "<p>";


/*          $_SERVER["PHP_SELF"]
Nos devuelve una cadena con la URL del script que está siendo ejecutado. Muy interesante para crear botones para recargar la página.
*/
$servidor = $_SERVER["PHP_SELF"];
echo '$_SERVER["PHP_SELF"]: Nos devuelve una cadena con la URL del script que está siendo ejecutado. Muy interesante para crear botones para recargar la página.<br>';
echo $servidor;
echo "<p>";

/*
$_SERVER["HTTP_GET_VARS"] Se trata de un array que almacena los nombres y contenidos de las variables enviadas al script por URL o por formularios GET.
$_SERVER["HTTP_POST_VARS"] Se trata de un array que almacena los nombres y contenidos de las variables enviadas al script por medio de un formulario POST.
$_SERVER["HTTP_COOKIE_VARS"] Se trata de un array que almacena los nombres y contenidos de las cookies. Veremos qué son más adelante.
$_SERVER["PHP_AUTH_USER"] Almacena la variable usuario cuando se efectúa la entrada a páginas de acceso restringido. Combinado con $_SERVER["PHP_AUTH_PW"] resulta ideal para controlar el acceso a las páginas internas del sitio.
$_SERVER["PHP_AUTH_PW"] Almacena la variable password cuando se efectúa la entrada a páginas de acceso restringido. Combinado con $_SERVER["PHP_AUTH_USER"] resulta ideal para controlar el acceso a las páginas internas del sitio.

*/


/*          $_SERVER["REMOTE_ADDR"]
Muestra la dirección IP del visitante.
*/
$servidor = $_SERVER["REMOTE_ADDR"];
echo '$_SERVER["REMOTE_ADDR"]: Muestra la dirección IP del visitante.<br>';
echo $servidor;
echo "<p>";


/*          $_SERVER["DOCUMENT_ROOT"]
Nos devuelve el path físico en el que se encuentra alojada la página en el servidor.
*/
$servidor = $_SERVER["DOCUMENT_ROOT"];
echo '$_SERVER["DOCUMENT_ROOT"] : Nos devuelve el path físico en el que se encuentra alojada la página en el servidor.<br>';
echo $servidor;
echo "<p>";


/*          $_SERVER["DOCUMENT_ROOT"]
Guarda el identificador de sesión del usuario. Veremos más adelante en qué consisten las sesiones.
*/
$servidor = $_SERVER["PHPSESSID"];
echo '$_SERVER["PHPSESSID"] : Guarda el identificador de sesión del usuario.<br>';
echo $servidor;
echo "<p>";




echo '*****************  Variables subglobales ********************** <BR><p>';
echo '

La lista de estas variables superglobales de PHP es la siguiente:';
echo '<p>';
echo '
$GLOBALS
Contiene una referencia a cada variable disponible en el espectro de las variables del script. Las llaves de esta matriz (índices del array) son los nombres de las variables globales. $GLOBALS existe dese PHP 3.';
echo '<p>';
echo '
$_SERVER
Variables definidas por el servidor web ó directamente relacionadas con el entorno en don el script se esta ejecutando. Es equivalente a lo que antes se conocía como $HTTP_SERVER_VARS. Son las variables de sistema que hemos explicado antes en este artículo.';
echo '<p>';
echo '
$_GET
Variables proporcionadas al script por medio de HTTP GET. Es equivalente a lo que antes se conocía como $HTTP_GET_VARS.';
echo '<p>';
echo '
$_POST
Variables proporcionadas al script por medio de HTTP POST. Es equivalente a lo que antes se conocía como $HTTP_POST_VARS. ';
echo '<p>';
echo '
$_COOKIE
Variables proporcionadas al script por medio de HTTP cookies. Es equivalente a lo que antes se conocía como $HTTP_COOKIE_VARS.';
echo '<p>';
echo '
$_FILES
Variables proporcionadas al script por medio de la subida de ficheros via HTTP . Es equivalente a lo que antes se conocía como $HTTP_POST_FILES.';
echo '<p>';
echo '
$_ENV
Variables proporcionadas al script por medio del entorno. Es equivalente a lo que antes se conocía como $HTTP_ENV_VARS.';
echo '<p>';
echo '
$_REQUEST
Variables proporcionadas al script por medio de cualquier mecanismo de entrada del usuario. La presencia y el orden en que aparecen las variables en esta matriz es definido por la directiva de configuración variables_order. Esta matriz no tiene un análogo en versiones anteriores a PHP 4.1.0.
';

?>