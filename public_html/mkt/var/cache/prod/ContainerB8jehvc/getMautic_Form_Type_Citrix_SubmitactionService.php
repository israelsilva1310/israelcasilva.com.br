<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.citrix.submitaction' shared service.

return $this->services['mautic.form.type.citrix.submitaction'] = new \MauticPlugin\MauticCitrixBundle\Form\Type\CitrixActionType(${($_ = isset($this->services['mautic.form.model.field']) ? $this->services['mautic.form.model.field'] : $this->getMautic_Form_Model_FieldService()) && false ?: '_'});
