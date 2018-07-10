
<?php
class Tpa extends CI_Model {


  function get_mylisting(){
    $this->db->order_by("no","desc");
    $query = $this->db->get('mylisting');
    return $query->result();
=======
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Tpa extends CI_Model{
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }


        public function home()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('home', 1);
                return $query->result();

        }
      }
