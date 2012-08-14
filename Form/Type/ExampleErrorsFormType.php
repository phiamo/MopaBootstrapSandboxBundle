<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\Collection;
class ExampleErrorsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->setAttribute('error_type', "block") // use this to make all fields of this form error_type block
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
                'error_type' => "block",
                'attr' => array(
                    'class' => 'input-large',
                    'placeholder' => 'input-large',
                )
            ))
        ;
    }
    public function getDefaultOptions(array $options)
    {
        $collectionConstraint = new Collection(array(
            'textfield1' => new MinLength(5),
            'textfield2' => new Email(array('message' => 'Invalid email address')),
            'textfield3' => new Email(array('message' => 'Invalid email address')),
        ));

        return array(
                'validation_constraint' => $collectionConstraint,
                'csrf_protection' => false // just for demo purpose!
        );
    }
    public function getName()
    {
        return 'mopa_bootstrap_example_error_forms';
    }
}
