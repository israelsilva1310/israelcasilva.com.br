<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.core.command.transifex_pull' shared service.

return $this->services['mautic.core.command.transifex_pull'] = new \Mautic\CoreBundle\Command\PullTransifexCommand(${($_ = isset($this->services['transifex.factory']) ? $this->services['transifex.factory'] : $this->load('getTransifex_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'});
