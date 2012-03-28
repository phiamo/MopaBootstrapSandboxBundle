<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;
use Acme\DemoBundle\Twig\Extension\DemoExtension;

class FormSourceExtension extends DemoExtension
{
    
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
        var_dump($form);
        $r = new \ReflectionClass($form);

        $code = file($r->getFilename());

        return '//'.$r->getFilename()."\n".implode("", $code);
    }

    public function getTemplateSource($template)
    {
        $code = $this->getTemplateCode($template);
        
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
