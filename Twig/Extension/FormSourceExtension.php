<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Twig\Extension;

use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;

class FormSourceExtension extends \Twig_Extension
{
    protected $loader;
    protected $controller;

    public function __construct(FilesystemLoader $loader)
    {
        $this->loader = $loader;
    }

    public function setController($controller)
    {
        $this->controller = $controller;
    }
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'code' => new \Twig_Function_Method($this, 'getCode', array('is_safe' => array('html'))),
            'templateCode' => new \Twig_Function_Method($this, 'getTemplateSource'),
            'formCode' => new \Twig_Function_Method($this, 'getFormSource'),
        );
    }
    public function getFormSource($form)
    {
        $r = new \ReflectionClass($form);

        $code = file($r->getFilename());

        return '// '.$r->getFilename()."\n".implode("", $code);
    }

    public function getTemplateSource($template)
    {
        $code = $this->loader->getSource($template->getTemplateName());

        return '{# '.$template->getTemplateName()." #}\n\n".$code;
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'mopa_bootstrap_form_source';
    }
}
