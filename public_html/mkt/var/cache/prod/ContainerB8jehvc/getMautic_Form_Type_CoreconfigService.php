<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.coreconfig' shared service.

return $this->services['mautic.form.type.coreconfig'] = new \Mautic\CoreBundle\Form\Type\ConfigType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.language']) ? $this->services['mautic.helper.language'] : $this->load('getMautic_Helper_LanguageService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.ip_lookup.factory']) ? $this->services['mautic.ip_lookup.factory'] : $this->getMautic_IpLookup_FactoryService()) && false ?: '_'}, $this->parameters['mautic.ip_lookup_services'], ${($_ = isset($this->services['mautic.ip_lookup']) ? $this->services['mautic.ip_lookup'] : $this->getMautic_IpLookupService()) && false ?: '_'});
