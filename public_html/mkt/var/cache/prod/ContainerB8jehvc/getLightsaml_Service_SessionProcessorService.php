<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.service.session_processor' shared service.

return $this->services['lightsaml.service.session_processor'] = new \LightSaml\Resolver\Session\SessionProcessor(${($_ = isset($this->services['lightsaml.store.sso_state']) ? $this->services['lightsaml.store.sso_state'] : $this->load('getLightsaml_Store_SsoStateService.php')) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.system.time_provider']) ? $this->services['lightsaml.system.time_provider'] : ($this->services['lightsaml.system.time_provider'] = new \LightSaml\Provider\TimeProvider\SystemTimeProvider())) && false ?: '_'});
