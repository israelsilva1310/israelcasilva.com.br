<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.timeline_events.segment.subscriber' shared service.

return $this->services['mautic.lead.timeline_events.segment.subscriber'] = new \Mautic\LeadBundle\EventListener\TimelineEventLogSegmentSubscriber(${($_ = isset($this->services['mautic.lead.repository.lead_event_log']) ? $this->services['mautic.lead.repository.lead_event_log'] : $this->load('getMautic_Lead_Repository_LeadEventLogService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.user']) ? $this->services['mautic.helper.user'] : $this->getMautic_Helper_UserService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
