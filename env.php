<?php

  $database = [
    //   'DB_DRIVER' => 'postgresql',
    //   'DB_DRIVER' => 'sqlite',
    //   'DB_DRIVER' => 'cubrid',
      'DB_DRIVER' => 'mariadb',
      'DB_HOST' => 'database_host',
      'DB_USERNAME' => 'db_username',
      'DB_PASSWORD' => 'db_password',
      'DB_NAME' => 'db_name',
  ];

  foreach ( $database as $key => $value) {
      putenv("$key=$value");
  }


?>