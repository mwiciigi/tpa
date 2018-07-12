
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
    class Tpa extends CI_Model {
          public function __construct(){
          parent::__construct();
        }


        function get_myblog(){
          $this->db->order_by("no","desc");
          $query = $this->db->get('blog');
          return $query->result();
       }
       function get_homeblog(){
         $this->db->order_by("no","desc");
         $query = $this->db->get('blog',3);
         return $query->result();
      }
      }
