<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.menu.main' shared service.

return $this->services['mautic.menu.main'] = ${($_ = isset($this->services['mautic.menu.builder']) ? $this->services['mautic.menu.builder'] : $this->load('getMautic_Menu_BuilderService.php')) && false ?: '_'}->mainMenu();
