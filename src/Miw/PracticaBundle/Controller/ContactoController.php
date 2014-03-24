<?php

namespace Miw\PracticaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Miw\PracticaBundle\Entity\Contacto;
use Miw\PracticaBundle\Form\ContactoType;

/**
 * Contacto controller.
 *
 */
class ContactoController extends Controller
{

    /**
     * Lists all Contacto entities.
     *
     */
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MiwPracticaBundle:Contacto')->findBy(array('usuarioFk' => $user));

        return $this->render('MiwPracticaBundle:Contacto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Contacto entity.
     *
     */
    public function createAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $entity = new Contacto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUsuarioFk($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contacto_show', array('id' => $entity->getId())));
        }

        return $this->render('MiwPracticaBundle:Contacto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Contacto entity.
    *
    * @param Contacto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Contacto $entity)
    {        
        $form = $this->createFormBuilder($entity)
                ->setAction($this->generateUrl('contacto_create'))
                ->setMethod('POST')
                ->add('nombre')
                ->add('apellidos')
                ->add('tlfFijo')
                ->add('tlfMovil')
                ->add('email')
                ->add('nacimiento')
                ->add('submit', 'submit', array('label' => 'Crear'))
                ->getForm();

        return $form;
    }

    /**
     * Displays a form to create a new Contacto entity.
     *
     */
    public function newAction()
    {
        $entity = new Contacto();
        $form   = $this->createCreateForm($entity);

        return $this->render('MiwPracticaBundle:Contacto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contacto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacto entity.');
        }

        return $this->render('MiwPracticaBundle:Contacto:show.html.twig', array(
            'entity'      => $entity,        ));
    }

    /**
     * Displays a form to edit an existing Contacto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacto entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('MiwPracticaBundle:Contacto:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Contacto entity.
    *
    * @param Contacto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contacto $entity)
    {        
        $form = $this->createFormBuilder($entity)
                ->setAction($this->generateUrl('contacto_update', array('id' => $entity->getId())))
                ->setMethod('POST')
                ->add('nombre')
                ->add('apellidos')
                ->add('tlfFijo')
                ->add('tlfMovil')
                ->add('email')
                ->add('nacimiento')
                ->add('submit', 'submit', array('label' => 'Editar'))
                ->getForm();

        return $form;
    }
    /**
     * Edits an existing Contacto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('contacto'));
        }

        return $this->render('MiwPracticaBundle:Contacto:edit.html.twig', array(
            'entity'      => $entity,
            'form'        => $editForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a Contacto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    public function eraseAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MiwPracticaBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacto entity.');
        }

        return $this->render('MiwPracticaBundle:Contacto:erase.html.twig', array(
            'entity'    => $entity,
        ));
    }
    /**
     * Deletes a Contacto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MiwPracticaBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('contacto'));
    }
    
    public function eraseMultipleAction(Request $request)
    {
        $seleccionados = $request->get('seleccion');
             
        if (count($seleccionados) == 0) {
             return $this->redirect($this->generateUrl('contacto'));
        }
        
        $em = $this->getDoctrine()->getManager();
        foreach ($seleccionados as $id) {
            $entities[] = $em->getRepository('MiwPracticaBundle:Contacto')->find($id);
        }

        
        return $this->render('MiwPracticaBundle:Contacto:erasemultiple.html.twig', array(
            'entities'  => $entities,
        ));
    }
    
    public function deleteMultipleAction(Request $request)
    {
        $seleccionados = $request->get('seleccion');

        if (count($seleccionados)==0) {
            return $this->redirect($this->generateUrl('contacto'));
        }

        $em = $this->getDoctrine()->getManager();
        foreach ($seleccionados as $id) {
            $entity = $em->getRepository('MiwPracticaBundle:Contacto')->find($id);
            $em->remove($entity);
        }
        $em->flush();
        
        return $this->redirect($this->generateUrl('contacto'));
    }
}
