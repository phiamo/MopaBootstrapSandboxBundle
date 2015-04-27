<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleCollectionsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email_collection','collection', array(
                'type' => 'email',
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
                'options' => array( // options for collection fields
                    'horizontal' => true,
                    'label_render' => false,
                    'horizontal_input_wrapper_class' => "col-lg-8",
                )
            ))
            ->add('nice_email_collection','collection', array(
                'type' => 'email',
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
                'widget_add_btn' => array('label' => "add email"),
                'widget_remove_btn' => array('label' => "remove email"),
                'show_legend' => false, // dont show another legend of subform
                'options' => array( // options for collection fields
                    'label_render' => false,
                    'widget_addon_prepend' => array(
                        'text' => '@',
                    ),
                    'horizontal_input_wrapper_class' => "col-lg-8",
                )
            ))
            ->add('nice_email_collection_with_options','collection', array(
                'type' => 'email',
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
                'widget_add_btn' => array('label' => "add email"),
                'show_legend' => false, // dont show another legend of subform
                'horizontal_wrap_children' => true,
                'options' => array( // options for collection fields
                    'label_render' => false,
                    'widget_addon_prepend' => array(
                        'text' => '@',
                    ),
                    'widget_remove_btn' => array(
                        'label' => "remove",
                        'horizontal_wrapper_div' => array(
                            'class' => "col-lg-4"
                        ),
                        'wrapper_div' => false,
                    ),
                    'horizontal' => true,
                    'horizontal_label_offset_class' => "",
                    'horizontal_input_wrapper_class' => "col-lg-8",
                )
            ))
            ->add('dates_collection','collection', array(
                'type' => new ExampleDateFormType(),
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
                'widget_add_btn' => array('label' => "add date"),
                'options' => array(
                    'label_render' => false,
                    'widget_remove_btn' => array('label' => "remove this", "icon" => "pencil", 'attr' => array('class' => 'btn btn-danger')),
              )
            ))
        ;
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_collections_forms';
    }
}
