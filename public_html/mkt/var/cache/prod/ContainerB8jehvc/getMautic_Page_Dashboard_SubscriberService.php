<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.page.dashboard.subscriber' shared service.

return $this->services['mautic.page.dashboard.subscriber'] = new \Mautic\PageBundle\EventListener\DashboardSubscriber(${($_ = isset($this->services['mautic.page.model.page']) ? $this->services['mautic.page.model.page'] : $this->getMautic_Page_Model_PageService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
