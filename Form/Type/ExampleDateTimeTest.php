<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleDateTimeTest extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name', null, array(
                    'label' => 'Name Label',
                ))
                ->add('start', null, array(
                    'label' => 'Start Label',
                    'horizontal_input_wrapper_class' => 'col-lg-2'
                ))
                ->add('end', null, array(
                    'label' => 'End Label',
                    'horizontal_input_wrapper_class' => 'col-lg-2'
                ))
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datetime_test';
    }
}
