<?php

namespace GlavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrestamoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hash')
            ->add('observacion')
            ->add('estado')
            //->add('fecha')
            //->add('id_servicio')
            ->add('id_empleado')
            ->add('valor')

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GlavBundle\Entity\Prestamo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'glavbundle_prestamo';
    }
}
