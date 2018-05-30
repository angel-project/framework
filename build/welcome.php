<?php

  build::get('', function () {
      view::global([
      'title' => 'Angel fly',
      'url' => user::url()
    ]); //set global variables
      echo view::render('welcome.html');
  }); //example page
