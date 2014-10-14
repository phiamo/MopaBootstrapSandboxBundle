<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExampleFormsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textField', 'text', array(
                'label' => "Label name",
                'help_block' => 'Associated help text!',
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
            ->add('checkboxesInline', 'choice', array(
                'label_render'        => false,
                'help_block'  => 'Expanded and multiple (inline)',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'widget_type'  => "inline"
            ))
        ;
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_forms';
    }
    public function getButtonValue()
    {
        return ""; # return here the name of the route the form should point to
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'Mopa\Bundle\BootstrapSandboxBundle\Form\Model\ExampleFormsData'
            ]
        );
    }
}
