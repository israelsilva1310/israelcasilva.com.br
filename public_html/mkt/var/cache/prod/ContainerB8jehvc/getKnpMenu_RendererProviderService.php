<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.renderer_provider' shared service.

return $this->services['knp_menu.renderer_provider'] = new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(['admin' => function () {
    return ${($_ = isset($this->services['mautic.menu_renderer.admin']) ? $this->services['mautic.menu_renderer.admin'] : $this->load('getMautic_MenuRenderer_AdminService.php')) && false ?: '_'};
}, 'extra' => function () {
    return ${($_ = isset($this->services['mautic.menu_renderer.extra']) ? $this->services['mautic.menu_renderer.extra'] : $this->load('getMautic_MenuRenderer_ExtraService.php')) && false ?: '_'};
}, 'list' => function () {
    return ${($_ = isset($this->services['knp_menu.renderer.list']) ? $this->services['knp_menu.renderer.list'] : $this->load('getKnpMenu_Renderer_ListService.php')) && false ?: '_'};
}, 'main' => function () {
    return ${($_ = isset($this->services['mautic.menu_renderer.main']) ? $this->services['mautic.menu_renderer.main'] : $this->load('getMautic_MenuRenderer_MainService.php')) && false ?: '_'};
}, 'mautic' => function () {
    return ${($_ = isset($this->services['mautic.menu_renderer']) ? $this->services['mautic.menu_renderer'] : $this->load('getMautic_MenuRendererService.php')) && false ?: '_'};
}, 'profile' => function () {
    return ${($_ = isset($this->services['mautic.menu_renderer.profile']) ? $this->services['mautic.menu_renderer.profile'] : $this->load('getMautic_MenuRenderer_ProfileService.php')) && false ?: '_'};
}]), 'mautic');
