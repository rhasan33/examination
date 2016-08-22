<?php
/**
 * user class for the api
 */
class User
{
  public function user(){
    return function($req, $res, $args){
      return $response->write("Hello ");
    };
  }
}
