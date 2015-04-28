<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Type;

use Mopa\Bundle\BootstrapBundle\Tests\Form\AbstractDivLayoutTest;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Model\ExampleFormsData;

/**
 * Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleFormsTypeTest
 *
 * @author Ivan Molchanov <ivan.molchanov@opensoftdev.ru>
 */
class ExampleFormsTypeTest extends AbstractDivLayoutTest
{
    /**
     * Test form submit
     *
     * @dataProvider provideParametersForSubmitTest
     * @param ExampleFormsData $object
     * @param array            $data
     */
    public function testSubmit(ExampleFormsData $object, $data = array())
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
        return array(
            array(
                'object' => new ExampleFormsData('test', array(1)),
                'data' => array('textField' => 'test', 'checkboxesInline' => array(1))
            )
        );
    }
}
