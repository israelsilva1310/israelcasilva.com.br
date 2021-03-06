<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.momentum.subscriber' shared service.

return $this->services['mautic.email.momentum.subscriber'] = new \Mautic\EmailBundle\EventListener\MomentumSubscriber(${($_ = isset($this->services['mautic.transport.momentum.callback']) ? $this->services['mautic.transport.momentum.callback'] : $this->load('getMautic_Transport_Momentum_CallbackService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.queue.service']) ? $this->services['mautic.queue.service'] : $this->getMautic_Queue_ServiceService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.email.helper.request.storage']) ? $this->services['mautic.email.helper.request.storage'] : $this->load('getMautic_Email_Helper_Request_StorageService.php')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'});
