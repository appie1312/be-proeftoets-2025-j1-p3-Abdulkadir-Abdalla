<?php

class sneakers extends BaseController
{
    private $sneakersModel;

    public function __construct()
    {
         $this->sneakersModel = $this->model('SneakersModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle sneakers op uit de database
        */
       $result = $this->sneakersModel->getAllsneakers();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Overzicht sneakers',
            'sneakers' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('sneakers/index', $data); 
    }

}