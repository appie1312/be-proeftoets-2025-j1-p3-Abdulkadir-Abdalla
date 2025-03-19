<?php

class Smartphones extends BaseController
{

private $SmartphonesModel;

Public function __construct()
{
    $this->SmartphonesModel = $this->model("SmartphonesModel");
}


    public function index()
    {

        $result = $this->SmartphonesModel->getAllSmartphones();
        
        $data = [
            'title' => 'Smartphones',
            'smartphones' => $result
        ];

        $this->view('Smartphones/index', $data);
    }

}