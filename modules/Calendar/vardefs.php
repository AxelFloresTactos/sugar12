<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$dictionary['Calendar'] = [
    'table' => 'calendar',
    'audited' => false,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => [
        'subject' => [
            'required' => false,
            'name' => 'subject',
            'vname' => 'LBL_SUBJECT',
            'type' => 'field-enum',
            'dbType' => 'varchar',
            'no_default' => false,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'pii' => false,
            'default' => '',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => [],
            'field_types_allowed' => [
                'varchar',
                'text',
            ],
        ],
        'calendar_module' => [
            'required' => true,
            'name' => 'calendar_module',
            'vname' => 'LBL_CALENDAR_MODULE',
            'type' => 'module-enum',
            'dbType' => 'varchar',
            'len' => 100,
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'options' => [],
            'duplicate_on_record_copy' => 'always',
        ],
        'event_start' => [
            'required' => true,
            'name' => 'event_start',
            'vname' => 'LBL_EVENT_START',
            'type' => 'field-enum',
            'dbType' => 'varchar',
            'no_default' => false,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'pii' => false,
            'default' => '',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => [],
            'field_types_allowed' => [
                'date',
                'datetime',
            ],
        ],
        'event_end' => [
            'required' => false,
            'name' => 'event_end',
            'vname' => 'LBL_EVENT_END',
            'type' => 'field-enum',
            'dbType' => 'varchar',
            'no_default' => false,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'pii' => false,
            'default' => '',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => [],
            'dependency' => 'and(equal($duration_minutes,""), equal($duration_hours,""), equal($duration_days,""))',
            'audited' => false,
            'field_types_allowed' => [
                'date',
                'datetime',
            ],
        ],
        'duration_minutes' => [
            'required' => false,
            'name' => 'duration_minutes',
            'vname' => 'LBL_DURATION_MINUTES',
            'type' => 'field-enum',
            'dbType' => 'varchar',
            'no_default' => false,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'pii' => false,
            'default' => '',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => [],
            'dependency' => 'equal($event_end,"")',
            'field_types_allowed' => [
                'int',
            ],
        ],
        'duration_hours' => [
            'required' => false,
            'name' => 'duration_hours',
            'vname' => 'LBL_DURATION_HOURS',
            'type' => 'field-enum',
            'dbType' => 'varchar',
            'no_default' => false,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'pii' => false,
            'default' => '',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => [],
            'dependency' => 'equal($event_end,"")',
            'field_types_allowed' => [
                'int',
            ],
        ],
        'duration_days' => [
            'required' => false,
            'name' => 'duration_days',
            'vname' => 'LBL_DURATION_DAYS',
            'type' => 'field-enum',
            'dbType' => 'varchar',
            'no_default' => false,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'pii' => false,
            'default' => '',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => [],
            'dependency' => 'equal($event_end,"")',
            'field_types_allowed' => [
                'int',
            ],
        ],
        'calendar_type' => [
            'required' => false,
            'name' => 'calendar_type',
            'vname' => 'LBL_CALENDAR_TYPE',
            'type' => 'multienum',
            'no_default' => true,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'pii' => false,
            'default' => 'main',
            'calculated' => false,
            'size' => '20',
            'options' => 'calendar_type_list',
            'isMultiSelect' => true,
            'audited' => false,
        ],
        'color' => [
            'name' => 'color',
            'vname' => 'LBL_COLOR',
            'type' => 'colorpicker',
            'dbType' => 'varchar',
            'audited' => false,
        ],
        'dblclick_event' => [
            'required' => false,
            'name' => 'dblclick_event',
            'vname' => 'LBL_DBLCLICK_EVENT',
            'type' => 'field-enum',
            'dbType' => 'varchar',
            'no_default' => false,
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'pii' => false,
            'default' => '',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => [],
        ],
        'allow_create' => [
            'name' => 'allow_create',
            'vname' => 'LBL_ALLOW_CREATE',
            'type' => 'bool',
            'default' => false,
            'audited' => false,
        ],
        'allow_update' => [
            'name' => 'allow_update',
            'vname' => 'LBL_ALLOW_UPDATE',
            'type' => 'bool',
            'default' => false,
            'audited' => false,
        ],
        'allow_delete' => [
            'name' => 'allow_delete',
            'vname' => 'LBL_ALLOW_DELETE',
            'type' => 'bool',
            'default' => false,
            'audited' => false,
        ],
        'event_tooltip_template' => [
            'name' => 'event_tooltip_template',
            'vname' => 'LBL_TOOLTIP_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'day_event_template' => [
            'name' => 'day_event_template',
            'vname' => 'LBL_DAY_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'week_event_template' => [
            'name' => 'week_event_template',
            'vname' => 'LBL_WEEK_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'month_event_template' => [
            'name' => 'month_event_template',
            'vname' => 'LBL_MONTH_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'agenda_event_template' => [
            'name' => 'agenda_event_template',
            'vname' => 'LBL_AGENDA_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'timeline_event_template' => [
            'name' => 'timeline_event_template',
            'vname' => 'LBL_TIMELINE_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'schedulermonth_event_template' => [
            'name' => 'schedulermonth_event_template',
            'vname' => 'LBL_SCHEDULER_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'ical_event_template' => [
            'name' => 'ical_event_template',
            'vname' => 'LBL_ICAL_EVENT_TEMPLATE',
            'type' => 'htmleditable_tinymce',
            'dbType' => 'varchar',
            'rows' => 6,
            'cols' => 80,
            'audited' => false,
        ],
        'calendar_filter' => [
            'name' => 'calendar_filter',
            'vname' => 'LBL_CALENDAR_FILTER',
            'type' => 'filter',
            'dbType' => 'text',
            'audited' => false,
            'moduleField' => 'calendar_module',
        ],
    ],
    'relationships' => [],
    'optimistic_locking' => true,
    'unified_search' => true,
];

VardefManager::createVardef('Calendar', 'Calendar', ['basic', 'team_security', 'assignable']);