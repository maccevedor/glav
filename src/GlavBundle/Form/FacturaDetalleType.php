<?php

namespace GlavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FacturaDetalleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('hash')
            ->add('cantidad')
            ->add('valor')
            ->add('iva')
            ->add('total')
            //->add('estado')
            ->add('fecha')
            ->add('id_factura')
            ->add('id_servicio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GlavBundle\Entity\FacturaDetalle'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'glavbundle_facturadetalle';
    }
}
