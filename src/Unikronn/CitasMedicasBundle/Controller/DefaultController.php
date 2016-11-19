<?php

namespace Unikronn\CitasMedicasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UnikronnCitasMedicasBundle:Default:index.html.twig');
    }
}
