<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'grapesjsbuilder.helper.filemanager' shared service.

return $this->services['grapesjsbuilder.helper.filemanager'] = new \MauticPlugin\GrapesJsBuilderBundle\Helper\FileManager(${($_ = isset($this->services['mautic.helper.file_uploader']) ? $this->services['mautic.helper.file_uploader'] : $this->getMautic_Helper_FileUploaderService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.paths']) ? $this->services['mautic.helper.paths'] : $this->getMautic_Helper_PathsService()) && false ?: '_'});
