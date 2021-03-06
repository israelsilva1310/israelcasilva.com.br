<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'container.env_var_processors_locator' shared service.

return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['nullable' => function () {
    return ${($_ = isset($this->services['mautic.di.env_processor.nullable']) ? $this->services['mautic.di.env_processor.nullable'] : ($this->services['mautic.di.env_processor.nullable'] = new \Mautic\CoreBundle\DependencyInjection\EnvProcessor\NullableProcessor())) && false ?: '_'};
}, 'intNullable' => function () {
    return ${($_ = isset($this->services['mautic.di.env_processor.int_nullable']) ? $this->services['mautic.di.env_processor.int_nullable'] : ($this->services['mautic.di.env_processor.int_nullable'] = new \Mautic\CoreBundle\DependencyInjection\EnvProcessor\IntNullableProcessor())) && false ?: '_'};
}]);
