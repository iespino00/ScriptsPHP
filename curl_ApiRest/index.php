<?php 
get();

function get()
{

  $url  = "http://10.3.11.10/api/laboratorio/equipos";
  $conexion = curl_init();
  curl_setopt($conexion, CURLOPT_URL, $url);
  curl_setopt($conexion, CURLOPT_HTTPGET, true);
  curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Contetnt-Type: application/json'));
  //curl_setopt($conexion, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSV1_2);
  curl_setopt($conexion, CURLOPT_RETURNTRANSFER, 1);

  //curl_setopt($conexion, CURLOPT_USERPWD, "usuario:password");//Si requiero loguearme
  echo $respuesta = curl_exec($conexion);
  curl_close($conexion);

}

function post()
{
   $json = array(
                 "descripcion_eq"=> "Prueba de API desde PHP",
                 "eqno"=>"111",
                 "eqdesc"=>"Descripcion de Sisman",
                 "eqcode"=>"444");

 $data_json = json_encode($json);


  $url  = "http://10.3.11.10/api/laboratorio/equipos";
  $conexion = curl_init();
  curl_setopt($conexion, CURLOPT_URL, $url);
//  curl_setopt($conexion, CURLOPT_HTTPGET, false);
  curl_setopt($conexion, CURLOPT_HTTPHEADER, array(
                                                  'Contetnt-Type: application/json',
                                                  'Content-Lenght:'.strlen($data_json)
                                                 )
             );
  curl_setopt($conexion, CURLOPT_POST, 1);
  curl_setopt($conexion, CURLOPT_POSTFIELDS, $data_json); // poner el envio en el post
  curl_setopt($conexion, CURLOPT_HEADER, false);
  curl_setopt($conexion, CURLOPT_RETURNTRANSFER, 1);   
  echo $respuesta = curl_exec($conexion);

  curl_close($conexion);
}


function put()
{
   $json = array(
                 "descripcion_eq"=> "Prueba de API desde PHP ACTUALIZANDO",
                 "eqno"=>"111",
                 "eqdesc"=>"Descripcion de Sisman",
                 "eqcode"=>"444");
                 
 $data_json = json_encode($json);

 $id = "/6";
  $url  = "http://10.3.11.10/api/laboratorio/equipos".$id;
  $conexion = curl_init();
  
  curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "PUT");  //INDICAMOS QUE ES PETICION PUT
  curl_setopt($conexion, CURLOPT_URL, $url);
//  curl_setopt($conexion, CURLOPT_HTTPGET, false);
  curl_setopt($conexion, CURLOPT_HTTPHEADER, array(
                                                  'Contetnt-Type: application/json',
                                                  'Content-Lenght:'.strlen($data_json)
                                                 )
             );
  //curl_setopt($conexion, CURLOPT_POST, 1);
  curl_setopt($conexion, CURLOPT_POSTFIELDS, $data_json); // poner el envio en el post
  curl_setopt($conexion, CURLOPT_HEADER, false);
  curl_setopt($conexion, CURLOPT_RETURNTRANSFER, 1);   
  echo $respuesta = curl_exec($conexion);

  curl_close($conexion);
}

function delete()
{
   $json = array(
                 "descripcion_eq"=> "Prueba de API desde PHP ACTUALIZANDO",
                 "eqno"=>"111",
                 "eqdesc"=>"Descripcion de Sisman",
                 "eqcode"=>"444");
                 
 $data_json = json_encode($json);

 $id = "/6";
  $url  = "http://10.3.11.10/api/laboratorio/equipos".$id;
  $conexion = curl_init();
  
  curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "DELETE");  //INDICAMOS QUE ES PETICION PUT
  curl_setopt($conexion, CURLOPT_URL, $url);
  curl_setopt($conexion, CURLOPT_HTTPHEADER, array(
                                                  'Contetnt-Type: application/json'
                                                 )
             );
  curl_setopt($conexion, CURLOPT_POSTFIELDS, $data_json); // poner el envio en el post
  curl_setopt($conexion, CURLOPT_HEADER, false);
  curl_setopt($conexion, CURLOPT_RETURNTRANSFER, 1);   
  echo $respuesta = curl_exec($conexion);

  curl_close($conexion);
}
?>