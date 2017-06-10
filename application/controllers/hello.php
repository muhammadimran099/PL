<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Hello extends CI_Controller {
    
    public function __construct(){
        parent:: __construct();
        //echo "THis is initialization";
    }
    
    //http://localhost/CI/index.php/hello
    public function index(){
        echo "INDEX FUNCTION";
      
    }

    //http://localhost/CI/index.php/hello/one/emr
   
    public function one($name){
        $this->load->model("hello_model");

        $profile = $this -> hello_model -> getProfile("testName");

        //print_r($profile);

        $data ['profile'] = $profile;
        $this->load->view('header');
        $data=array("n" => $name);
        $data ['profile'] = $profile;
        $this->load->view('one',$data);
        $this->load->view('footer');
        



        // $this->load->view('header');
        // $data=array("n" => $name);
        // $this->load->view('one',$data);
    }

    //http://localhost/CI/index.php/hello/one/param1/param/2
    //  public function one($n1, $n2){
    //     echo "THIS IS ONE";
    //     echo "$n1, $n2";
    // }

    public function Two($n1, $n2){
        echo "THIS IS ONE";
        echo "$n1, $n2";
    }



}