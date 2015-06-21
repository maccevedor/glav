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
    
    public function informeSemanalAction()
    {
        
//         $sql="SELECT concat(e.nombre,' ',e.apellido) as empleado ,s.fecha_servicio as fecha ,s.pago,(r.valor * 0.4) as valor
//                 FROM Servicio s
//                 inner join Empleado e on e.id = s.id_empleado
//                 inner join Rubro r on r.id = s.id_rubro
//                 WHERE s.fecha_servicio >= curdate() - INTERVAL DAYOFWEEK(curdate())+7 DAY AND s.fecha_servicio < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY 
//                 and s.estado_servicio = 'Finalizado'";
        
        $sql="SELECT concat(e.nombre,' ',e.apellido) as empleado ,s.fecha_servicio as fecha ,s.pago,(r.valor * 0.4) as valor,s.pago
                FROM Servicio s
                inner join Empleado e on e.id = s.id_empleado
                 inner join Rubro r on r.id = s.id_rubro
where s.fecha_servicio between date_sub(now(),INTERVAL 1 WEEK) and now()
and s.estado_servicio = 'Finalizado'";
            
        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $con->execute();
        $entities = $con->fetchAll(); 
        //echo $sql;exit();

        //exit(\Doctrine\Common\Util\Debug::dump($entities));
        return $this->render('GlavBundle:Informe:semanal.html.twig', array(
            'entities'   => $entities,
        ));    
        
        
    }
    
    public function pagarAction(){
        
        $prestamos = "update Prestamo set estado = 2 where estado= 1";
        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($prestamos);
        $con->execute();
        
        $servicios = "update Servicio s set s.pago='Pagado' where s.fecha_servicio                between date_sub(now(),INTERVAL 1 WEEK) and now()
            and s.estado_servicio = 'Finalizado'  ";
        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($servicios);
        $con->execute();
        
               $sql="SELECT concat(e.nombre,' ',e.apellido) as empleado ,s.fecha_servicio as fecha ,s.pago,(r.valor * 0.4) as valor,s.pago
                FROM Servicio s
                inner join Empleado e on e.id = s.id_empleado
                 inner join Rubro r on r.id = s.id_rubro
where s.fecha_servicio between date_sub(now(),INTERVAL 1 WEEK) and now()
and s.estado_servicio = 'Finalizado'";
            
        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $con->execute();
        $entities = $con->fetchAll(); 
        //echo $sql;exit();

        //exit(\Doctrine\Common\Util\Debug::dump($entities));
        return $this->render('GlavBundle:Informe:semanal.html.twig', array(
            'entities'   => $entities,
        ));    
        
        
    }
    
    public function excelAction(){
        
        // ask the service for a Excel5
       $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
       
       //$em = $this->getDoctrine()->getManager();
       $aspirantes = $this->getDoctrine()->getRepository('GlavBundle:Empleado')->findAll(array(),array('nombre' => 'DESC'));
       

       $phpExcelObject->getProperties()->setCreator("Sergio")
           ->setLastModifiedBy("Giulio De Donato")
           ->setTitle("Office 2005 XLSX Test Document")
           ->setSubject("Office 2005 XLSX Test Document")
           ->setDescription("Test document for Office 2005 XLSX, generated using PHP classes.")
           ->setKeywords("office 2005 openxml php")
           ->setCategory("Test result file");
       
       $phpExcelObject->setActiveSheetIndex(0)
           ->setCellValue('A1', 'nombre')
           ->setCellValue('B1', 'apellido');
       $phpExcelObject->getActiveSheet()->setTitle('Simple');
       
   $i = 2;  
   foreach ($aspirantes as $aspirante) 
   {
        $phpExcelObject->setActiveSheetIndex(0)
           ->setCellValue('A'.$i, $aspirante->getNombre())
           ->setCellValue('B'.$i, $aspirante->getApellido());
       $phpExcelObject->getActiveSheet()->setTitle('Simple');
       $i++;
   }  
       // Set active sheet index to the first sheet, so Excel opens this as the first sheet
       $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=stream-file.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');

        return $response; 
    }
}
