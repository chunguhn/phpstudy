<?php
    namespace Foo;
    
    class My
    {        
        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return 'Foo`s my ' . $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
    
?>