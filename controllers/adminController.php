<?php
include_once('view/adminView.php');
include_once('models/DestinoModel.php');
include_once('models/EmpresaModel.php');

class adminController
{
    private $adminView;
    private $destinoModel;
    private $empresaModel;

    public function __construct()
    {
        $this->adminView = new adminView();
        $this->destinoModel = new DestinoModel();
    }

    public function mostrarIndex()
    {
        $this->adminView->showAdminView(NULL);
    }

    public function mostrarDestino()
    {

        $destinos = $this->destinoModel->getAll();
        $this->adminView->showAdminView($destinos);
    }
}
