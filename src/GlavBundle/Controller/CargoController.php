<?php
    /*
    * @autor: anderipe
    * @fecha: Abril de 2015
    */
namespace GlavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; 
use GlavBundle\Entity\Cargo;
use GlavBundle\Form\CargoType;

class CargoController extends Controller
{
		public function indexAction(){
   

            	$cargo = new Cargo();
                $form = $this->createForm(new CargoType() ,$cargo);

                return $this->render('GlavBundle:Cargo:index.html.twig', array(
                    'form'   => $form->createView()
                ));
          

		}

  



}
