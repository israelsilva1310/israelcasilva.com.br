<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.lead_columns' shared service.

return $this->services['mautic.form.type.lead_columns'] = new \Mautic\LeadBundle\Form\Type\ContactColumnsType(${($_ = isset($this->services['mautic.lead.columns.dictionary']) ? $this->services['mautic.lead.columns.dictionary'] : $this->load('getMautic_Lead_Columns_DictionaryService.php')) && false ?: '_'});
