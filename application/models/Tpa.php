<?php
class Tpa extends CI_Model {


  function get_mylisting(){
    $this->db->order_by("no","desc");
    $query = $this->db->get('mylisting');
    return $query->result();
        }
      }
