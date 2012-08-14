<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Twig\Extension;

use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;
use Symfony\Component\HttpKernel\Config\FileLocator;

class FormSourceExtension extends \Twig_Extension
{
    protected $loader;
    protected $locator;
    protected $controller;

    public function __construct(FilesystemLoader $loader, FileLocator $locator)
    {
        $this->loader = $loader;
        $this->locator = $locator;
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
            'twigSource' => new \Twig_Function_Method($this, 'getTwigSource'),
            'fileSource' => new \Twig_Function_Method($this, 'getFileSource'),
            'classSource' => new \Twig_Function_Method($this, 'getClassSource'),
        );
    }

    public function getFileSource($file, $comment = '//')
    {
        $code = file($this->locator->locate($file));

        return $comment . ' '.basename($file)."\n\n".implode("", $code);
    }

    public function getClassSource($form)
    {
        $r = new \ReflectionClass($form);

        $code = file($r->getFilename());

        return '// '.basename($r->getFilename())."\n\n".implode("", $code);
    }

    public function getTwigSource($template)
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
