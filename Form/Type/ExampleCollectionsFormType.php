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
                'widget_add_btn' => array('label' => "add now", 'attr' => array('class' => 'btn btn-primary')),
                'show_legend' => false, // dont show another legend of subform
                'options' => array( // options for collection fields
                    'label_render' => false,
                    'widget_control_group' => false,
                    'widget_remove_btn' => array('label' => "remove now", 'attr' => array('class' => 'btn')),
                    'attr' => array('class' => 'input-large'),
                )
            ))
            ->add('nice_email_collection','collection', array(
                'type' => 'email',
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
                'widget_add_btn' => array('label' => "add email"),
                'show_legend' => false, // dont show another legend of subform
                'options' => array( // options for collection fields
                    'widget_remove_btn' => array('label' => "remove now", 'attr' => array('class' => 'btn')),
                    'widget_control_group' => false,
                    'attr' => array('class' => 'input-large'),
                    'widget_addon' => array(
                        'text' => '@',
                        'type' => 'prepend'
                    ),
                )
            ))
            ->add('dates_collection','collection', array(
                'type' => new ExampleDateFormType(),
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
                'widget_add_btn' => array('label' => "add date"),
                'show_legend' => false, // dont show another legend of subform
                'options' => array(
                    'widget_remove_btn' => array('label' => "remove this", "icon" => "pencil", 'attr' => array('class' => 'btn')),
                    'widget_control_group' => false
              )
            ))
        ;
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_collections_forms';
    }
}
