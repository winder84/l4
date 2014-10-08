<?php

namespace Wdr\LookadminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WdrLookadminBundle:Default:index.html.twig');
    }
}
