<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.metadata_driver' shared service.

$a = new \Metadata\Driver\FileLocator(['Mautic\\AssetBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/AssetBundle/Entity'), 'Mautic\\CampaignBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/CampaignBundle/Entity'), 'Mautic\\CategoryBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/CategoryBundle/Entity'), 'Mautic\\ChannelBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/ChannelBundle/Entity'), 'Mautic\\CoreBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/CoreBundle/Entity'), 'Mautic\\DashboardBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/DashboardBundle/Entity'), 'Mautic\\DynamicContentBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/DynamicContentBundle/Entity'), 'Mautic\\EmailBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/EmailBundle/Entity'), 'Mautic\\FormBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/FormBundle/Entity'), 'Mautic\\LeadBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/LeadBundle/Entity'), 'Mautic\\NotificationBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/NotificationBundle/Entity'), 'Mautic\\PageBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/PageBundle/Entity'), 'Mautic\\PointBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/PointBundle/Entity'), 'Mautic\\ReportBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/ReportBundle/Entity'), 'Mautic\\SmsBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/SmsBundle/Entity'), 'Mautic\\StageBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/StageBundle/Entity'), 'Mautic\\UserBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/UserBundle/Entity'), 'Mautic\\WebhookBundle\\Entity' => ($this->targetDirs[3].'/app/bundles/WebhookBundle/Entity'), 'MauticPlugin\\MauticFocusBundle\\Entity' => ($this->targetDirs[3].'/plugins/MauticFocusBundle/Entity'), 'MauticPlugin\\MauticSocialBundle\\Entity' => ($this->targetDirs[3].'/plugins/MauticSocialBundle/Entity')]);
$b = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('', false));
$c = ${($_ = isset($this->services['jms_serializer.type_parser']) ? $this->services['jms_serializer.type_parser'] : ($this->services['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())) && false ?: '_'};

return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain([0 => ${($_ = isset($this->services['jms_serializer.metadata.api_metadata_driver']) ? $this->services['jms_serializer.metadata.api_metadata_driver'] : ($this->services['jms_serializer.metadata.api_metadata_driver'] = new \Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver())) && false ?: '_'}, 1 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a, $b, $c), 2 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a, $b, $c), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, $b, $c)]), ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
