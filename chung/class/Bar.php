<?php    
    include 'Foo.php';
    
    class Bar extends Foo
    {        
        function __construct()
        {
            parent::__construct();
        }

        public function getName(){
            return 'child`s ' . parent::getName();
        }
    }
    
?>