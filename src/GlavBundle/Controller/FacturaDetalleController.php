<?php

namespace GlavBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GlavBundle\Entity\FacturaDetalle;
use GlavBundle\Form\FacturaDetalleType;

/**
 * FacturaDetalle controller.
 *
 */
class FacturaDetalleController extends Controller
{

    /**
     * Lists all FacturaDetalle entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GlavBundle:FacturaDetalle')->findAll();

        return $this->render('GlavBundle:FacturaDetalle:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FacturaDetalle entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FacturaDetalle();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('facturadetalle_show', array('id' => $entity->getId())));
        }

        return $this->render('GlavBundle:FacturaDetalle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FacturaDetalle entity.
     *
     * @param FacturaDetalle $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FacturaDetalle $entity)
    {
        $form = $this->createForm(new FacturaDetalleType(), $entity, array(
            'action' => $this->generateUrl('facturadetalle_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FacturaDetalle entity.
     *
     */
    public function newAction()
    {
        $entity = new FacturaDetalle();
        $form   = $this->createCreateForm($entity);

        return $this->render('GlavBundle:FacturaDetalle:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FacturaDetalle entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GlavBundle:FacturaDetalle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FacturaDetalle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GlavBundle:FacturaDetalle:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FacturaDetalle entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GlavBundle:FacturaDetalle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FacturaDetalle entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GlavBundle:FacturaDetalle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FacturaDetalle entity.
    *
    * @param FacturaDetalle $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FacturaDetalle $entity)
    {
        $form = $this->createForm(new FacturaDetalleType(), $entity, array(
            'action' => $this->generateUrl('facturadetalle_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FacturaDetalle entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GlavBundle:FacturaDetalle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FacturaDetalle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('facturadetalle_edit', array('id' => $id)));
        }

        return $this->render('GlavBundle:FacturaDetalle:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FacturaDetalle entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GlavBundle:FacturaDetalle')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FacturaDetalle entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('facturadetalle'));
    }

    /**
     * Creates a form to delete a FacturaDetalle entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facturadetalle_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
