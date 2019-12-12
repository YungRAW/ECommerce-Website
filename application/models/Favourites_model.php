    <?php

    class Favourites_model extends CI_Model
    {

        function check_pro($id,$u_id){
            $this->db->where('p_id',$id);
            $this->db->where('u_id',$u_id);
            $query = $this->db->get('favorites');
            return $query;
        }

        function find_max(){
            $this->db->select_max('f_id', 'f_id');
            $query = $this->db->get('favorites');
            return $query;
        }

        function insPro($data){
            $this->db->insert('favorites',$data);
        }

        function upd_pro($id,$u_id){
            $this->db->where('p_id', $id);
            $this->db->where('u_id', $u_id);
            $this->db->update('favorites');
        }

        function get_favourites($id){
            $query = $this->db->get_where('favorites',array('u_id' => $id));
            return $query;
        }

        function get_all_favourites()
        {
            $query = $this->db->get_where('favorites');
            return $query;
        }

        function check_prod($p_id){
            $query = $this->db->get_where('products',array('p_id' => $p_id));
            return $query;
        }

        function del_item($id,$u_id){
            $this->db->where('p_id', $id );
            $this->db->where('u_id' , $u_id );
            $this->db->delete('favorites');
        }

    }