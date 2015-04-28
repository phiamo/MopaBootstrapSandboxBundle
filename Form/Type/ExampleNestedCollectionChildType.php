<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleNestedCollectionChildType
 *
 * @author Ivan Molchanov <ivan.molchanov@opensoftdev.ru>
 */
class ExampleNestedCollectionChildType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'myCollectionChild',
                'collection',
                [
                    'type' => 'text',
                    'allow_add' => 'true',
                    'label' => 'smth',
                    'options' => [
                        'label' => 'smth else'
                    ]
                ]
            );
    }

    public function getName()
    {
        return 'mopa_bootstrap_example_nested_collection_child';
    }

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        // TODO: Implement configureOptions() method.
    }
}
