<?php

namespace GlavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InformeEmpleadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('hash')
            ->add('fecha_inicial','date')
            ->add('fecha_final','date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */


    /**
     * @return string
     */
    public function getName()
    {
        return 'glavbundle_informe';
    }
}
