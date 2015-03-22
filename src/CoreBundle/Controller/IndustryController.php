<?php

namespace CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CoreBundle\Entity\Industry;
use CoreBundle\Form\IndustryType;

/**
 * Industry controller.
 *
 */
class IndustryController extends Controller
{

    /**
     * Lists all Industry entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoreBundle:Industry')->findAll();

        return $this->render('CoreBundle:Industry:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Industry entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Industry();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('industry_show', array('id' => $entity->getId())));
        }

        return $this->render('CoreBundle:Industry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Industry entity.
     *
     * @param Industry $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Industry $entity)
    {
        $form = $this->createForm(new IndustryType(), $entity, array(
            'action' => $this->generateUrl('industry_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Industry entity.
     *
     */
    public function newAction()
    {
        $entity = new Industry();
        $form   = $this->createCreateForm($entity);

        return $this->render('CoreBundle:Industry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Industry entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Industry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Industry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CoreBundle:Industry:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Industry entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Industry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Industry entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CoreBundle:Industry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Industry entity.
    *
    * @param Industry $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Industry $entity)
    {
        $form = $this->createForm(new IndustryType(), $entity, array(
            'action' => $this->generateUrl('industry_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Industry entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Industry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Industry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('industry_edit', array('id' => $id)));
        }

        return $this->render('CoreBundle:Industry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Industry entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CoreBundle:Industry')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Industry entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('industry'));
    }

    /**
     * Creates a form to delete a Industry entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('industry_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
