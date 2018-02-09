<?php
  require __dir__.'/vendor/autoload.php';
  $whoops = new \Whoops\Run;
  $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
  $whoops->register();
  //get system errors by Whoops
  //disable as deployed

  require_once __dir__.'/vendor/angel-project/core/bootstrap.php';
  new angel\bootstrap;
  //start angel

  system::get_error('on');
  system::get_runtime('off');
  //get system debug messages
  //hello angel!
