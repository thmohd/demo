<?php

namespace CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CoreBundle\Entity\Occupation;
use CoreBundle\Form\OccupationType;

/**
 * Occupation controller.
 *
 */
class OccupationController extends Controller
{

    /**
     * Lists all Occupation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoreBundle:Occupation')->findAll();

        return $this->render('CoreBundle:Occupation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Occupation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Occupation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('occupation_show', array('id' => $entity->getId())));
        }

        return $this->render('CoreBundle:Occupation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Occupation entity.
     *
     * @param Occupation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Occupation $entity)
    {
        $form = $this->createForm(new OccupationType(), $entity, array(
            'action' => $this->generateUrl('occupation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Occupation entity.
     *
     */
    public function newAction()
    {
        $entity = new Occupation();
        $form   = $this->createCreateForm($entity);

        return $this->render('CoreBundle:Occupation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Occupation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Occupation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Occupation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CoreBundle:Occupation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Occupation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Occupation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Occupation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CoreBundle:Occupation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Occupation entity.
    *
    * @param Occupation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Occupation $entity)
    {
        $form = $this->createForm(new OccupationType(), $entity, array(
            'action' => $this->generateUrl('occupation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Occupation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Occupation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Occupation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('occupation_edit', array('id' => $id)));
        }

        return $this->render('CoreBundle:Occupation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Occupation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CoreBundle:Occupation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Occupation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('occupation'));
    }

    /**
     * Creates a form to delete a Occupation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('occupation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
