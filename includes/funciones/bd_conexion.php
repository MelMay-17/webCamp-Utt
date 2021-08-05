<?php
    define('VENTADEBOLETOS_HOST', 'localhost');
    define('VENTADEBOLETOS_DB_USUARIO', 'root');
    define('VENTADEBOLETOS_DB_PASSWORD', '');
    define('VENTADEBOLETOS_DB_DATABASE', 'bd_ventaboletos');

    $conn = new mysqli(VENTADEBOLETOS_HOST, VENTADEBOLETOS_DB_USUARIO, VENTADEBOLETOS_DB_PASSWORD, VENTADEBOLETOS_DB_DATABASE);

    if($conn->connect_error) {
      echo $conn->connect_error;
    }
