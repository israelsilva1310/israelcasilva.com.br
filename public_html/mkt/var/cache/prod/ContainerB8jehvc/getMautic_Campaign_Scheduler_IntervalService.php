<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.scheduler.interval' shared service.

return $this->services['mautic.campaign.scheduler.interval'] = new \Mautic\CampaignBundle\Executioner\Scheduler\Mode\Interval(${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'});