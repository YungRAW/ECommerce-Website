<?php


class Shop extends CI_Controller
{
    function index(){

        $query = $this->Shop_model->getProd();

        $data['prods'] = $query->result();

        $this->load->view('shop',$data);
    }

    function catFilter()
    {
        $cat = $_POST['cat'];

        $query = $this->Shop_model->getProdCat($cat);

        $data['catData']=$query->result();

        $this->load->view('shop',$data);
    }

    function searchProduct(){

        $product = $this->input->post('search');

        $query = $this->Shop_model->searchProduct($product);

        $data["spData"] = $query->result();

        $this->load->view('shop', $data);
    }

}