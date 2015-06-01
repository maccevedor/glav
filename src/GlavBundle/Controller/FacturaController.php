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
        
        $sql = "select f.id,f.observacion,f.total,fu.username ,concat(c.nombre,' ',c.apellido) as cliente,f.fecha from Factura f inner join fos_user fu on fu.id = f.id_usuario inner join FacturaDetalle fd on fd.id_factura = f.id inner join Servicio s on s.id = fd.id_servicio inner join Cliente c on c.id = s.id_cliente";
        //echo $sql;exit();   
        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $con->execute();
        $entities = $con->fetchAll(); 
        //print_r($miData);exit();

        //$entities = $em->getRepository('GlavBundle:Factura')->findAll();                    


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
    
    //anderipe
    
    public function valorServicioAction(Request $datos)
    {
        $em = $this->getDoctrine()->getManager();
        $idServicio = $datos->get('servicioId');
        $servicio = $em->getRepository('GlavBundle:Servicio')->find($idServicio);
        $valor = $servicio->getIdRubro()->getValor();
        $neto = $valor * 0.84;
        //echo $neto;exit();
        $valor= 'Neto<br><input type="text" id="neto" value="'.$neto.'"><br>Total<br><input type="text" id="total" value="'.$valor.'">';
        echo $valor;exit();
        

        $entities = $em->getRepository('GlavBundle:Factura')->findAll();

        return $this->render('GlavBundle:Factura:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    public function guardarFacturaAction(Request $datos)
    {
        if($datos->isMethod('POST')){
        
            $em = $this->getDoctrine()->getManager();
            $factura = new factura();
            $facturaDetalle = new facturaDetalle();
            $form = $this->createForm(new FacturaType(),$factura);
            $formF = $this->createForm(new FacturaDetalleType(),$facturaDetalle);
            $form->handleRequest($datos);
            $formF->handleRequest($datos);
            $idServicio = $formF->get('id_servicio')->getData()->getId();//exit();
            $servicio = $this->getDoctrine()->getRepository('GlavBundle:Servicio')->find($idServicio);
            $valor = $servicio->getIdRubro()->getValor();
            //Se guarda el objeto de Factura
            $idUsuario = $this->getUser()->getId();
            $factura->setIdUsuario($idUsuario);
            $factura->setValor($valor);
            $factura->setTotal($valor);
            $em->persist($factura);
            $em->flush();
            //Se guarda el objeto de FacturaDetalle
            //$idFactura = $factura->getId();
            $data = $form->getData();
        }
        //$f
        //actura = $this->getDoctrine()->getRepository('GlavBundle:Factura')->find($idFactura);
        $facturaDetalle->setIdFactura($data);
        $facturaDetalle->setValor($valor);
        $facturaDetalle->setTotal($valor);
        $em->persist($facturaDetalle);
        $em->flush();

        $entities = $em->getRepository('GlavBundle:Factura')->findAll();

        return $this->render('GlavBundle:Factura:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    public function buscarClienteAction(Request $datos){
        echo $datos->get('cliente');exit();
        $em = $this->getDoctrine()->getManager();
        
        $sql = "select f.id,f.observacion,f.total,fu.username ,concat(c.nombre,' ',c.apellido) as cliente,f.fecha from Factura f inner join fos_user fu on fu.id = f.id_usuario inner join FacturaDetalle fd on fd.id_factura = f.id inner join Servicio s on s.id = fd.id_servicio inner join Cliente c on c.id = s.id_cliente";
        //echo $sql;exit();   
        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $con->execute();
        $entities = $con->fetchAll(); 
        //print_r($miData);exit();

        //$entities = $em->getRepository('GlavBundle:Factura')->findAll();                    


        return $this->render('GlavBundle:Factura:index.html.twig', array(
            'entities' => $entities,
        ));
        
        
    }
}
