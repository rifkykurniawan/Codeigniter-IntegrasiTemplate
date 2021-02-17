<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        
    
        public function index()
        {
           $data['title'] = 'Codeigniter | Home';
           $data['content'] = $this->load->view('blog/home', '', TRUE);
           
           $this->load->view('template/blog', $data, FALSE);
           
           
        }
    
    }    
?>