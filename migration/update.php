<?php

  require user::dir().'/build/config.php';

  $files = scandir(user::dir().'/migration');

  foreach ($files as $file) {
      if (is::in('.php', $file)) {
          if ($file!='update.php') {
              require user::dir().'/migration/'.$file;
          }
      }
  }
