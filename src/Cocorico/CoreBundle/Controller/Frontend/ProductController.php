<?php

namespace Cocorico\CoreBundle\Controller\Frontend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Cocorico\CoreBundle\Entity\Product;

class ProductController extends Controller {

    /**
     * @Route("/explore/product")
     */
    public function showProduct(){

        $products = $this->getDoctrine()
            -> getRepository(Product::class)
            -> getAllProducts();  
        // echo count($products);  
        return $this->render('CocoricoCoreBundle:Frontend/Product:show_product.html.twig'
                , array('products'=>$products));
    }
}