<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.preference.channels' shared service.

return $this->services['mautic.form.type.preference.channels'] = new \Mautic\LeadBundle\Form\Type\PreferenceChannelsType(${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'});