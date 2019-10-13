<?php

  $database = [
      'DB_HOST' => 'dev_mysql',
      'DB_USERNAME' => 'root',
      'DB_PASSWORD' => 'secret',
      'DB_NAME' => 'maindb',
  ];

  foreach ($database as $key => $value) {
      putenv("$key=$value");
  }
?>