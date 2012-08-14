<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleDateTimeTest extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('name', null, array('label' => 'Name Label'))

                ->add('start', null, array('label' => 'Start Label'))
                ->add('end', null, array('label' => 'End Label'))
        ;
    }


    public function getName()
    {
        return 'datetime_test';
    }
}