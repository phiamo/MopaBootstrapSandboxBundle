<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExampleInlineFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Email', null, array(
                'label_render' => false,
                'attr' => array(
                    'placeholder' => 'Password',
                ),
                'horizontal' => false,
            ))
            ->add('Password', null, array(
                'label_render' => false,
                'attr' => array(
                    'placeholder' => 'Email',
                ),
                'horizontal' => false
            ))
        ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'render_fieldset' => false,
            'label_render' => false,
            'show_legend' => false,
        ));
    }
    public function getName()
    {
        return "MopaBootstrap_Bundle_Inline_Possibilies";
    }
}
