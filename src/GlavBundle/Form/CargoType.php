<?php

namespace GlavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class CargoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder   
            ->add('nombre','text',array('label'=>'Nombre del cargo','attr' => array('class'=>'form-control')))
            ->add('descripcion','text',array('label'=>'descripcion' ,'attr'=> array('class'=>'form-control')));          
            
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GlavBundle\Entity\Cargo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'apps_educam_admision_laboral';
    }
}