<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.page.subscriber.determine_winner' shared service.

return $this->services['mautic.page.subscriber.determine_winner'] = new \Mautic\PageBundle\EventListener\DetermineWinnerSubscriber(${($_ = isset($this->services['mautic.page.repository.hit']) ? $this->services['mautic.page.repository.hit'] : $this->load('getMautic_Page_Repository_HitService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
