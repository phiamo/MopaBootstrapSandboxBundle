<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class ExampleTabsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $about = $builder->create('about', 'tab', array(
            'label' => 'About',
            'icon' => 'pencil',
            'inherit_data' => true,
        ));

        $about
            ->add('first', 'text', array(
                'constraints' => array(
                    new NotBlank(),
                ),
            ))
            ->add('last');

        $social = $builder->create('social', 'tab', array(
            'label' => 'Social',
            'icon' => 'user',
        ));

        $social
            ->add('facebook')
            ->add('twitter');

        /**
         * Tabs within tabs
         */
        $subtab = $builder->create('subtab', 'tab', array(
            'label' => 'Sub Tabs',
            'tabs_class' => 'nav nav-pills',
        ));

        $subtab1 = $builder->create('subtab1', 'tab', array(
            'label' => 'Sub Tab 1',
        ));

        $subtab1
            ->add('test1_1')
            ->add('test1_2');

        $subtab2 = $builder->create('subtab2', 'tab', array(
            'label' => 'Sub Tab 2',
        ));

        $subtab2
            ->add('test2_1')
            ->add('test2_2');

        // Add both tabs to parent
        $subtab
            ->add($subtab1)
            ->add($subtab2);

        /**
         * Add both tabs to the main form
         */
        $builder
            ->add($about)
            ->add($social)
            ->add($subtab);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(

        ));
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_tabs';
    }
}
