<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.validator.multiple_emails_valid_validator' shared service.

return $this->services['mautic.email.validator.multiple_emails_valid_validator'] = new \Mautic\EmailBundle\Validator\MultipleEmailsValidValidator(${($_ = isset($this->services['mautic.validator.email']) ? $this->services['mautic.validator.email'] : $this->getMautic_Validator_EmailService()) && false ?: '_'});
