<?php

namespace BYS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($name)
    {
        return $this->render('BYSCoreBundle:Default:index.html.twig', array(
            'myName' => $name
        ));
    }
}
