<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.executioner.action' shared service.

return $this->services['mautic.campaign.executioner.action'] = new \Mautic\CampaignBundle\Executioner\Event\ActionExecutioner(${($_ = isset($this->services['mautic.campaign.dispatcher.action']) ? $this->services['mautic.campaign.dispatcher.action'] : $this->load('getMautic_Campaign_Dispatcher_ActionService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.event_logger']) ? $this->services['mautic.campaign.event_logger'] : $this->load('getMautic_Campaign_EventLoggerService.php')) && false ?: '_'});