<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.helper.stat' shared service.

return $this->services['mautic.email.helper.stat'] = new \Mautic\EmailBundle\Stat\StatHelper(${($_ = isset($this->services['mautic.email.repository.stat']) ? $this->services['mautic.email.repository.stat'] : $this->load('getMautic_Email_Repository_StatService.php')) && false ?: '_'});
