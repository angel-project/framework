<?php

  build::get('',function(){
    echo view::render('welcome.html',[
      'title' => 'Angel fly',
      'url' => user::url()
    ]);
  }); //example page
