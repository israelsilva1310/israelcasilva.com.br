<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.validator.upload_field_validator' shared service.

return $this->services['mautic.form.validator.upload_field_validator'] = new \Mautic\FormBundle\Validator\UploadFieldValidator(${($_ = isset($this->services['mautic.core.validator.file_upload']) ? $this->services['mautic.core.validator.file_upload'] : $this->load('getMautic_Core_Validator_FileUploadService.php')) && false ?: '_'});
