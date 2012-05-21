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

just add this to your composer.json: 

``` json
{
    "require": {
        "mopa/bootstrap-sandbox-bundle": "dev-master"
    }
}
```

if you are using sf 2.0.x have a look into the README of the v2.0.x branch: 

https://github.com/phiamo/MopaBootstrapSandboxBundle/tree/v2.0.x

run

``` bash
composer.phar update
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
