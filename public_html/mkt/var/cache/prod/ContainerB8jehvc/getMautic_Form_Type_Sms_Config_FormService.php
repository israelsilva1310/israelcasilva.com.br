<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.sms.config.form' shared service.

return $this->services['mautic.form.type.sms.config.form'] = new \Mautic\SmsBundle\Form\Type\ConfigType(${($_ = isset($this->services['mautic.sms.transport_chain']) ? $this->services['mautic.sms.transport_chain'] : $this->load('getMautic_Sms_TransportChainService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
