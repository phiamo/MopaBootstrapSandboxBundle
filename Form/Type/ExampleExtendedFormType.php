<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleExtendedFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textfield1', 'text', array(
                'label' => 'Form sizes',
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('textfield2', 'text', array(
                'label_render' => false,
                'attr' => array(
                    'class' => 'input-medium',
                    'placeholder' => 'input-medium',
                )
            ))
            ->add('textfield3', 'text', array(
                'label_render' => false,
                'attr' => array(
                    'class' => 'input-large',
                    'placeholder' => 'input-large',
                )
            ))
            ->add('select1', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'attr' => array(
                    'class' => 'input-mini',
                )
            ))
            ->add('select2', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'attr' => array(
                    'class' => 'input-medium',
                )
            ))
            ->add('select3', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'attr' => array(
                    'class' => 'input-large',
                )
            ))
            ->add('Prepended_Text', 'text', array(
                'widget_addon' => array(
                    'type' => 'prepend',
                    'text' => '@'
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Prepended_Icon', 'text', array(
                'widget_addon' => array(
                    'type' => 'prepend',
                    'icon' => 'headphones'
                ),
                'attr' => array(
                    'class' => 'input-lage',
                    'placeholder' => 'Which kind of music?',
                )
            ))
            ->add('Appended_Text', 'text', array(
                'widget_addon' => array(
                    'text' => '.00',
                    'type' => 'append',
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Appended_Icon', 'text', array(
                'widget_addon' => array(
                    'icon' => 'pencil',
                    'type' => 'append',
                ),
                'attr' => array(
                    'class' => 'input-large',
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
            ))
            ->add('date1', 'date', array(
                'widget' => 'choice',
            ))
            ->add('date_time1', 'datetime', array(
                'widget' => 'choice',
            ))
            ->add('Prefix_Text', 'text', array(
                'widget_prefix' => "Prefix Text",
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Suffix_Text', 'text', array(
                'widget_suffix' => "Suffix Text",
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Money_default', 'money', array(
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Money_append', 'money', array(
                'widget_addon' => array(
                    'type' => 'append'
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Money_prepend', 'money', array(
                'widget_addon' => array(
                    'type' => 'prepend'
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Money_nothing', 'money', array(
                'widget_addon' => array(
                    'type' => false
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Percent_default', 'percent', array(
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Percent_append', 'percent', array(
                'widget_addon' => array(
                    'type' => 'append'
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Percent_prepend', 'percent', array(
                'widget_addon' => array(
                    'type' => 'prepend'
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
                )
            ))
            ->add('Percent_nothing_added', 'percent', array(
                'widget_addon' => array(
                    'type' => false
                ),
                'attr' => array(
                    'class' => 'input-mini',
                    'placeholder' => 'input-mini',
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
    public function getName()
    {
        return 'mopa_bootstrap_example_extended_forms';
    }
}
