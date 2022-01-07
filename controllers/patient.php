<?php
class Patient extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('/patient/index');
    }
}
?>