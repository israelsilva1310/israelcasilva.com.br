<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.slot.preferredchannel' shared service.

return $this->services['mautic.form.type.slot.preferredchannel'] = new \Mautic\CoreBundle\Form\Type\SlotPreferredChannelType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
