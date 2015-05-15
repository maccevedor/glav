<?php

namespace GlavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RubroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hash')
            ->add('nombre')
            ->add('descripcion')
            ->add('valor')
            ->add('iva')
            ->add('estado')
            ->add('fecha')
            ->add('id_tipo_rubro')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GlavBundle\Entity\Rubro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'glavbundle_rubro';
    }
}
