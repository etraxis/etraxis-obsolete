<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2004-2011  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * Localization
 *
 * This module contains prompts translated in English.
 *
 * @package Engine
 * @subpackage Localization
 * @author Artem Rodygin
 */

$resource_english = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'All fields marked as required should be filled in.',
    'Default value should be in range from %1 to %2.',
    'Account is disabled.',
    'Account is locked out.',
    'Invalid user name.',
    'Account with entered user name already exists.',
    'Invalid email.',
    'Passwords do not match.',
    'Password should be at least %1 characters length.',
    'Project with entered name already exists.',
    /* 210 */
    'Group with entered name already exists.',
    'Template with entered name or prefix already exists.',
    'State with entered name or abbreviation already exists.',
    'Field with entered name already exists.',
    'Invalid integer value.',
    'Integer value should be in range from %1 to %2.',
    'Value of "%1" should be in range from %2 to %3.',
    'Maximum value should be greater then minimum one.',
    'The uploaded file exceeds the "upload_max_filesize" directive in "php.ini".',
    'The size of uploaded file cannot be greater than %1 Kbytes.',
    /* 220 */
    'The uploaded file was only partially uploaded.',
    'No file was uploaded.',
    'Missing a temporary folder.',
    'Attachment with entered name already exists.',
    'Record not found.',
    'Filter with entered name already exists.',
    'Invalid date value.',
    'Date value should be in range from %1 to %2.',
    'Invalid time value.',
    'Time value should be in range from %1 to %2.',
    /* 230 */
    'Subscription with entered name already exists.',
    'Reminder with entered name already exists.',
    'Reminder is successfully sent.',
    'View with entered name already exists.',
    'Please specify short description of this record.',
    'Failed to write file to disk.',
    'File upload stopped by extension.',
    'JavaScript must be enabled.',
    'This is autogenerated message, please do not reply on it.',
    'Invalid decimal value.',
    /* 240 */
    'Decimal value should be in range from %1 to %2.',
    'View cannot have more than %1 columns.',
    'Value of "%1" fails format check.',
    'User is not authorized.',
    'Unknown user name or bad password.',
    'Unknown error.',
    'XML parser error.',
    'Your changes were successfully saved.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Are you sure you want delete all selected views?',
    'Are you sure you want delete this account?',
    'Are you sure you want delete this project?',
    'Are you sure you want delete this group?',
    'Are you sure you want delete this template?',
    'Are you sure you want delete this state?',
    'Are you sure you want delete this field?',
    'Are you sure you want to change the state of this record?',
    'Are you sure you want resume this record?',
    'Are you sure you want assign this record?',
    /* 310 */
    'Are you sure you want delete all selected filters?',
    'Are you sure you want delete all selected subscriptions?',
    'Are you sure you want send this reminder?',
    'Are you sure you want delete this reminder?',
    'Are you sure you want exit?',
    'Are you sure you want delete this record?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'English',
    'Log in',
    'OK',
    'Cancel',
    'Save',
    'Back',
    'Next',
    'Create',
    'Modify',
    'Delete',
    /* 1010 */
    'Records',
    'Accounts',
    'Projects',
    'Change password',
    'Fields of state "%1"',
    'none',
    'Total:',
    'Theme',
    'Account information',
    'User name',
    /* 1020 */
    'Full name',
    'Email',
    'Default',
    'administrator',
    'user',
    'Description',
    'Password',
    'Confirmation',
    'disabled',
    'locked',
    /* 1030 */
    'New account',
    'Account "%1"',
    'Project information',
    'Project name',
    'Start time',
    'suspended',
    'New project',
    'Project "%1"',
    'Groups',
    'Group information',
    /* 1040 */
    'Group name',
    'New group',
    'Group "%1"',
    'Membership',
    'Others',
    'Members',
    'Templates',
    'Template information',
    'Template name',
    'Prefix',
    /* 1050 */
    'New template',
    'Template "%1"',
    'States',
    'State information',
    'State name',
    'Abbreviation',
    'State type',
    'initial',
    'intermediate',
    'final',
    /* 1060 */
    'Responsible',
    'keep unchanged',
    'assign',
    'remove',
    'New state',
    'State "%1"',
    'Create intermediate',
    'Create final',
    'Transitions',
    'Permissions',
    /* 1070 */
    'Make initial',
    'Allowed',
    'Fields',
    'Field information',
    'Order',
    'Field name',
    'Field type',
    'number',
    'string',
    'multilined text',
    /* 1080 */
    'Required',
    'yes',
    'no',
    'Min.value',
    'Max.value',
    'Max.length',
    'required',
    'New field (step %1/%2)',
    'Field "%1"',
    'read-only',
    /* 1090 */
    'read and write',
    'General information',
    'ID',
    'Project',
    'Template',
    'State',
    'Age',
    'New record',
    'Record "%1"',
    'My records',
    /* 1100 */
    'History',
    'Postpone',
    'Resume',
    'Assign',
    'Change state',
    'Timestamp',
    'Originator',
    'Record is created in state "%1".',
    'Record is assigned to %1.',
    'Record is modified.',
    /* 1110 */
    'State is changed to "%1".',
    'Record is postponed till %1.',
    'Record is resumed.',
    'File "%1" is attached.',
    'File "%1" is removed.',
    'permission to create records',
    'permission to modify records',
    'permission to postpone records',
    'permission to resume records',
    'permission to reassign assigned records',
    /* 1120 */
    'permission to change state of assigned records',
    'permission to attach files',
    'permission to remove files',
    'Language',
    'Add comment',
    'Comment is added.',
    'permission to add comments',
    'Comment',
    'Attach file',
    'Remove file',
    /* 1130 */
    'Attachment',
    'Attachment name',
    'Attachment file',
    'Attachments',
    'No fields.',
    'Critical age',
    'Frozen time',
    'Changes',
    'Old value',
    'New value',
    /* 1140 */
    'check box',
    'record',
    'list',
    'List items',
    '%1 Kb',
    'Filters',
    'Filter name',
    'All projects',
    'All templates',
    'All states',
    /* 1150 */
    'View record',
    'Show only created by ...',
    'Show only assigned to ...',
    'show unclosed only',
    'Subject',
    'Search',
    'Search parameters',
    'Search results',
    'Text to be searched',
    'search in fields',
    /* 1160 */
    'search in comments',
    'Status',
    'active',
    'Subscriptions',
    'notify when record is created',
    'notify when record is assigned',
    'notify when record is modified',
    'notify when state is changed',
    'notify when record is postponed',
    'notify when record is resumed',
    /* 1170 */
    'notify when comment is added',
    'notify when file is attached',
    'notify when file is removed',
    'required',
    'Postponed',
    'Due date',
    'Default value',
    'on',
    'off',
    'Metrics',
    /* 1180 */
    'Opened records',
    'Creation vs Closure',
    'week',
    'number',
    'Clone',
    'Record is cloned from "%1".',
    'Log out',
    'notify when record is cloned',
    'Settings',
    'Rows per page',
    /* 1190 */
    'Bookmarks per page',
    'Lock',
    'Unlock',
    'Group type',
    'global',
    'local',
    'Configuration',
    'Line',
    'Web root path',
    'Security',
    /* 1200 */
    'Minimum password length',
    'Maximum number of login attempts',
    'Locking timeout (mins)',
    'Database',
    'Database type',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Database server',
    'Database name',
    /* 1210 */
    'Database user',
    'Active Directory',
    'LDAP server',
    'Port number',
    'Search account',
    'Base DN',
    'Administrators',
    'Email notifications',
    'Maximum size',
    'Debug',
    /* 1220 */
    'Debug mode',
    'enabled (without private data)',
    'enabled (all data)',
    'Debug logs',
    'Enabled',
    'Disabled',
    'decimal',
    'permission to view records only',
    'Select all',
    'Author',
    /* 1230 */
    'date',
    'duration',
    'show postponed only',
    'Subscription name',
    'Events',
    'Version %1',
    'role',
    'Subscribe',
    'Unsubscribe',
    'Reminders',
    /* 1240 */
    'Reminder name',
    'Reminder subject',
    'Reminder recipients',
    'New reminder',
    'Reminder "%1"',
    'permission to send reminders',
    'Send',
    'New filter',
    'Filter "%1"',
    'New subscription',
    /* 1250 */
    'Subscription "%1"',
    'Number of lines in multilined fields',
    'You can insert link to another record by specifying "rec#" and its number (e.g. "rec#305").',
    'Show only moved to states ...',
    'Share with ...',
    'Export',
    'Subscribe others...',
    'Subscribed',
    '%1 has subscribed you to the record.',
    '%1 has unsubscribed.',
    /* 1260 */
    'Carbon copy',
    'Storage',
    'LDAP attribute',
    'Views',
    'Close',
    'View name',
    'New view',
    'View "%1"',
    'No view',
    'Set',
    /* 1270 */
    'Columns',
    'Warning',
    'Information',
    'Error',
    'Question',
    'Alignment',
    'left',
    'center',
    'right',
    'Service will be unavailable since %1 till %2 (%3)',
    /* 1280 */
    'All assigned to me',
    'All created by me',
    'Show in emails',
    'Please wait...',
    'Dump',
    'Subrecords',
    'Create subrecord',
    'Attach subrecord',
    'Remove subrecord',
    'Subrecord ID',
    /* 1290 */
    'Subrecord "%1" is added.',
    'Subrecord "%1" is removed.',
    'permission to add subrecords',
    'permission to remove subrecords',
    'notify when subrecord is added',
    'notify when subrecord is removed',
    'created records',
    'closed records',
    'Confidential',
    'Add confidential comment',
    /* 1300 */
    'permission to add/read confidential comments',
    'Confidential comment is added.',
    'Parent ID',
    'dependency',
    NULL,
    'Add separator',
    'CSV delimiter',
    'CSV encoding',
    'CSV line endings',
    NULL,
    /* 1310 */
    'Enable filters',
    'Disable filters',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    'Expand all',
    /* 1320 */
    'Collapse all',
    NULL,
    'L/E',
    'PCRE to check field values',
    'Search PCRE to transform field values',
    'Replace PCRE to transform field values',
    'Next state by default',
    'Postpone status',
    'show all',
    'show active only',
    /* 1330 */
    'Event',
    NULL,
    'Guest access',
    'None.',
    'Global groups',
    'Guest',
    'Import',
    'permission to delete records',
    NULL,
    'Default language',
    /* 1340 */
    'Password expiration (days)',
    'Session expiration (mins)',
    'LDAP enumeration',
    'PostgreSQL',
    'list of indexes',
    'list of values',
    'Created',
    'Mark as read',
    'Registered',
    'TLS',
    /* 1350 */
    'Compression',
    'L/S',
    'Comments',
    'Size',
    'Appearance',
    'CSV',
    'Enable',
    'Disable',
    'Preview',
    'Owner',
    /* 1360 */
    'Anyone.',
    'Mark as unread',
    'Parent records',
);

?>
