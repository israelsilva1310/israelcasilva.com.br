<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.company.list.type.form' shared service.

return $this->services['mautic.company.list.type.form'] = new \Mautic\LeadBundle\Form\Type\CompanyListType(${($_ = isset($this->services['mautic.lead.model.company']) ? $this->services['mautic.lead.model.company'] : $this->getMautic_Lead_Model_CompanyService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.user']) ? $this->services['mautic.helper.user'] : $this->getMautic_Helper_UserService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'});
