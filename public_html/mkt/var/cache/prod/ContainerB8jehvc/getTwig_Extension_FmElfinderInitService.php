<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.extension.fm_elfinder_init' shared service.

$a = ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->load('getTwigService.php')) && false ?: '_'};

if (isset($this->services['twig.extension.fm_elfinder_init'])) {
    return $this->services['twig.extension.fm_elfinder_init'];
}

return $this->services['twig.extension.fm_elfinder_init'] = new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($a);
