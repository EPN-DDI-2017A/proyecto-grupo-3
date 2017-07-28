<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class citaController extends Controller
{
    /**
     * @Route("/crearc")
     */
    public function crearAction()
    {
        return $this->render('AppBundle:cita:crear.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/modificarc")
     */
    public function modificarAction()
    {
        return $this->render('AppBundle:cita:modificar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cancelarc")
     */
    public function cancelarAction()
    {
        return $this->render('AppBundle:cita:cancelar.html.twig', array(
            // ...
        ));
    }

}
