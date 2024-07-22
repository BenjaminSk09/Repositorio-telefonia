<?php
    namespace App\Controllers;
    use App\Models\Lineas_TelefonicasModel;

        class Lineas_Telefonicas extends BaseController
        {
            public function index (): string
            {
                $telef= new Lineas_TelefonicasModel();
                $datos['datos']=$telef->findAll();
                return view('lineas_telefonicas', $datos);
            }
        }