<?php


class EmpresaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=aerolinea;charset=utf8', 'root', '');
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'aerolinea';

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
            
            // Solo en modo desarrollo
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
    }

   public function getAll (){
    $query = $this->db->prepare('SELECT * FROM empresa');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
   }
}