<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.userconfig' shared service.

return $this->services['mautic.form.type.userconfig'] = new \Mautic\UserBundle\Form\Type\ConfigType(${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
