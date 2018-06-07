<?php

$file = 'backup.rar';    //archivo local a enviar
$remote_file = 'backup_respaldo.rar';   //Nombre con el que se grabará remotamente


//conexión Básica remota del servidor remoto, es decir donde se va a colocar el archivo.

$ftp_server= "servidordestino.com";
$ftp_user_name="usuario_ftp";
$ftp_user_pass="password_ftp";

$conn_id = ftp_connect($ftp_server);

$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

//subir archivo al servidor remoto
if(ftp_put($conn_id,$remote_file,file,FTP_BINARY))
{
echo 'Enviado Correctamente $file\n';
}
else{
    echo 'Problemas con la subida $file\n';
}

ftp_close();

?>