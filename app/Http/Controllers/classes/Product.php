<?php

    namespace App\Http\Controllers\classes; 
    class Product extends Product_Category {

        protected $name_product;
        protected $img_file;
        protected $price;
        protected $description;

        function __construct($name_category,$name_product,$img_file,$price,$description)
        {
            parent::__construct($name_category);
            $this->name_product = $name_product;
            $this->img_file = $img_file;
            $this->price = $price;
            $this->description = $description;
        }

        public function getNameProduct() {
            echo $this->name_product;
        }

        public function getImgProd() {
            echo $this->img_file;
        }

        public function setPrice($price) {
            return $this->price = $price;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getDescription() {
            return $this->description;
        }
    }
?>