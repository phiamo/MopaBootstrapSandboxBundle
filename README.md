# README

<h2>Live Show</h2>

To see the bundle and its capabilities online just have a look on
[MopaBootstrapBundle Live](http://bootstrap.mohrenweiserpartner.de/mopa/bootstrap)

*  [MopaBootstrapBundle](http://github.com/phiamo/MopaBootstrapBundle) - Easy integration of twitters bootstrap into symfony2
*  [MopaBootstrapSandboxBundle](http://github.com/phiamo/MopaBootstrapSandboxBundle) - Seperate live docs from code
*  [symfony-bootstrap-sandbox](https://github.com/phiamo/symfony-bootstrap-sandbox) is also available


<h2>Introduction</h2>

MopaBootstrapSandboxBundle is a demo case howto use the MopaBootstrapBundle.

<h2>Installation</h2>

To use this in any of your projects (e.g. to make changes in MopaBootstrapBundle and see if it affects the Sandbox)

For detailed installation instructions also have a look into [MopaBoostrapBundle Documentation](https://github.com/phiamo/MopaBootstrapBundle/blob/master/Resources/doc/index.md)

if you are using sf 2.0.x with composer use:

``` json
{
    "require": {
        "mopa/bootstrap-sandbox-bundle": "2.0.x-dev"
    }
}
```

and run

``` bash
composer.phar update
```


if you are using sf 2.0.x with deps use:

```

[MopaBootstrapSandboxBundle] 
    git=http://github.com/phiamo/MopaBootstrapSandboxBundle.git 
    target=/bundles/Mopa/Bundle/BootstrapSandboxBundle
    version=origin/v2.0.x
    
[KnpMenuBundle]
    git = "http://github.com/KnpLabs/KnpMenuBundle.git"
    target = "/bundles/Knp/Bundle/MenuBundle"

[knp-components]
    git=http://github.com/KnpLabs/knp-components.git
    
[knpmenu]
    git = "http://github.com/KnpLabs/KnpMenu.git"
    target = "/knpmenu" 
```

add to autoload.php

```
    // ...
    'Mopa'        => __DIR__.'/../vendor/bundles',
    'Knp\\Component'   => __DIR__.'/../vendor/knp-components/src',
    'Knp\\Menu'        => __DIR__.'/../vendor/knpmenu/src',
    'Knp\\Bundle'      => __DIR__.'/../vendor/bundles',
    // ...
```

and to AppKernel.php

``` php
    // ...
            new Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(),
            new Mopa\Bundle\BootstrapSandboxBundle\MopaBootstrapSandboxBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
    // ...
```
and run

``` bash
bin/vendors install
```

If you are not using the [https://github.com/phiamo/symfony-bootstrap-sandbox](symfony-bootstrap-sandbox)
You have to configure your project a little bit further.

For this to work its required to have less installed:

- [Less installation](https://github.com/phiamo/MopaBootstrapBundle/blob/master/Resources/doc/less-installation.md)

config.yml:

``` yaml

# Twig Configuration (as proposed in https://github.com/phiamo/MopaBootstrapBundle/blob/master/README.md)
twig:
    form:
        resources:
            - 'MopaBootstrapBundle:Form:fields.html.twig'

# Assetic Configuration
assetic:
    filters:
        less:
            node: /usr/bin/node
            node_paths: [/opt/lessc/lib, /usr/lib/node_modules]
            apply_to: "\.less$"

# activate navbar component
mopa_bootstrap:
    navbar: ~
```


routing.yml:

``` yaml
MopaBootstrapSandbox:
    resource: "@MopaBootstrapSandboxBundle/Controller"
    type:     annotation
```

this imports the routes to be abled to access it in your browser via:

http://yourproject/mopa/bootstrap
