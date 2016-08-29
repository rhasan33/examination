<?php

namespace App\Models;

class User
{
      public function data()
      {
            return function($req, $res, $args)
            {
                  echo "Hello world";
            };
      }
}
