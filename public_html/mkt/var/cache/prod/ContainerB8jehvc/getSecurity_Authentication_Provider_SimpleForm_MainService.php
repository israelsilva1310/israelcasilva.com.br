<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.simple_form.main' shared service.

return $this->services['security.authentication.provider.simple_form.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\SimpleAuthenticationProvider(${($_ = isset($this->services['mautic.user.form_authenticator']) ? $this->services['mautic.user.form_authenticator'] : $this->load('getMautic_User_FormAuthenticatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.user.provider']) ? $this->services['mautic.user.provider'] : $this->getMautic_User_ProviderService()) && false ?: '_'}, 'main', ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : ($this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'});
