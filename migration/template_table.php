<?php

  migration::table('table_name', function ($table) {
      $table->int('id');
      $table->string('username');
      return $table;
  });
