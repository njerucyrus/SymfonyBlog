<?php
/**
 * Created by PhpStorm.
 * User: hudutech
 * Date: 3/24/17
 * Time: 2:06 AM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class BlogController
{


    /**
     * @Route("/index/")
     */
    public function indexAction(){
     return new Response("my welcome page");
    }
}