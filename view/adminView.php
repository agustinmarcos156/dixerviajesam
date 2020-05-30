<?php
require_once('libs/Smarty.class.php');

class adminView
{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('baseURL', BASE_URL);
    }
    public function showAdminView($destinos)
    {
        $this->smarty->assign('destinos', $destinos);
        $this->smarty->display('templates/index.tpl');
    }
}
