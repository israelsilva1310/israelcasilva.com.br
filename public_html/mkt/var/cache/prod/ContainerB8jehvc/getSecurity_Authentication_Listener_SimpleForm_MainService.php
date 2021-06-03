<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.simple_form.main' shared service.

$a = ${($_ = isset($this->services['mautic.user.form_authenticator']) ? $this->services['mautic.user.form_authenticator'] : $this->load('getMautic_User_FormAuthenticatorService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['mautic.security.authentication_handler']) ? $this->services['mautic.security.authentication_handler'] : $this->load('getMautic_Security_AuthenticationHandlerService.php')) && false ?: '_'};
$c = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'};

$d = new \Symfony\Component\Security\Http\Authentication\SimpleAuthenticationHandler($a, new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($b, ['login_path' => '/s/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false], 'main'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler($b, ['login_path' => '/s/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']), $c);

$this->services['security.authentication.listener.simple_form.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\SimpleFormAuthenticationListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy.dev']) ? $this->services['security.authentication.session_strategy.dev'] : ($this->services['security.authentication.session_strategy.dev'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'}, 'main', $d, $d, ['authenticator' => 'mautic.user.form_authenticator', 'check_path' => '/s/login_check', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->getSecurity_Csrf_TokenManagerService()) && false ?: '_'}, $a);

$instance->setRememberMeServices(${($_ = isset($this->services['security.authentication.rememberme.services.simplehash.main']) ? $this->services['security.authentication.rememberme.services.simplehash.main'] : $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')) && false ?: '_'});

return $instance;