<?
    /**
     * Foo
     */
    class Foo {        

        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
    
?>