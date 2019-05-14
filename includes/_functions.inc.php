<?php 
function my_server_url() {
  $server_name = $_SERVER['SERVER_NAME'];

  if (!in_array($_SERVER['SERVER_PORT'], [80, 443])) {
      $port = ":$_SERVER[SERVER_PORT]";
  } else {
      $port = '';
  }

  if (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) {
      $scheme = 'https';
  } else {
      $scheme = 'http';
  }
  return $scheme.'://'.$server_name.$port;
}
