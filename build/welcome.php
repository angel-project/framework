<?php

  build::get('',function(){
    echo view::render('welcome.html',[
      'title' => 'Angel fly'
    ]);
  }); //example page
