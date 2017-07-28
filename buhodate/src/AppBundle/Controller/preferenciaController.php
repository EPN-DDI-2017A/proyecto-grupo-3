<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class preferenciaController extends Controller
{
    /**
     * @Route("/crearp")
     */
    public function crearAction()
    {
        return $this->render('AppBundle:preferencia:crear.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/modificarp")
     */
    public function modificarpAction()
    {
        return $this->render('AppBundle:preferencia:modificarp.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/eliminarp")
     */
    public function eliminarAction()
    {
        return $this->render('AppBundle:preferencia:eliminar.html.twig', array(
            // ...
        ));
    }

}
