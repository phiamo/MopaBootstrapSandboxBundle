<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Menu;

use Knp\Menu\FactoryInterface;

/**
 * An example howto inject a default KnpMenu to the Navbar
 * see also Resources/config/example_menu.yml
 * and example_navbar.yml
 * @author phiamo
 *
 */
class Builder
{
    public function createMainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'navbar' => true,
        ));

        $layout = $menu->addChild('Layout', array(
            'icon' => 'home',
            'route' => 'mopa_bootstrap_layout_example',
        ));

        $dropdown = $menu->addChild('Forms', array(
            'dropdown' => true,
            'caret' => true,
        ));

        $dropdown->addChild('Examples', array('route' => 'mopa_bootstrap_forms_examples'));
        $dropdown->addChild('Horizontal', array('uri' => '#'));
        $dropdown->addChild('Extended Forms', array('route' => 'mopa_bootstrap_forms_extended'));
        $dropdown->addChild('Extended Views', array('route' => 'mopa_bootstrap_forms_view_extended'));
        $dropdown->addChild('Embedded Type Forms', array('route' => 'mopa_bootstrap_forms_embeddedtype'));
        $dropdown->addChild('Forms Errors', array('route' => 'mopa_bootstrap_forms_errors'));
        $dropdown->addChild('Help Texts', array('route' => 'mopa_bootstrap_forms_helptexts'));
        $dropdown->addChild('Choice Fields', array('route' => 'mopa_bootstrap_forms_choices'));
        $dropdown->addChild('Collections Fields', array('route' => 'mopa_bootstrap_forms_collections'));
        $dropdown->addChild('Form Tabs', array('route' => 'mopa_bootstrap_forms_tabs'));

        $menu->addChild('Navbars', array('route' => 'mopa_bootstrap_navbar'));
        $menu->addChild('Macros for components', array('route' => 'mopa_bootstrap_components'));

        return $menu;
    }

    public function createNavbarsSubnavMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'subnavbar' => true,
        ));

        $menu->addChild('Top', array('uri' => '#top'));
        $menu->addChild('Navbars', array('uri' => '#navbars'));
        $menu->addChild('Template', array('uri' => '#template'));
        $menu->addChild('Menus', array('uri' => '#menus'));
        // ... add more children
        return $menu;
    }

    public function createComponentsSubnavMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array(
            'subnavbar' => true,
        ));

        $menu->addChild('Top', array('uri' => '#top'));
        $menu->addChild('Flashs', array('uri' => '#flashs'));
        $menu->addChild('Session Flashs', array('uri' => '#session-flashes'));
        $menu->addChild('Labels & Badges', array('uri' => '#labels-badges'));
        // ... add more children
        return $menu;
    }
}
