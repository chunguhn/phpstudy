<?php
    class Menu
    {
        protected $dish_id;
        protected $dish_name;
        protected $price;
        protected $is_spicy;

        public function getId()
        {
            return $this->dish_id;
        }

        public function setId($dish_id)
        {
            $this->dish_id = $dish_id;
        }

        public function getName()
        {
            return $this->dish_name;
        }

        public function setName($dish_namename)
        {
            $this->dish_name = $dish_name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function getIs_spicy()
        {
            return $this->is_spicy;
        }

        public function setIs_spicy($is_spicy)
        {
            $this->is_spicy = $is_spicy;
        }

    }
?>