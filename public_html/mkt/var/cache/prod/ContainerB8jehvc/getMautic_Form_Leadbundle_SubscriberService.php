<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.leadbundle.subscriber' shared service.

return $this->services['mautic.form.leadbundle.subscriber'] = new \Mautic\FormBundle\EventListener\LeadSubscriber(${($_ = isset($this->services['mautic.form.model.form']) ? $this->services['mautic.form.model.form'] : $this->getMautic_Form_Model_FormService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.page.model.page']) ? $this->services['mautic.page.model.page'] : $this->getMautic_Page_Model_PageService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.form.repository.submission']) ? $this->services['mautic.form.repository.submission'] : $this->load('getMautic_Form_Repository_SubmissionService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
