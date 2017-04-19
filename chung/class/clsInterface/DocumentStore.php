<?php
    class DocumentStore
    {
        protected $data = [];

        public function addCoument(Documentable $document){
            $key = $document->getId();
            $value = $document->getContent();
            $this->data[$key] = $value;
        }

        public function getDocument(){
            return $this->data;
        }
    }
?>