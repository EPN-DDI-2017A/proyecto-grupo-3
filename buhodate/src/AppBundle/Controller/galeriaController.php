<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class galeriaController extends Controller
{
    /**
     * @Route("/crearg")
     */
    public function crearAction()
    {
        return $this->render('AppBundle:galeria:crear.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/modificarg")
     */
    public function modificarAction()
    {
        return $this->render('AppBundle:galeria:modificar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/eliminaerg")
     */
    public function eliminarAction()
    {
        return $this->render('AppBundle:galeria:eliminar.html.twig', array(
            // ...
        ));
    }

}
