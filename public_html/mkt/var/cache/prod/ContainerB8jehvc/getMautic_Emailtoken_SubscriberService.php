<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.emailtoken.subscriber' shared service.

return $this->services['mautic.emailtoken.subscriber'] = new \Mautic\EmailBundle\EventListener\TokenSubscriber(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.helper.primary_company']) ? $this->services['mautic.lead.helper.primary_company'] : $this->load('getMautic_Lead_Helper_PrimaryCompanyService.php')) && false ?: '_'});
