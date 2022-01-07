<?php
class PatientModel{
     public function __construct()
     {
     }
     public function get(){
         $patient = json_decode(file_get_contents('https://projectbuenosaires.000webhostapp.com/api/restPatients.php'));
         return $patient;
     }
     public function post(){
         echo "insertar pacientes";
     }
     public function put(){
         
     }
     public function delete(){
         
     }
}
?>