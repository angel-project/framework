<?php

  foreach (glob(__dir__.'/../vendor/angel-project/core/src/*') as $file) {
      $method_name = basename($file);
      require_once $file.'/'.$method_name.'.php';
      class_alias('angel\\'.$method_name, $method_name);
  } //Autoload block files

  require user::dir().'/build/config.php';

  $files = scandir(user::dir().'/migration');

  foreach ($files as $file) {
      if (is::in('.php', $file)) {
          if ($file!='update.php') {
              require user::dir().'/migration/'.$file;
          }
      }
  }
