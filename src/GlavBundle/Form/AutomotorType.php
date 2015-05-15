<?php

namespace GlavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AutomotorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hash')
            ->add('tipo_rubro')
            ->add('modelo')
            ->add('matricula')
            ->add('estado')
            ->add('fecha')
            ->add('id_tipo_automotor')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GlavBundle\Entity\Automotor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'glavbundle_automotor';
    }
}
