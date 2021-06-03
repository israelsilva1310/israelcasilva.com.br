<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.monitored.unsubscribe.replier' shared service.

return $this->services['mautic.email.monitored.unsubscribe.replier'] = new \Mautic\EmailBundle\EventListener\ProcessReplySubscriber(${($_ = isset($this->services['mautic.message.processor.replier']) ? $this->services['mautic.message.processor.replier'] : $this->load('getMautic_Message_Processor_ReplierService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.cache_storage']) ? $this->services['mautic.helper.cache_storage'] : $this->load('getMautic_Helper_CacheStorageService.php')) && false ?: '_'});