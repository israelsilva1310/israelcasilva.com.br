<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.formbundle.subscriber' shared service.

return $this->services['mautic.email.formbundle.subscriber'] = new \Mautic\EmailBundle\EventListener\FormSubscriber(${($_ = isset($this->services['mautic.email.model.email']) ? $this->services['mautic.email.model.email'] : $this->load('getMautic_Email_Model_EmailService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.tracker.contact']) ? $this->services['mautic.tracker.contact'] : $this->getMautic_Tracker_ContactService()) && false ?: '_'});