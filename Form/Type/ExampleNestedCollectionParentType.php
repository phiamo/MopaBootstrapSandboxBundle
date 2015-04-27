<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

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
                ]
            );
    }

    public function getName()
    {
        return 'mopa_bootstrap_example_nested_collection_parent';
    }
} 
