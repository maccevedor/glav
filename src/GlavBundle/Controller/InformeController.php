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
        
        return $this->render('GlavBundle:Informe:empleado.html.twig');
       
    }
    public function informeEmpleadoAction()
    {
        
        $form = $this->createForm(new InformeEmpleadoType(), array(
            'action' => $this->generateUrl('informe_empleado'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
       
    }
}
