<?php
    namespace Bar;

    class My
    {        
        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return 'Bar`s My ' . $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
    
?>