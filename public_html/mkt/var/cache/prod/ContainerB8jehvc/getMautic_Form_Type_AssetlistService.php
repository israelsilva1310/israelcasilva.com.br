<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.assetlist' shared service.

return $this->services['mautic.form.type.assetlist'] = new \Mautic\AssetBundle\Form\Type\AssetListType(${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.asset.model.asset']) ? $this->services['mautic.asset.model.asset'] : $this->getMautic_Asset_Model_AssetService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.user']) ? $this->services['mautic.helper.user'] : $this->getMautic_Helper_UserService()) && false ?: '_'});