<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 05/09/2016
 * Time: 15:27
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

class articleController extends Controller
{


    /**
     * @Route("/createArticle", name="articleCreation")
     */
    public function createArticleAction()
    {
        return $this->render('createArticle.html.twig');

    }


}