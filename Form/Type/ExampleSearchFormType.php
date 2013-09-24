<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Mopa\Bundle\BootstrapBundle\Navbar\NavbarFormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExampleSearchFormType extends AbstractType implements NavbarFormInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search', 'text', array(
                'widget_form_group' => false,
                'label' => false,
                'attr' => array(
                    'placeholder' => "search",
                    'class' => "input-medium search-query"
                )
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
        return 'mopa_bootstrap_example_search';
    }
    /**
     * To implement NavbarFormTypeInterface
     */
    public function getRoute()
    {
        return "mopa_bootstrap_welcome"; # return here the name of the route the form should point to
    }
}
