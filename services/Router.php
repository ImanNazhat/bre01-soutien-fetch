<?php

class Router 
{
    public function handleRequest(array $get) : void
    {
        $ShopController = new ShopController();
        $DefaultController = new DefaultController();
        
        if(isset($get["route"]))
        {
            if($get["route"] === "boutique")
            {
               
                $ShopController->shop();
            }
            
            else if($get["route"] === "ajouter-au-panier")
            {
               
                $ShopController->addToCart();
            }
            
            else if($get["route"] === "panier")
            {
                
                $ShopController->cart();
            }
            
            else
            {
               
                $DefaultController->notFound();
            }
        }
        
        else
        {
            
            $DefaultController->home();
        }
    }
}