<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Menu;

use Liip\ThemeBundle\ActiveTheme;
use Knp\Menu\FactoryInterface;

/**
 * An example howto inject a default KnpMenu to the Navbar
 * see also Resources/config/example_menu.yml
 * and example_navbar.yml
 * @author phiamo
 *
 */
class MenuBuilder
{
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createRightSideDropdownMenu(ActiveTheme $activeTheme)
    {
        $menu = $this->factory->createItem('root', array(
            'navbar' => true,
            'push_right' => true,
        ));

        // ... add theme change

        $dropdown = $menu->addChild('Change Theme', array(
            'dropdown' => true,
            'caret' => true,
        ));

        foreach ($activeTheme->getThemes() as $theme) {
            $themeDropdown = $dropdown->addChild($theme, array(
                'route' => 'liip_theme_switch',
                'routeParameters' => array('theme' => $theme)
            ));

            if ($activeTheme->getName() === $theme) {
                $themeDropdown->setCurrent(true);
            }
        }

        $tools = $menu->addChild('Tools Menu', array(
            'dropdown' => true,
            'caret' => true,
        ));

        $tools->addChild('Symfony', array('uri' => 'http://www.symfony.com'));
        $tools->addChild('bootstrap', array('uri' => 'http://twitter.github.com/bootstrap/'));
        $tools->addChild('node.js', array('uri' => 'http://nodejs.org/'));
        $tools->addChild('less', array('uri' => 'http://lesscss.org/'));

        //adding a nice divider
        $tools->addChild('divider_1', array('divider' => true));
        $tools->addChild('google', array('uri' => 'http://www.google.com/'));
        $tools->addChild('node.js', array('uri' => 'http://nodejs.org/'));

        //adding a nice divider
        $tools->addChild('divider_2', array('divider' => true));
        $tools->addChild('Mohrenweiser & Partner', array('uri' => 'http://www.mohrenweiserpartner.de'));

        // ... add more children
        return $menu;
    }
}
