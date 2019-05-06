<?php

return array(

  'default' => 'mysql',
  'migrations' => 'migrations',
  
  'connections' => array(
  
  # Primary/Default database connection
  'mysql' => array(
  'driver' => 'mysql',
  'host' => '127.0.0.1',
  'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
  'database' => 'assignment2',
  'username' => 'root',
  'password' => 'root',
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => '',
  ),
)

  );