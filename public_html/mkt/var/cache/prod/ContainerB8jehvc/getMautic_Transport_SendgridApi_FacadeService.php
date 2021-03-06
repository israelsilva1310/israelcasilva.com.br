<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.transport.sendgrid_api.facade' shared service.

return $this->services['mautic.transport.sendgrid_api.facade'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\SendGridApiFacade(${($_ = isset($this->services['mautic.transport.sendgrid_api.sendgrid_wrapper']) ? $this->services['mautic.transport.sendgrid_api.sendgrid_wrapper'] : $this->load('getMautic_Transport_SendgridApi_SendgridWrapperService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.transport.sendgrid_api.message']) ? $this->services['mautic.transport.sendgrid_api.message'] : $this->load('getMautic_Transport_SendgridApi_MessageService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.transport.sendgrid_api.response']) ? $this->services['mautic.transport.sendgrid_api.response'] : $this->load('getMautic_Transport_SendgridApi_ResponseService.php')) && false ?: '_'});
