<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class ExampleExtendedFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textfield1', 'text', array(
                'label' => 'Form sizes',
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('textfield2', 'text', array(
                'label_render' => false,
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-6',
                'attr' => array(
                    'placeholder' => 'col-lg-6',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('textfield3', 'text', array(
                'label_render' => false,
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-9',
                'attr' => array(
                    'placeholder' => 'col-lg-9',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('select1', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'constraints' =>  new NotBlank(),
            ))
            ->add('select2', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-6',
                'constraints' =>  new NotBlank(),
            ))
            ->add('select3', 'choice', array(
                'label_render'        => false,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'horizontal_label_class' => 'col-lg-offset-3',
                'horizontal_input_wrapper_class' => 'col-lg-9',
                'constraints' =>  new NotBlank(),
            ))
            ->add('labeled_textarea', 'textarea', array(
                'error_type' => "block",
                'constraints' =>  new NotBlank(),
                'attr' => array(
                    'class' => 'input-large',
                    'placeholder' => 'input-large',
                )
            ))
            ->add('textarea', 'textarea', array(
                'label_render' => false,
                'error_type' => "block",
                'constraints' =>  new NotBlank(),
                'attr' => array(
                    'class' => 'input-large',
                    'placeholder' => 'input-large',
                )
            ))
            ->add('Prepended_Text', 'text', array(
                'widget_addon_prepend' => array(
                    'text' => '@'
                ),
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Prepended_Icon', 'text', array(
                'widget_addon_prepend' => array(
                    'icon' => 'headphones'
                ),
                'horizontal_input_wrapper_class' => 'col-lg-9',
                'attr' => array(
                    'placeholder' => 'Which kind of music?',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Appended_Text', 'text', array(
                'widget_addon_append' => array(
                    'text' => '.00',
                ),
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Appended_Icon', 'text', array(
                'widget_addon_append' => array(
                    'icon' => 'pencil',
                    'type' => 'append',
                ),
                'horizontal_input_wrapper_class' => 'col-lg-9',
                'attr' => array(
                    'placeholder' => 'Which kind of books?',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Checkboxes_Inline', 'choice', array(
                'label'        => 'Inline checkboxes',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two', '3'=>'three'),
                'widget_type'  => 'inline',
                'constraints' =>  new NotBlank(),
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
                'constraints' =>  new NotBlank(),
            ))
            ->add('Radio_Buttons_Inline', 'choice', array(
                'label'        => 'Inline Radio buttons',
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two', '3'=>'three'),
                'widget_type'  => 'inline',
                'constraints' =>  new NotBlank(),
            ))
            ->add('Radio_Buttons', 'choice', array(
                'label'        => 'Radio buttons',
                'expanded'     => true,
                'choices'      => array(
                    '1' => 'Option one is this and that—be sure to include why it`s great',
                    '2' => 'Option two can also be checked and included in form results',
                    '3' => 'Option three can—yes, you guessed it—also be checked and included in form results'
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('publicVisible', 'checkbox', array(
                'required' => false,
                'constraints' =>  new NotBlank(),
            ))
            ->add('time1', 'time', array(
                'widget' => 'single_text',
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'constraints' =>  new NotBlank(),
                'timepicker' => true,
            ))
            ->add('date1', 'date', array(
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'widget' => 'single_text',
                'constraints' =>  new NotBlank(),
                'datepicker' => true,
            ))
            ->add('date_time1', 'datetime', array(
                'widget' => 'single_text',
                'horizontal_input_wrapper_class' => 'col-lg-5',
                'constraints' =>  new NotBlank(),
                'datetimepicker' => true,
            ))
            ->add('Prefix_Text', 'text', array(
                'widget_prefix' => "Prefix Text",
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Suffix_Text', 'text', array(
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'widget_suffix' => "Suffix Text",
                'attr' => array(
                    'class' => 'col-lg-4',
                    'placeholder' => 'col-lg-4',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Money_default', 'money', array(
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Percent_default', 'percent', array(
                'horizontal_input_wrapper_class' => 'col-lg-4',
                'attr' => array(
                    'placeholder' => 'col-lg-4',
                ),
                'constraints' =>  new NotBlank(),
            ))
            ->add('Required_false', 'text', array(
                'required' => false,
                'constraints' =>  new NotBlank(),
            ))
            ->add('Required_asterisk_false', 'text', array(
                'required' => true,
                'render_required_asterisk' => false,
                'constraints' =>  new NotBlank(),
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'render_fieldset' => false,
            'show_legend' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mopa_bootstrap_example_extended_forms';
    }
}
