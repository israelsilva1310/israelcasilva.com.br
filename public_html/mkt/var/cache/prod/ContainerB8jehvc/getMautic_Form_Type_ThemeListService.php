<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.theme_list' shared service.

return $this->services['mautic.form.type.theme_list'] = new \Mautic\CoreBundle\Form\Type\ThemeListType(${($_ = isset($this->services['mautic.helper.theme']) ? $this->services['mautic.helper.theme'] : $this->getMautic_Helper_ThemeService()) && false ?: '_'});
