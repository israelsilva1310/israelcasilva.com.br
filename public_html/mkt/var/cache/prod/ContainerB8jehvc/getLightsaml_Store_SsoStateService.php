<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.store.sso_state' shared service.

return $this->services['lightsaml.store.sso_state'] = new \LightSaml\Store\Sso\SsoStateSessionStore(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, 'samlsso');
