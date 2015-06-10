<?php

namespace GlavBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GlavBundle\Entity\Automotor;
use GlavBundle\Entity\Servicio;
use GlavBundle\Entity\Empleado;
use GlavBundle\Form\InformeEmpleadoType;

/**
 * Automotor controller.
 *
 */
class InformeController extends Controller
{

    /**
     * Lists all Automotor entities.
     *
     */
    public function indexAction()
    {
       
    }
    
    public function empleadoAction()
    {
    $data = array();
    $form = $this->createFormBuilder($data)
            ->add('fecha_inicial', 'date')
            ->add('fecha_final', 'date')
    ->getForm();
        
        return $this->render('GlavBundle:Informe:empleado.html.twig', array(
            'form'   => $form->createView(),
        ));
       
    }
    public function informeEmpleadoAction(Request $datos)
    {
        //print_r($datos);exit();
        $fechaInicial =  $datos->get('fecha_inicial');
        $fechaFinal =   $datos->get('fecha_final');

        //exit(\Doctrine\Common\Util\Debug::dump($datos));
        //$form->bind($datos);
        //$datos->get('fecha_inicial')->getData();exit();
        //$form->handleRequest($datos)
        //$fecha->setfechaInicial($form['fecha_inicial']->getData());
        //$estado = "Finalizado";
        
        $sql="select concat(e.nombre, ' ',e.apellido ) as empleado,a.matricula ,r.valor,sum(p.valor) as prestamo
        from Servicio s 
        inner join Automotor a on a.id= s.id_automotor 
        inner join Empleado e on e.id = s.id_empleado
        join Rubro r on r.id= s.id_rubro
        inner join Prestamo p on p.id_empleado = e.id
        where s.estado_servicio = 'Finalizado' and s.pago = 'Pendiente' and
        s.fecha_servicio between '".$fechaInicial."' and '".$fechaFinal."'
        group by s.id
        order by e.nombre";

        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $con->execute();
        $entities = $con->fetchAll(); 
        //echo $sql;exit();

        //exit(\Doctrine\Common\Util\Debug::dump($entities));
        return $this->render('GlavBundle:Informe:index.html.twig', array(
            'entities'   => $entities,
        ));
    }
}
