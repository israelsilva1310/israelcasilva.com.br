<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.connectwise.campaignaction' shared service.

return $this->services['mautic.form.type.connectwise.campaignaction'] = new \MauticPlugin\MauticCrmBundle\Form\Type\IntegrationCampaignsTaskType(${($_ = isset($this->services['mautic.integration.connectwise']) ? $this->services['mautic.integration.connectwise'] : $this->load('getMautic_Integration_ConnectwiseService.php')) && false ?: '_'});
