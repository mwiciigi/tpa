
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

      function get_projects($project_id){
        $this->db->from('project');
           $this->db->where(array('project_id'=>$project_id));
           return $this->db->get()->result();
        }


     function get_projectlist(){
       $this->db->order_by("id","desc");
       $query = $this->db->get('project');
       return $query->result();
    }
    function get_vision(){
      $this->db->order_by("id","desc");
      $query = $this->db->get('vision');
      return $query->result();
   }
   function get_mission(){
     $this->db->order_by("id","desc");
     $query = $this->db->get('mission');
     return $query->result();
  }
  function get_aboutus(){
    $this->db->order_by("id","desc");
    $query = $this->db->get('aboutus');
    return $query->result();
 }
 function get_objectives(){
   $this->db->order_by("id","desc");
   $query = $this->db->get('objectives');
   return $query->result();
}
function get_keepgirlinschool(){
  $this->db->order_by("id","desc");
  $query = $this->db->get('keepgirlinschool');
  return $query->result();
}
function save_comment($data){
       $err = '';
       $insert = $this->db->insert('comment', $data);
       // $insert_id = $this->db->insert_id();
       if ($insert){
       $arr_return = array('res' => true,'dt' => 'Comment Saved Successfully');
       }else{
       $arr_return = array('res' => false,'dt' => 'Comment Failed to Save');

       }
       return $arr_return;
}
      }
