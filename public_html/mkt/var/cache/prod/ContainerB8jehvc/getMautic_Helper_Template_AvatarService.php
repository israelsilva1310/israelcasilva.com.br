<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.helper.template.avatar' shared service.

return $this->services['mautic.helper.template.avatar'] = new \Mautic\LeadBundle\Templating\Helper\AvatarHelper(${($_ = isset($this->services['templating.helper.assets']) ? $this->services['templating.helper.assets'] : $this->getTemplating_Helper_AssetsService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.paths']) ? $this->services['mautic.helper.paths'] : $this->getMautic_Helper_PathsService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.template.gravatar']) ? $this->services['mautic.helper.template.gravatar'] : $this->load('getMautic_Helper_Template_GravatarService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.template.default_avatar']) ? $this->services['mautic.helper.template.default_avatar'] : $this->load('getMautic_Helper_Template_DefaultAvatarService.php')) && false ?: '_'});
