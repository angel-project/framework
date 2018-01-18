<?php

   header("Content-type: text/html; charset=utf-8"); //recommend to use UTF-8

   date_default_timezone_set('PRC'); //recommend to use UTC time format

   sql::config([

     'address' => 'localhost',

     'username' => 'root',

     'password' => 'your_db_password',

     'database' => 'db_name'

   ]); //sql config
