<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.kernel.listener.command_exception' shared service.

return $this->services['mautic.kernel.listener.command_exception'] = new \Mautic\CoreBundle\EventListener\ConsoleExceptionListener(${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'});
