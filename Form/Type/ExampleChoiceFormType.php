<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleChoiceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Choice', 'choice', array(
                'label'        => 'Select list',
                'help_block'  => 'Default settings',
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Choice_multiple', 'choice', array(
                'label'        => 'Multicon-select',
                'help_block'  => 'Multiple',
                'multiple'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Radio_Buttons', 'choice', array(
                'label'        => 'Radio buttons',
                'help_block'  => 'Expanded',
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Checkboxes', 'choice', array(
                'label'        => 'Checkboxes',
                'help_block'  => 'Expanded and multiple',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Checkboxes_Inline', 'choice', array(
                'label'        => 'Inline checkboxes',
                'help_block'  => 'Expanded and multiple (inline)',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'widget_type'  => "inline"
            ))
            ->add('Simple_Checkboxes', 'checkbox', array(
                'label'        => 'Simple checkbox',
                'help_block'  => 'This is the inline help',
                'help_block'  => 'Checkbox widgets can have help block too'
            ))
            ->add('Radio_By_Buttons', 'choice', array(
                'widget_type' => 'inline-btn',
                'expanded'    => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'attr'  => array(
                    'class' => 'btn-default',
                ),
                'help_block'  => 'Radio by buttons (btn)',
            ))
            ->add('Checkboxes_By_Buttons', 'choice', array(
                'widget_type' => 'inline-btn',
                'expanded'    => true,
                'multiple'    => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'attr'  => array(
                    'class' => 'btn-default',
                ),
                'help_block'  => 'Checkboxes by buttons (inline-btn)',
            ))
            ->add('Button_checkbox', 'checkbox', array(
                'widget_type' => 'inline-btn',
                'attr'  => array(
                    'class' => 'btn btn-danger',
                ),
                'help_block'  => 'Single checkboxe by button (btn)',
            ))
        ;
    }
    public function getName()
    {
        return "MopaBootstraBundle_Choice_Possibilies";
    }
}
