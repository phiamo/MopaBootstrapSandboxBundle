<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleNestedCollectionParentType
 *
 * @author Ivan Molchanov <ivan.molchanov@opensoftdev.ru>
 */
class ExampleNestedCollectionParentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'myCollection',
                'collection',
                [
                    'type' => new ExampleNestedCollectionChildType(),
                    'allow_add' => true,
                    'label' => 'parent collection',
                    'options' => [
                        'label' => 'child collection'
                    ]
                ]

            );
    }

    public function getName()
    {
        return 'mopa_bootstrap_example_nested_collection_parent';
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
