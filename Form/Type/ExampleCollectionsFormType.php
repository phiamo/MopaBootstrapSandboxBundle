<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class ExampleCollectionsFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('email_collection','collection', array(
                'type' => 'email',
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
				'widget_add_btn' => "add now",
                'show_legend' => false, // dont show another legend of subform
                'options' => array( // options for collection fields
                	'label_render' => false,
                	'widget_control_group' => false,
					'widget_remove_btn' => "remove now",
					'attr' => array('class' => 'input-large'),
				)
            ))
            ->add('nice_email_collection','collection', array(
                'type' => 'email',
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
				'widget_add_btn' => "add email",
                'show_legend' => false, // dont show another legend of subform
                'options' => array( // options for collection fields
					'widget_remove_btn' => "remove this",
                	'widget_control_group' => false,
					'attr' => array('class' => 'input-large'),
					'widget_addon' => array(
						'text' => '@',
					),
				)
            ))
            ->add('dates_collection','collection', array(
                'type' => new ExampleDateFormType(),
                'allow_add' => true,
                'allow_delete' => true, // should render default button, change text with widget_remove_btn
                'prototype' => true,
                'show_legend' => false, // dont show another legend of subform
                'options' => array(
					'widget_remove_btn' => "icon-remove",
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

