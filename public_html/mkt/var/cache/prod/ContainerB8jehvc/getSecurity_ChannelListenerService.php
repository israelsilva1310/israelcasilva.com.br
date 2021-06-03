<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.channel_listener' shared service.

return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(${($_ = isset($this->services['security.access_map']) ? $this->services['security.access_map'] : $this->load('getSecurity_AccessMapService.php')) && false ?: '_'}, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint($this->getEnv('MAUTIC_REQUEST_CONTEXT_HTTP_PORT'), $this->getEnv('MAUTIC_REQUEST_CONTEXT_HTTPS_PORT')), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'});
