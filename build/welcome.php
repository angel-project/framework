<?php

  build::get('',function(){
    echo view::render('welcome.html',[
      'title' => 'Angel fly',
      'url' => user::url()
    ]);
  }); //example page

  build::get('test',function(){
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
      $path = getcwd();
      $path = $path.'\vendor\angel-project\core\src';
      require $path.'\ary\test.php';
      require $path.'\build\test.php';
      require $path.'\curl\test.php';
      require $path.'\is\test.php';
      require $path.'\js\test.php';
      require $path.'\jump\test.php';
      require $path.'\str\test.php';
      require $path.'\user\test.php';
     }
    else {
      $path = getcwd();
      $path = $path.'/vendor/angel-project/core/src';
      require $path.'/ary/test.php';
      require $path.'/build/test.php';
      require $path.'/curl/test.php';
      require $path.'/is/test.php';
      require $path.'/js/test.php';
      require $path.'/jump/test.php';
      require $path.'/str/test.php';
      require $path.'/user/test.php';
    }
  }); //example page
