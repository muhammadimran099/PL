<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_model extends CI_Model
{
    public function getProfile($name){
        return array("FullName" => "FULLNAME BLAH BLAH", "age" => 34);

    }
}
