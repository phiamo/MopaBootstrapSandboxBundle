<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Mopa\Bundle\BootstrapBundle\Tests\Form\TypeTestCase;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleFormsType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Model\ExampleFormsData;

/**
 * Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleFormsTypeTest
 *
 * @author Ivan Molchanov <ivan.molchanov@opensoftdev.ru>
 */
class ExampleFormsTypeTest extends TypeTestCase
{
    /**
     * Test form submit
     *
     * @dataProvider provideParametersForSubmitTest
     * @param ExampleFormsData $object
     * @param array            $data
     */
    public function testSubmit(ExampleFormsData $object, $data = [])
    {
        $form = $this->factory->create(new ExampleFormsType());
        $form->submit($data);
        $this->assertTrue($form->isSynchronized());
        $this->assertTrue($form->isValid());
        $this->assertEquals($object, $form->getData());
    }

    /**
     * @return array
     */
    public function provideParametersForSubmitTest()
    {
        return [
            [
                'object' => new ExampleFormsData('test', 1),
                'data' => ['textField' => 'test', 'checkboxesInline' => 1,]
            ]
        ];
    }
}
