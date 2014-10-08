<?php

namespace Wdr\LookfrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WdrLookfrontBundle:Default:index.html.twig');
    }
}
