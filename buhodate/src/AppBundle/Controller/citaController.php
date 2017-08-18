<?php

namespace AppBundle\Controller;

use AppBundle\Entity\cita;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

/**
 * Citum controller.
 *
 * @Route("cita")
 */
class citaController extends Controller
{
    /**
     * Lists all citum entities.
     *
     * @Route("/", name="cita_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usser = $this->getUser();
        $usuarios = $em->getRepository('AppBundle:User')->findAll();

        $citas = $em->getRepository('AppBundle:cita')->findAll();
        $galerias = $em->getRepository('AppBundle:galeria')->findBy(
            array(
                'tipo' => 'Perfil',
            )
        );
        dump($citas);
        return $this->render('cita/index.html.twig', array(
            'citas' => $citas,
            'galerias' => $galerias,
            'user' => $usser,
            'usuarios'=>$usuarios,
        ));
    }

    /**
     * Lists all citum entities.
     *
     * @Route("/notificaciones", name="cita_not")
     * @Method("GET")
     */
    public function  notificacionesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usser = $this->getUser();
        $usuarios = $em->getRepository('AppBundle:User')->findAll();

        $citas = $em->getRepository('AppBundle:cita')->findAll();
        $galerias = $em->getRepository('AppBundle:galeria')->findBy(
            array(
                'tipo' => 'Perfil',
            )
        );
        dump($citas);
        dump($usuarios);
        return $this->render('cita/notificaciones.html.twig', array(
            'citas' => $citas,
            'galerias' => $galerias,
            'user' => $usser,
            'usuarios'=>$usuarios,
        ));
    }

    /**
     * Displays a form to edit an existing citum entity.
     *
     * @Route("/{id_cita}/mod", name="cita_mod")
     * @Method({"GET", "POST"})
     */
    public function modificarAction(Request $request, cita $cita, $evento)
    {

        if ($evento == "1") {
            $cita->setEstado('aceptado');
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cita_not');
        }else if ($evento == "2") {
            $cita->setEstado('rechazado');
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cita_not');
        }

        return $this->render('cita/index.html.twig', array(
            'cita' => $cita,
        ));
    }

    /**
     * Creates a new cita entity.
     *
     * @Route("/{id}/new", name="cita_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, User $user)
    {
        $usuario = $this->getUser();

        $cita = new cita();
        $form = $this->createForm('AppBundle\Form\citaType', $cita);
        $form->handleRequest($request);

        dump($user);

        if ($form->isSubmitted() && $form->isValid()) {

            $cita->setEstado('pendiente');
            $cita->setUsuarios($usuario);
            $cita->setIdReceptor($user->getId());

            $em = $this->getDoctrine()->getManager();
            $em->persist($cita);
            $em->flush();

            return $this->redirectToRoute('cita_index');
        }

        return $this->render('cita/new.html.twig', array(
            'cita' => $cita,
            'form' => $form->createView(),
            'usuario' => $usuario,
            'receptor' => $user
        ));
    }

    /**
     * Finds and displays a citum entity.
     *
     * @Route("/{id}", name="cita_show")
     * @Method("GET")
     */
    public function showAction(cita $cita)
    {
        $deleteForm = $this->createDeleteForm($cita);

        return $this->render('cita/show.html.twig', array(
            'cita' => $cita,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing citum entity.
     *
     * @Route("/{id}/edit", name="cita_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, cita $cita)
    {
        $deleteForm = $this->createDeleteForm($cita);
        $editForm = $this->createForm('AppBundle\Form\citaType', $cita);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cita_edit', array('id' => $cita->getId()));
        }

        return $this->render('cita/edit.html.twig', array(
            'cita' => $cita,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a citum entity.
     *
     * @Route("/{id}", name="cita_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, cita $cita)
    {
        $form = $this->createDeleteForm($cita);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cita);
            $em->flush();
        }

        return $this->redirectToRoute('cita_index');
    }

    /**
     * Creates a form to delete a citum entity.
     *
     * @param cita $citas The citas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(cita $citas)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cita_delete', array('id' => $citas->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
