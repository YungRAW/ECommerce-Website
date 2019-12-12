<?php

/**
 * Class Favourites
 */
class Favourites extends CI_Controller
{
    function index()
    {
        if (isset($_SESSION['email']) == null) {
            $this->load->view('login');
        } else {
            $id = $_GET['id'];

            $u_id = $_SESSION['u_id'];

            $query = $this->Favourites_model->check_pro($id, $u_id);

            $id = "";
            foreach ($query->result() as $row) {
                $id = $row->p_id;
            }


            if ($id == "") {

                $query = $this->Favourites_model->find_max();
                $f_id = 0;
                foreach ($query->result() as $row) {
                    $f_id = $row->f_id;
                }

                $f_id++;

                $f_id;
                $id = $_GET['id'];

                $query = $this->Favourites_model->check_prod($id);

                foreach ($query->result() as $row) {
                    $p_id = $row->p_id;
                    $pro_name = $row->product_name;
                    $pro_price = $row->product_price;
                    $file_name = $row->file_name;
                }

                $u_id = $_SESSION['u_id'];

                $data = array(
                    'f_id' => $f_id,
                    'u_id' => $u_id,
                    'p_id' => $p_id,
                    'product_name' => $pro_name,
                    'product_price' => $pro_price,
                    'file_name' => $file_name,
                );


                $this->Favourites_model->insPro($data);
                redirect('Shop');
            }
        }
    }

    function viewFavourites()
    {
        $id = $_SESSION['u_id'];

        $query = $this->Favourites_model->get_favourites($id);

        $data['v_favourites'] = $query->result();

        $this->load->view('favourites', $data);
    }


    function delItem(){
        $id = $_GET['id'];
        $u_id = $_SESSION['u_id'];

        $this->Favourites_model->del_item($id,$u_id);

        redirect('Favourites/viewFavourites');
    }

}
?>