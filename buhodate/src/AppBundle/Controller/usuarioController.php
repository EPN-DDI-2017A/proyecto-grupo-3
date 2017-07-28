<?php

namespace AppBundle\Controller;

use AppBundle\Form\usuarioType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\usuario;

class usuarioController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:usuario:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/registro")
     */
    public function registroAction()
    {
        $usuario = new usuario();
        $form = $this->createForm(usuarioType::class, $usuario);
        return $this->render('AppBundle:usuario:registro.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('AppBundle:usuario:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/modificar")
     */
    public function modificarAction()
    {
        return $this->render('AppBundle:usuario:modificar.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/modpass")
     */
    public function modpassAction()
    {
        return $this->render('AppBundle:usuario:modpass.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/eliminar")
     */
    public function eliminarAction()
    {
        return $this->render('AppBundle:usuario:eliminar.html.twig', array(
            // ...
        ));
    }

}
