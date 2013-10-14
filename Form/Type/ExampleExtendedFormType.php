<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExampleExtendedFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textfield1', 'text', array(
                'label' => 'Form sizes',
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                )
            ))
            ->add('textfield2', 'text', array(
                'label_render' => false,
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-6',
                'attr' => array(
                    'placeholder' => 'col-lg-6',
                )
            ))
            ->add('textfield3', 'text', array(
                'label_render' => false,
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-9',
                'attr' => array(
                    'placeholder' => 'col-lg-9',
                )
            ))
            ->add('select1', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-4',
            ))
            ->add('select2', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-6',
            ))
            ->add('select3', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-9',
            ))
            ->add('Prepended_Text', 'text', array(
                'widget_addon_prepend' => array(
                    'text' => '@'
                ),
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                )
            ))
            ->add('Prepended_Icon', 'text', array(
                'widget_addon_prepend' => array(
                    'icon' => 'headphones'
                ),
                'horizontal_input_wrapper_class' => 'col-lg-9',
                'attr' => array(
                    'placeholder' => 'Which kind of music?',
                )
            ))
            ->add('Appended_Text', 'text', array(
                'widget_addon_append' => array(
                    'text' => '.00',
                ),
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                )
            ))
            ->add('Appended_Icon', 'text', array(
                'widget_addon_append' => array(
                    'icon' => 'pencil',
                    'type' => 'append',
                ),
                'horizontal_input_wrapper_class' => 'col-lg-9',
                'attr' => array(
                    'placeholder' => 'Which kind of books?',
                )
            ))
            ->add('Checkboxes_Inline', 'choice', array(
                'label'        => 'Inline checkboxes',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two', '3'=>'three'),
                'widget_type'  => 'inline'
            ))
            ->add('Checkboxes', 'choice', array(
                'label'        => 'Checkboxes',
                'help_block'  => '<strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array(
                    '1' => 'Option one is this and that—be sure to include why it`s great',
                    '2' => 'Option two can also be checked and included in form results',
                    '3' => 'Option three can—yes, you guessed it—also be checked and included in form results'
                ),
            ))
            ->add('Radio_Buttons_Inline', 'choice', array(
                'label'        => 'Inline Radio buttons',
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two', '3'=>'three'),
                'widget_type'  => 'inline'
            ))
            ->add('Radio_Buttons', 'choice', array(
                'label'        => 'Radio buttons',
                'expanded'     => true,
                'choices'      => array(
                    '1' => 'Option one is this and that—be sure to include why it`s great',
                    '2' => 'Option two can also be checked and included in form results',
                    '3' => 'Option three can—yes, you guessed it—also be checked and included in form results'
                ),
            ))
            ->add('publicVisible', 'checkbox', array(
                'required' => false,
            ))
            ->add('time1', 'time', array(
                'widget' => 'choice',
                'horizontal_input_wrapper_class' => 'col-lg-2'
            ))
            ->add('date1', 'date', array(
                'horizontal_input_wrapper_class' => 'col-lg-2',
                'widget' => 'choice',
            ))
            ->add('date_time1', 'datetime', array(
                'widget' => 'choice',
                'horizontal_input_wrapper_class' => 'col-lg-2'
            ))
            ->add('Prefix_Text', 'text', array(
                'widget_prefix' => "Prefix Text",
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                )
            ))
            ->add('Suffix_Text', 'text', array(
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'widget_suffix' => "Suffix Text",
                'attr' => array(
                    'class' => 'col-lg-4',
                    'placeholder' => 'col-lg-4',
                )
            ))
            ->add('Money_default', 'money', array(
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                )
            ))
            ->add('Percent_default', 'percent', array(
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                )
            ))
            ->add('Required_false', 'text', array(
                'required' => false,
            ))
            ->add('Required_asterisk_false', 'text', array(
                'required' => true,
                'render_required_asterisk' => false
            ))
        ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'render_fieldset' => false,
            'show_legend' => false,
        ));
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_extended_forms';
    }
}
