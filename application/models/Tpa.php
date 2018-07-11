
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
       function find_posts(){
       $this->db->from('posts');
       return $this->db->get()->result();
       }
       function find_pagetitle(){
       $this->db->from('pagetitle');
       return $this->db->get()->result();
       }
       function find_blogpostwithimage(){
       $this->db->from('blogpostwithimage');
       return $this->db->get()->result();
       }
       function find_blogpostwithslider(){
       $this->db->from('blogpostwithslider');
       return $this->db->get()->result();
       }
       function find_layerslider(){
       $this->db->from('layerslier');
       return $this->db->get()->result();
       }
         }
      ?>
