<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\cita;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\galeria;
use AppBundle\Form\galeriaUsuarioType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * User controller.
 *
 * @Route("usuario")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="usuario_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $usuario = $this->getUser();

        $users = $em->getRepository('AppBundle:User')->findAll();
        $galerias = $em->getRepository('AppBundle:galeria')->findBy(
            array(
                'tipo' => 'Perfil',
            )
        );
        dump($usuario);

        return $this->render('user/index.html.twig', array(
            'users' => $users,
            'galerias' => $galerias,
            'usuario' =>$usuario,
        ));
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="usuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('usuario_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="usuario_show")
     * @Method("GET")
     */
    public function showAction(User $user, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $fotos = $em->getRepository('AppBundle:galeria')->findOneBy(
            array(
                'usuarios' => $user->getId(),
                'tipo' => 'Perfil',
            )
        );

        /*if($fotos == null){
            $galeria = new galeria();

            $galeria->setEstado('activo');
            $galeria->setUsuarios($user);
            $galeria->setTipo('Perfil');
        }*/

        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
            'foto' => $fotos,
        ));


        /*$repositorio = $this->getDoctrine()->getRepository('AppBundle:galeria');
      $query = $repositorio->createQueryBuilder('galeria')
          ->where('galeria.usuario_id')*/
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/uss/{id}", name="usuario_perfil")
     * @Method("GET")
     */
    public function usuarioPerfilAction(User $user)
    {

        $em = $this->getDoctrine()->getManager();
        $fotos = $em->getRepository('AppBundle:galeria')->findOneBy(
            array(
                'usuarios' => $user->getId(),
                'tipo' => 'Perfil',
            )
        );

        dump($user);

        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/usuarioPerfil.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
            'foto' => $fotos,
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="usuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        dump($user);
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $fotos = $em->getRepository('AppBundle:galeria')->findOneBy(
            array(
                'usuarios' => $user->getId(),
                'tipo' => 'Perfil',
            )
        );

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuario_show', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'fotos' => $fotos,
        ));
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="usuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('usuario_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
