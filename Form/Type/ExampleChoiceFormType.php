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
                'help_inline'  => 'Default settings',
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Choice_multiple', 'choice', array(
                'label'        => 'Multicon-select',
                'help_inline'  => 'Multiple',
                'multiple'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Radio_Buttons', 'choice', array(
                'label'        => 'Radio buttons',
                'help_inline'  => 'Expanded',
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Checkboxes', 'choice', array(
                'label'        => 'Checkboxes',
                'help_inline'  => 'Expanded and multiple',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
            ))
            ->add('Checkboxes_Inline', 'choice', array(
                'label'        => 'Inline checkboxes',
                'help_inline'  => 'Expanded and multiple (inline)',
                'multiple'     => true,
                'expanded'     => true,
                'choices'      => array('1' => 'one', '2' => 'two'),
                'widget_type'  => "inline"
            ))
            ->add('Simple_Checkboxes', 'checkbox', array(
                'label'        => 'Simple checkbox',
                'help_inline'  => 'This is the inline help',
                'help_block'  => 'Checkbox widgets can have help block too'
            ))
        ;
    }
    public function getName()
    {
        return "MopaBootstraBundle_Choice_Possibilies";
    }
}
