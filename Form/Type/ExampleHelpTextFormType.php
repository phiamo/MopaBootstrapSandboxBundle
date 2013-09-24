<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleHelpTextFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textfield_inline', 'text', array(
                'label' => "Inline Label name",
                'help_inline' => 'Inline help text!',
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
            ->add('textfield_block', 'text', array(
                'label' => "Block Label name",
                'help_block' => 'Block help text, can inlude <strong>HTML formatting</strong>',
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
            ->add('textfield_label', 'text', array(
                'label' => "Label help",
                'help_label' => 'Label help text',
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
            ->add('textfield_label_tootltip', 'text', array(
                'label' => "Label tooltip help",
                'help_label_tooltip' => array(
                    'title' => 'Label tooltip text'
                ),
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
            ->add('textfield_label_popover', 'text', array(
                'label' => "Label popover help",
                'help_label_popover' => array(
                    'title' => 'Label popover title',
                    'content' => 'Content for popover help, can include <strong>HTML</strong>'
                ),
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
            ->add('textfield_label_popover_options', 'text', array(
                'label' => "Label popover help right aligned, different icon",
                'help_label_popover' => array(
                    'title' => 'Label popover title to the right',
                    'placement' => 'right',
                    'icon' => 'icon-ok-sign',
                    'content' => 'Content for popover help, can include <strong>HTML</strong>'
                ),
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
            ->add('textfield_combined', 'text', array(
                'label' => "Combined label",
                'help_inline' => 'inline help',
                'help_block' => 'block help',
                'help_label' => 'label help',
                'help_label_tooltip' => array(
                    'title' => 'help tooltip text'
                ),
                'help_label_popover' => array(
                    'title' => 'help popover text',
                    'content' => 'beautiful, isn\'t it?'
                ),
                'attr' => array(
                    'placeholder' => "Some text",
                )
            ))
        ;
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_help_texts';
    }
    public function getButtonValue()
    {
        return ""; # return here the name of the route the form should point to
    }
}
