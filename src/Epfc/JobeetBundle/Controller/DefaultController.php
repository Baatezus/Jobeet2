<?php

namespace Epfc\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("faux")
     */
    public function indexAction()
    {
        return $this->render('JobeetBundle:Default:index.html.twig');
    }
}
