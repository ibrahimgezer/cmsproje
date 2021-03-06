<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller{

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder="product_v";

        $this->load->model("product_model");

    }
    public function index()
    {
        $viewData = new stdClass();
        /*Tablodan verilerin getirilmesi ..*/
        $items = $this->product_model->get_all();

        /*viewe gönderielcek değişkenlerin set eidlmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items=$items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function  new_form()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
}