<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.server' shared service.

return $this->services['fos_oauth_server.server'] = new \OAuth2\OAuth2(${($_ = isset($this->services['fos_oauth_server.storage']) ? $this->services['fos_oauth_server.storage'] : $this->load('getFosOauthServer_StorageService.php')) && false ?: '_'}, $this->getParameter('fos_oauth_server.server.options'));