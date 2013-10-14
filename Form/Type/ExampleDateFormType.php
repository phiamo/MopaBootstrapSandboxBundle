<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleDateFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startAt','date', array(
                'attr' => array('class' => 'startdate span1'),
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
                'horizontal_input_wrapper_class' => 'col-lg-3',
            ))
            ->add('endAt','date', array(
                'attr' => array('class' => 'enddate span2'),
                'widget' => 'choice',
                'format' => 'dd MM yyyy',
                'horizontal_input_wrapper_class' => 'col-lg-3',
            ))
            ->add('special','checkbox', array(
                'label'     => 'Special?',
                'required'  => false,
                'horizontal_input_wrapper_class' => 'col-lg-1',
            ))
            ;
    }

    public function getName()
    {
        return 'example_date';
    }

}
