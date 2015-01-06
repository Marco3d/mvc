<?php 
class contactoController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->_view->titulo = 'Contacto';
        $this->_view->renderizar('index', 'contacto');
    }
}




 ?>