<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.type.action.sendwebhook' shared service.

return $this->services['mautic.campaign.type.action.sendwebhook'] = new \Mautic\WebhookBundle\Form\Type\CampaignEventSendWebhookType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
