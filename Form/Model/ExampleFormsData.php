<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Form\Model;

/**
 * Mopa\Bundle\BootstrapSandboxBundle\Form\Model\ExampleFormsData
 *
 * @author Ivan Molchanov <ivan.molchanov@opensoftdev.ru>
 */
class ExampleFormsData
{
    /**
     * @var string
     */
    protected $textField;

    /**
     * @var integer
     */
    protected $checkboxesInline;

    /**
     * @param null $textField
     * @param null $checkboxesInline
     */
    public function __construct($textField = null, $checkboxesInline = null)
    {
        $this->textField = null !== $textField ? $textField : null;
        $this->checkboxesInline = null !== $checkboxesInline ? $checkboxesInline : null;
    }

    /**
     * @return int
     */
    public function getCheckboxesInline()
    {
        return $this->checkboxesInline;
    }

    /**
     * @param int $checkboxesInline
     * @return ExampleFormsData
     */
    public function setCheckboxesInline($checkboxesInline)
    {
        $this->checkboxesInline = $checkboxesInline;

        return $this;
    }

    /**
     * @return string
     */
    public function getTextField()
    {
        return $this->textField;
    }

    /**
     * @param string $textField
     * @return ExampleFormsData
     */
    public function setTextField($textField)
    {
        $this->textField = $textField;

        return $this;
    }
}
