<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.command.fetch' shared service.

return $this->services['mautic.email.command.fetch'] = new \Mautic\EmailBundle\Command\ProcessFetchEmailCommand(${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'}, ${($_ = isset($this->services['mautic.email.fetcher']) ? $this->services['mautic.email.fetcher'] : $this->load('getMautic_Email_FetcherService.php')) && false ?: '_'});
