<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class About extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        
    
        public function index()
        {
           $data['title'] = 'Codeigniter | About';
           $data['content'] = $this->load->view('blog/about', '', TRUE);
           
           $this->load->view('template/blog', $data, FALSE); 
        }
    
    }    
?>