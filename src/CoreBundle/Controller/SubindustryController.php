<?php

namespace CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CoreBundle\Entity\Subindustry;
use CoreBundle\Form\SubindustryType;

/**
 * Subindustry controller.
 *
 */
class SubindustryController extends Controller
{

    /**
     * Lists all Subindustry entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoreBundle:Subindustry')->findAll();

        return $this->render('CoreBundle:Subindustry:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Subindustry entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Subindustry();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subindustry_show', array('id' => $entity->getId())));
        }

        return $this->render('CoreBundle:Subindustry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Subindustry entity.
     *
     * @param Subindustry $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Subindustry $entity)
    {
        $form = $this->createForm(new SubindustryType(), $entity, array(
            'action' => $this->generateUrl('subindustry_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Subindustry entity.
     *
     */
    public function newAction()
    {
        $entity = new Subindustry();
        $form   = $this->createCreateForm($entity);

        return $this->render('CoreBundle:Subindustry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Subindustry entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Subindustry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subindustry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CoreBundle:Subindustry:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Subindustry entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Subindustry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subindustry entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CoreBundle:Subindustry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Subindustry entity.
    *
    * @param Subindustry $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Subindustry $entity)
    {
        $form = $this->createForm(new SubindustryType(), $entity, array(
            'action' => $this->generateUrl('subindustry_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Subindustry entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Subindustry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subindustry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('subindustry_edit', array('id' => $id)));
        }

        return $this->render('CoreBundle:Subindustry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Subindustry entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CoreBundle:Subindustry')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subindustry entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subindustry'));
    }

    /**
     * Creates a form to delete a Subindustry entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subindustry_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
