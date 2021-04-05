<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model(array('ModelJenisBarang', 'ModelSatuan', 'ModelBarang'));
    }

    function index()
    {
        $this->template->load('template', 'product/product');
    }
}
