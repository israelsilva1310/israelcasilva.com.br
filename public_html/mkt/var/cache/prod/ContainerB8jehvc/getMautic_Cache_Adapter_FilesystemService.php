<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.cache.adapter.filesystem' shared service.

return $this->services['mautic.cache.adapter.filesystem'] = new \Mautic\CacheBundle\Cache\Adapter\FilesystemTagAwareAdapter($this->getEnv('nullable:resolve:MAUTIC_CACHE_PREFIX'), $this->getEnv('intNullable:resolve:MAUTIC_CACHE_LIFETIME'));
