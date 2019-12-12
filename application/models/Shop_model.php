<?php

class Shop_model extends CI_Model
{
    function getProd(){
        $query = $this->db->get('products');
        return $query;
    }

    function getProdCat($cat){
        $query = $this->db->get_where('products',array('product_category' =>$cat));
        return $query;
    }
    
    function searchProduct($product){
    	
        $this->db->select('*');
        $this->db->from('products');
        $this->db->like('product_name', $product);
        $this->db->or_like('product_category', $product);

        $query = $this->db->get();

        return $query;
    }
}