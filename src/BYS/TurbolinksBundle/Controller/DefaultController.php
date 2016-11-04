<?php

namespace BYS\TurbolinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BYSTurbolinksBundle:Default:index.html.twig');
    }
}
