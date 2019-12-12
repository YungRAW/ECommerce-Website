<?php


class Single_model extends CI_Model
{
    function getPro($id){
        $query = $this->db->get_where('products',array('p_id' => $id));
        return $query;
    }

    function rel_pro($id){

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where_not_in('p_id' , $id);

        $query = $this->db->get();

        return $query;
    }

}