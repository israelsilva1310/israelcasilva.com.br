<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.report_widget' shared service.

return $this->services['mautic.form.type.report_widget'] = new \Mautic\ReportBundle\Form\Type\ReportWidgetType(${($_ = isset($this->services['mautic.report.model.report']) ? $this->services['mautic.report.model.report'] : $this->load('getMautic_Report_Model_ReportService.php')) && false ?: '_'});
