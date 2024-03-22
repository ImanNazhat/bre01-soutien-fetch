<?php

require_once "AbstractController.php";

class ShopController extends AbstractController{
    
        
        public function shop() : void{
            
            $this->render("shop/shop.html.twig", [
    "title" => "Boutique"
]);
        }
        
        public function addToCart() : void{
            
            echo "ShopController->addToCart<br>";
        }
        
        public function cart() : void{
            
            $this->render("shop/cart.html.twig", [
            "title" => "Panier"
        ]);
        }

}