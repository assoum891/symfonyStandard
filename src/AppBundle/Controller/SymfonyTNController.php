<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SymfonyTNController extends Controller
{
     /**
     * @Route("/app/symfonytn/home", name="symfonytn")
     */
    public function indexAction()
    {
        return $this->render('symfonytn/index.html.twig');
    }
}
