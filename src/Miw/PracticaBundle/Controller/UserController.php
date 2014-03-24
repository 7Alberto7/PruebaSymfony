<?php

namespace Miw\PracticaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Miw\PracticaBundle\Entity\User;
use Miw\PracticaBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MiwPracticaBundle:User')->findAll();

        return $this->render('MiwPracticaBundle:User:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $encoder = $this->get('security.encoder_factory')->getEncoder($entity);
            $admin = $request->get('admin');

            if ($admin) {
                $entity->addRole("ROLE_ADMIN");
            }

            $entity->setEnabled(true);
            $entity->setPassword($encoder->encodePassword($entity->getPassword(), $entity->getSalt()));
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_show', array('id' => $entity->getId())));
        }

        return $this->render('MiwPracticaBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(User $entity)
    {        
        $form = $this->createFormBuilder($entity)
                ->setAction($this->generateUrl('admin_create'))
                ->setMethod('POST')
                ->add('username')
                ->add('email')
                ->add('password', 'password')
                ->add('submit', 'submit', array('label' => 'Crear'))
                ->getForm();

        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('MiwPracticaBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        return $this->render('MiwPracticaBundle:User:show.html.twig', array(
            'entity'      => $entity,        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('MiwPracticaBundle:User:edit.html.twig', array(
            'entity'    => $entity,
            'form'      => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {        
        $form = $this->createFormBuilder($entity)
                ->setAction($this->generateUrl('admin_update', array('id' => $entity->getId())))
                ->setMethod('POST')
                ->add('username')
                ->add('email')
                ->add('password', 'password')
                ->add('submit', 'submit', array('label' => 'Editar'))
                ->getForm();

        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $encoder = $this->get('security.encoder_factory')->getEncoder($entity);
            $admin = $request->get('admin');

            if ($admin) {
                $entity->addRole("ROLE_ADMIN");
            }

            $entity->setEnabled(true);
            $entity->setPassword($encoder->encodePassword($entity->getPassword(), $entity->getSalt()));
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin'));
        }

        return $this->render('MiwPracticaBundle:User:edit.html.twig', array(
            'entity'     => $entity,
            'form'       => $editForm->createView(),
        ));
    }
    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    public function eraseAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        return $this->render('MiwPracticaBundle:User:erase.html.twig', array(
            'entity'    => $entity,
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MiwPracticaBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('admin'));
    }
}