<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleInlineFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAttribute('show_legend', false)
            ->setAttribute('render_fieldset', false)
            ->add('Email', null, array(
                'label_render' => false,
                'widget_controls' => false,
                'widget_control_group' => false,
                'attr' => array(
                    'placeholder' => 'Password',
                    'class' => 'input-small'
                ),
            ))
            ->add('Password', null, array(
                'label_render' => false,
                'widget_controls' => false,
                'widget_control_group' => false,
                'attr' => array(
                    'placeholder' => 'Email',
                    'class' => 'input-small'
                ),
            ))
        ;
    }
    public function getName()
    {
        return "MopaBootstraBundle_Inline_Possibilies";
    }
}
