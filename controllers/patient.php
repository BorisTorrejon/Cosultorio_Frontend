<?php
class Patient extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    function get(){
        $this->view->patients = $this->model->get();
        $this->view->render('/patient/index');
    }
    public function registerPatient(){
        $this->model->post();
    }
}
?>