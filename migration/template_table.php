<?php

  migration::table('table_name', function ($table) {
      $table->int('id');
      $table->text('username');
      return $table;
  });
