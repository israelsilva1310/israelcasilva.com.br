<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.internal.object_provider' shared service.

return $this->services['mautic.integrations.internal.object_provider'] = new \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\ObjectProvider(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
