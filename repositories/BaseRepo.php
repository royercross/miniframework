<?php

abstract class BaseRepo{

    protected $model;

	function __construct() {
        $this->model = $this->getModel();
	}

    abstract public function getModel();

    function find($id){
        $mysql = new DBMannager();
        $mysql->connect();

        $query="SELECT * FROM alumnos WHERE id=?";
        $mysql->execute($query,array($id));

        if($mysql->count() < 1){
            return NULL;
        }

        $result = $mysql->getArray();

        return array_shift($this->arrayModel($result));
    }

    function arrayModel($sqldata){
        $array = array();
        $model = $this->model;
        for($i = 0; $i < count($sqldata); $i++){
            $obj = new $model($sqldata[$i]);
            array_push($array, $obj);                        
        }
        return $array;
    }

}