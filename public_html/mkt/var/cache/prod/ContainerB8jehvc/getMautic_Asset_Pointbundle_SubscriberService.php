<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.asset.pointbundle.subscriber' shared service.

return $this->services['mautic.asset.pointbundle.subscriber'] = new \Mautic\AssetBundle\EventListener\PointSubscriber(${($_ = isset($this->services['mautic.point.model.point']) ? $this->services['mautic.point.model.point'] : $this->load('getMautic_Point_Model_PointService.php')) && false ?: '_'});
