<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.event_executioner' shared service.

return $this->services['mautic.campaign.event_executioner'] = new \Mautic\CampaignBundle\Executioner\EventExecutioner(${($_ = isset($this->services['mautic.campaign.event_collector']) ? $this->services['mautic.campaign.event_collector'] : $this->load('getMautic_Campaign_EventCollectorService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.event_logger']) ? $this->services['mautic.campaign.event_logger'] : $this->load('getMautic_Campaign_EventLoggerService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.executioner.action']) ? $this->services['mautic.campaign.executioner.action'] : $this->load('getMautic_Campaign_Executioner_ActionService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.executioner.condition']) ? $this->services['mautic.campaign.executioner.condition'] : $this->load('getMautic_Campaign_Executioner_ConditionService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.executioner.decision']) ? $this->services['mautic.campaign.executioner.decision'] : $this->load('getMautic_Campaign_Executioner_DecisionService.php')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.scheduler']) ? $this->services['mautic.campaign.scheduler'] : $this->load('getMautic_Campaign_SchedulerService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.helper.removed_contact_tracker']) ? $this->services['mautic.campaign.helper.removed_contact_tracker'] : ($this->services['mautic.campaign.helper.removed_contact_tracker'] = new \Mautic\CampaignBundle\Helper\RemovedContactTracker())) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.repository.lead']) ? $this->services['mautic.campaign.repository.lead'] : $this->load('getMautic_Campaign_Repository_LeadService.php')) && false ?: '_'});
