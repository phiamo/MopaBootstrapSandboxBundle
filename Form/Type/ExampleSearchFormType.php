<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Mopa\Bundle\BootstrapBundle\Navbar\NavbarFormInterface;


class ExampleSearchFormType extends AbstractType implements NavbarFormInterface
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->setAttribute('render_fieldset', false)
            ->setAttribute('label_render', false)
            ->setAttribute('show_legend', false)
            ->add('search', 'text', array(
                'label_render' => false,
                'widget_control_group' => false,
                'widget_controls' => false,
                'attr' => array(
                    'placeholder' => "search",
                    'class' => "input-medium search-query"
                )
            ))
        ;
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_search';
    }
    /**
     * To implement NavbarFormTypeInterface
     */
    public function getRoute()
    {
        return "mopa_bootstrap_welcome"; # return here the name of the route the form should point to
    }
    public function getButtonValue()
    {
        return ""; # return here the name of the route the form should point to
    }
}

