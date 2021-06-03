<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.action.jump_to_event.subscriber' shared service.

return $this->services['mautic.campaign.action.jump_to_event.subscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignActionJumpToEventSubscriber(${($_ = isset($this->services['mautic.campaign.repository.event']) ? $this->services['mautic.campaign.repository.event'] : $this->load('getMautic_Campaign_Repository_EventService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.event_executioner']) ? $this->services['mautic.campaign.event_executioner'] : $this->load('getMautic_Campaign_EventExecutionerService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.repository.lead']) ? $this->services['mautic.campaign.repository.lead'] : $this->load('getMautic_Campaign_Repository_LeadService.php')) && false ?: '_'});
