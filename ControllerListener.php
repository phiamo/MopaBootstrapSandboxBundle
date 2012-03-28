<?php

namespace Mopa\Bundle\BootstrapSandboxBundle;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Mopa\Bundle\BootstrapSandboxBundle\Twig\Extension\FormSourceExtension;

class ControllerListener
{
    protected $extension;

    public function __construct(FormSourceExtension $extension)
    {
        $this->extension = $extension;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()) {
            $this->extension->setController($event->getController());
        }
    }
}
