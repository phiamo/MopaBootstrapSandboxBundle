<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Navbar\Example;
use Liip\ThemeBundle\ActiveTheme;

use Symfony\Component\HttpFoundation\Request;
use Mopa\Bundle\BootstrapBundle\Navbar\AbstractNavbarMenuBuilder;

/**
 * An example howto inject a default KnpMenu to the Navbar
 * see also Resources/config/example_menu.yml
 * and example_navbar.yml
 * @author phiamo
 *
 */
class MenuBuilder extends AbstractNavbarMenuBuilder
{

    public function createMainMenu(Request $request)
    {
        $menu = $this->createNavbarMenuItem();
        $layout = $menu->addChild('Layout', array('route' => 'mopa_bootstrap_layout_example'));
        
        $this->addIcon($layout, array('icon' => 'home', 'inverted'=>true, 'append'=>false ));

        $dropdown = $this->createDropdownMenuItem($menu, "Forms", false, array('caret' => true));
        $examples =$dropdown->addChild('Examples', array('route' => 'mopa_bootstrap_forms_examples'));
        $this->addIcon($examples, array('icon' => 'home'));
        $dropdown->addChild('Horizontal', array('route' => 'mopa_bootstrap_forms_horizontal'));
        $dropdown->addChild('Extended Forms', array('route' => 'mopa_bootstrap_forms_extended'));
        $dropdown->addChild('Extended Views', array('route' => 'mopa_bootstrap_forms_view_extended'));
        $dropdown->addChild('Embedded Type Forms', array('route' => 'mopa_bootstrap_forms_embeddedtype'));
        $dropdown->addChild('Forms Errors', array('route' => 'mopa_bootstrap_forms_errors'));
        $dropdown->addChild('Choice Fields', array('route' => 'mopa_bootstrap_forms_choices'));
        $dropdown->addChild('Collections Fields', array('route' => 'mopa_bootstrap_forms_collections'));
        $menu->addChild('Navbars', array('route' => 'mopa_bootstrap_navbar'));
        $menu->addChild('Macros for components', array('route' => 'mopa_bootstrap_components'));
        // ... add more children
        return $menu;
    }

    public function createRightSideDropdownMenu(Request $request, ActiveTheme $activeTheme)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav pull-right');

        // ... add theme change

        $dropdown = $this->createDropdownMenuItem($menu, "Change Theme", true, array('caret' => true));
        foreach ($activeTheme->getThemes() as $theme) {
            $themeDropdown = $dropdown->addChild($theme, array('route' => 'liip_theme_switch', 'routeParameters' => array('theme' => $theme)));
            if ($activeTheme->getName() === $theme) {
                $themeDropdown->setCurrent(true);
            }

        }

        $dropdown = $this->createDropdownMenuItem($menu, "Tools Menu", true, array('caret' => true));
        $dropdown->addChild('Symfony', array('uri' => 'http://www.symfony.com'));
        $dropdown->addChild('bootstrap', array('uri' => 'http://twitter.github.com/bootstrap/'));
        $dropdown->addChild('node.js', array('uri' => 'http://nodejs.org/'));
        $dropdown->addChild('less', array('uri' => 'http://lesscss.org/'));

        //adding a nice divider
        $this->addDivider($dropdown);
        $dropdown->addChild('google', array('uri' => 'http://www.google.com/'));
        $dropdown->addChild('node.js', array('uri' => 'http://nodejs.org/'));

        //adding a nice divider
        $this->addDivider($dropdown);
        $dropdown->addChild('Mohrenweiser & Partner', array('uri' => 'http://www.mohrenweiserpartner.de'));

        // ... add more children
        return $menu;
    }

    public function createNavbarsSubnavMenu(Request $request)
    {
        $menu = $this->createSubnavbarMenuItem();
        $menu->addChild('Top', array('uri' => '#top'));
        $menu->addChild('Navbars', array('uri' => '#navbars'));
        $menu->addChild('Template', array('uri' => '#template'));
        $menu->addChild('Menus', array('uri' => '#menus'));
        // ... add more children
        return $menu;
    }

    public function createComponentsSubnavMenu(Request $request)
    {
        $menu = $this->createSubnavbarMenuItem();
        $menu->addChild('Top', array('uri' => '#top'));
        $menu->addChild('Flashs', array('uri' => '#flashs'));
        $menu->addChild('Session Flashs', array('uri' => '#session-flashes'));
        $menu->addChild('Labels & Badges', array('uri' => '#labels-badges'));
        // ... add more children
        return $menu;
    }
}
