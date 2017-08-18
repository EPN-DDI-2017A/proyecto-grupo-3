<?php

namespace AppBundle\Controller;

use AppBundle\Entity\galeria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\galeriaType;
use Symfony\Component\HttpFoundation\File\File;
/**
 * Galerium controller.
 *
 * @Route("galeria")
 */
class galeriaController extends Controller
{
    /**
     * Lists all galerias entities.
     *
     * @Route("/", name="galeria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $galerias = $em->getRepository('AppBundle:galeria')->findAll();
        dump($galerias);
        return $this->render('galeria/index.html.twig', array(
            'galerias' => $galerias,
        ));
    }

    /**
     * Creates a new galeria entity.
     *
     * @Route("/new", name="galeria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $galeria = new galeria();

        $uss = $this->getUser();

        $form = $this->createForm(galeriaType::class, $galeria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var ..\web\galeria $file */
            $file = $galeria->getFoto();

            // Generando un nombre unico para el archivo despues de guardarlo
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('imagen_directory'),
                $fileName
            );
            $path = '/galeria'.'/'.$fileName;
            $galeria->setFoto($path);

            $galeria->setEstado('activo');
            $galeria->setTipo('Perfil');
            $galeria->setUsuarios($uss);

            $em = $this->getDoctrine()->getManager();
            $em->persist($galeria);
            $em->flush();

            return $this->redirectToRoute('usuario_index');
        }

        return $this->render('galeria/new.html.twig', array(
            'galeria' => $galeria,
            'form' => $form->createView(),
            'user' => $uss,
        ));
    }

    /**
     * Finds and displays a galeria entity.
     *
     * @Route("/{id}", name="galeria_show")
     * @Method("GET")
     */
    public function showAction(galeria $galeria)
    {
        $deleteForm = $this->createDeleteForm($galeria);

        return $this->render('galeria/show.html.twig', array(
            'galeria' => $galeria,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing galeria entity.
     *
     * @Route("/{id}/edit", name="galeria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, galeria $galeria)
    {
        $deleteForm = $this->createDeleteForm($galeria);
        $editForm = $this->createForm('AppBundle\Form\galeriaType', $galeria);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $galeria->setFoto(
                new File($this->getParameter('imagen_directory').'/'.$galeria->getFoto())
            );

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('galeria_edit', array('id' => $galeria->getId()));
        }

        return $this->render('galeria/edit.html.twig', array(
            'galeria' => $galeria,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a galeria entity.
     *
     * @Route("/{id}", name="galeria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, galeria $galeria)
    {
        $form = $this->createDeleteForm($galeria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($galeria);
            $em->flush();
        }

        return $this->redirectToRoute('galeria_index');
    }

    /**
     * Creates a form to delete a galeriua entity.
     *
     * @param galeria $galeria The galerium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(galeria $galeria)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('galeria_delete', array('id' => $galeria->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
