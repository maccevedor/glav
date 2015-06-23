<?php

namespace GlavBundle\Controller;
use GlavBundle\Entity\Servicio;
use GlavBundle\Entity\Cliente;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GlavBundle:Default:index.html.twig', array('name' => $name));
    }
    public function homeAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $sqlServicio ="SELECT  SUBSTR(estado_servicio, 1, 1) as nombre , COUNT( estado_servicio) as servicios FROM Servicio s group by estado_servicio ";
        $con = $this->getDoctrine()->getManager()->getConnection()->prepare($sqlServicio);
        $con->execute();
        $entities = $con->fetchAll(); 
        
        
        $Clientedql = "SELECT COUNT(c.id) FROM GlavBundle\Entity\Cliente c 
        ";
        $cliente = $em->createQuery($Clientedql)->getSingleScalarResult();
        
        
        
        
        
        
        return $this->render('GlavBundle:Default:index.html.twig', array(
            'entities' => $entities,'cliente' => $cliente));
    }
}
