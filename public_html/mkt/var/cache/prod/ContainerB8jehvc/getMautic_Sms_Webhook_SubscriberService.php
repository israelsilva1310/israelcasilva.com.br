<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.sms.webhook.subscriber' shared service.

return $this->services['mautic.sms.webhook.subscriber'] = new \Mautic\SmsBundle\EventListener\WebhookSubscriber(${($_ = isset($this->services['mautic.webhook.model.webhook']) ? $this->services['mautic.webhook.model.webhook'] : $this->load('getMautic_Webhook_Model_WebhookService.php')) && false ?: '_'});
