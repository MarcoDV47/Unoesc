<?php

    class Item{

        private Product $product;
        private int $quantity;

        public function __construct(Product $product, int $quantity) {

            $this->setProduct($product);
            $this->setQuantity($quantity);
        }

        //Getters
        public function getProduct(): Product
        {
            return $this->product;
        }

        public function getQuantity(): int
        {
            return $this->quantity;
        }

        //Setters
        public function setProduct(Product $product): void
        {
            $this->product = $product;
        } 

        public function setQuantity(int $quantity): void
        {
            $this->quantity = $quantity;
        }
    }

?>