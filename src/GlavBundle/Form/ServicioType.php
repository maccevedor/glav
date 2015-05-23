<?php

namespace GlavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class ServicioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha_servicio')    
            //->add('estado')
            //->add('fecha')
            ->add('id_cliente')
            ->add('id_empleado')
            ->add('id_automotor')
            ->add('estadoServicio', 'choice', array(
                  'choice_list' => new ChoiceList(array('Iniciado', 'Espera','Finalizado','Anulado'), array('Iniciado',  'Espera','Finalizado','Anulado')),
                        'label' => 'Selecciona estado del servido',
                    	'empty_value' => 'Selecciona estado del servido'
                ,'attr' => array('class'=>'form-control')))
            ->add('id_rubro')
            ->add('fecha_entrega')
            ->add('observacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GlavBundle\Entity\Servicio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'glavbundle_servicio';
    }
}
