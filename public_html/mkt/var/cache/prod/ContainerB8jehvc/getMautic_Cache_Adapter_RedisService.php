<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.cache.adapter.redis' shared service.

return $this->services['mautic.cache.adapter.redis'] = new \Mautic\CacheBundle\Cache\Adapter\RedisTagAwareAdapter($this->getEnv('json:resolve:MAUTIC_CACHE_ADAPTER_REDIS'), $this->getEnv('nullable:resolve:MAUTIC_CACHE_PREFIX'), $this->getEnv('intNullable:resolve:MAUTIC_CACHE_LIFETIME'));
