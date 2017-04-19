<?php
    define('_HOST_', '10.20.4.51');
    define('__ID__', 'root');
    define('__PWD__', 'phpStudy1!');
    define('__DB__', 'php_study');   

    class Db {
        private $con;

        public function __construct($useDb = __DB__){
            try{
                $this->con = new PDO('mysql:host='._HOST_.';dbname='.__DB__.';charset=utf8', __ID__, __PWD__);                                
            } catch (PDOException $r){
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function getConn(){
            return $this->con;
        }

        
    }

?>