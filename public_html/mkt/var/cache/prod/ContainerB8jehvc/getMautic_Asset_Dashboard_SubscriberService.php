<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.asset.dashboard.subscriber' shared service.

return $this->services['mautic.asset.dashboard.subscriber'] = new \Mautic\AssetBundle\EventListener\DashboardSubscriber(${($_ = isset($this->services['mautic.asset.model.asset']) ? $this->services['mautic.asset.model.asset'] : $this->getMautic_Asset_Model_AssetService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});