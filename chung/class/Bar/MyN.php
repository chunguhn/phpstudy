<?php    
    class MyN
    {        
        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return 'Bar`s MyN' . $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
    
?>