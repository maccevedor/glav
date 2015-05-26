<?php

namespace GlavBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GlavBundle\Entity\Factura;
use GlavBundle\Entity\Servicio;
use GlavBundle\Entity\FacturaDetalle;
use GlavBundle\Form\FacturaType;
use GlavBundle\Form\FacturaDetalleType;


/**
 * Factura controller.
 *
 */
class FacturaController extends Controller
{

    /**
     * Lists all Factura entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GlavBundle:Factura')->findAll();

        return $this->render('GlavBundle:Factura:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Factura entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Factura();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('factura_show', array('id' => $entity->getId())));
        }

        return $this->render('GlavBundle:Factura:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Factura entity.
     *
     * @param Factura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Factura $entity)
    {
        $form = $this->createForm(new FacturaType(), $entity, array(
            'action' => $this->generateUrl('factura_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Factura entity.
     *
     */
    public function newAction()
    {
        $entity = new Factura;
        $facturaDetalle = new FacturaDetalle;
        //$form   = $this->createCreateForm($entity);
        $form = $this->createForm(new FacturaType() ,$entity);
        $formF  = $this->createForm(new FacturaDetalleType() ,$facturaDetalle);

        return $this->render('GlavBundle:Factura:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'formF' => $formF->createView(),
        ));
    }

    /**
     * Finds and displays a Factura entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GlavBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GlavBundle:Factura:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Factura entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GlavBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GlavBundle:Factura:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Factura entity.
    *
    * @param Factura $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Factura $entity)
    {
        $form = $this->createForm(new FacturaType(), $entity, array(
            'action' => $this->generateUrl('factura_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Factura entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GlavBundle:Factura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Factura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('factura_edit', array('id' => $id)));
        }

        return $this->render('GlavBundle:Factura:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Factura entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GlavBundle:Factura')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Factura entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('factura'));
    }

    /**
     * Creates a form to delete a Factura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('factura_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function valorServicioAction(Request $datos)
    {
        $em = $this->getDoctrine()->getManager();
        $idServicio = $datos->get('servicioId');
        $servicio = $em->getRepository('GlavBundle:Servicio')->find($idServicio);
        $valor = $servicio->getIdRubro()->getValor();
        echo $valor;exit();
        

        $entities = $em->getRepository('GlavBundle:Factura')->findAll();

        return $this->render('GlavBundle:Factura:index.html.twig', array(
            'entities' => $entities,
        ));
    }
}