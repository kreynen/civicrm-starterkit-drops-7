<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 * $Id$
 *
 */
/*
 * Settings metadata file
 */

return [
  'profile_double_optin' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'profile_double_optin',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '1',
    'add' => '4.1',
    'title' => ts('Enable Double Opt-in for Profile Group(s) field'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('When CiviMail is enabled, users who "subscribe" to a group from a profile Group(s) checkbox will receive a confirmation email. They must respond (opt-in) before they are added to the group.'),
    'help_text' => NULL,
  ],
  'track_civimail_replies' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'track_civimail_replies',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '0',
    'add' => '4.1',
    'title' => ts('Track replies using VERP in Reply-To header'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If checked, mailings will default to tracking replies using VERP-ed Reply-To.'),
    'help_text' => NULL,
    'validate_callback' => 'CRM_Core_BAO_Setting::validateBoolSetting',
  ],
  'civimail_workflow' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'civimail_workflow',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '0',
    'add' => '4.1',
    'title' => ts('Enable workflow support for CiviMail'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Drupal-only. Rules module must be enabled (beta feature - use with caution).'),
    'help_text' => NULL,
  ],
  'civimail_server_wide_lock' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'civimail_server_wide_lock',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '0',
    'add' => '4.1',
    'title' => ts('Enable global server wide lock for CiviMail'),
    'is_domain' => 1,
    'is_contact' => 0,
    'help_text' => NULL,
  ],
  'replyTo' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'replyTo',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 0,
    'add' => '4.6',
    'title' => ts('Enable Custom Reply-To'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Allow CiviMail users to send mailings with a custom Reply-To header.'),
    'help_text' => NULL,
  ],
  'mailing_backend' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'mailing_backend',
    'type' => 'Array',
    'html_type' => 'checkbox',
    'default' => ['outBound_option' => '3'],
    'add' => '4.1',
    'title' => ts('Mailing Backend'),
    'is_domain' => 1,
    'is_contact' => 0,
    'help_text' => NULL,
  ],
  'profile_add_to_group_double_optin' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'profile_add_to_group_double_optin',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => '0',
    'add' => '4.1',
    'title' => ts('Enable Double Opt-in for Profiles which use the "Add to Group" setting'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('When CiviMail is enabled and a profile uses the "Add to Group" setting, users who complete the profile form will receive a confirmation email. They must respond (opt-in) before they are added to the group.'),
    'help_text' => NULL,
  ],
  'disable_mandatory_tokens_check' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'disable_mandatory_tokens_check',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 0,
    'add' => '4.4',
    'title' => ts('Disable check for mandatory tokens'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Don\'t check for presence of mandatory tokens (domain address; unsubscribe/opt-out) before sending mailings. WARNING: Mandatory tokens are a safe-guard which facilitate compliance with the US CAN-SPAM Act. They should only be disabled if your organization adopts other mechanisms for compliance or if your organization is not subject to CAN-SPAM.'),
    'help_text' => NULL,
  ],
  'dedupe_email_default' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'dedupe_email_default',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 1,
    'add' => '4.5',
    'title' => ts('CiviMail dedupes e-mail addresses by default'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Set the "dedupe e-mail" option when sending a new mailing to "true" by default.'),
    'help_text' => NULL,
  ],
  'hash_mailing_url' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'hash_mailing_url',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 0,
    'add' => '4.5',
    'title' => ts('Hashed Mailing URL\'s'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If enabled, a randomized hash key will be used to reference the mailing URL in the mailing.viewUrl token, instead of the mailing ID.'),
    'help_text' => NULL,
  ],
  'civimail_multiple_bulk_emails' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'civimail_multiple_bulk_emails',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 0,
    'add' => '4.5',
    'title' => ts('Enable multiple bulk email address for a contact.'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('CiviMail will deliver a copy of the email to each bulk email listed for the contact. Enabling this setting will also change the options for the "Email on Hold" field in Advanced Search.'),
    'help_text' => NULL,
  ],
  'include_message_id' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'include_message_id',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => FALSE,
    'add' => '4.5',
    'title' => ts('Enable CiviMail to generate Message-ID header'),
    'is_domain' => 1,
    'is_contact' => 0,
    'help_text' => NULL,
  ],
  'mailerBatchLimit' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'mailerBatchLimit',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 4,
      'maxlength' => 8,
    ],
    'default' => 0,
    'add' => '4.7',
    'title' => ts('Mailer Batch Limit'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Throttle email delivery by setting the maximum number of emails sent during each CiviMail run (0 = unlimited).'),
    'help_text' => NULL,
  ],
  'mailerJobSize' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'mailerJobSize',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 4,
      'maxlength' => 8,
    ],
    'default' => 0,
    'add' => '4.7',
    'title' => ts('Mailer Job Size'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('If you want to utilize multi-threading enter the size you want your sub jobs to be split into. Recommended values are between 1,000 and 10,000. Use a lower value if your server has multiple cron jobs running simultaneously, but do not use values smaller than 1,000. Enter "0" to disable multi-threading and process mail as one single job - batch limits still apply.'),
    'help_text' => NULL,
  ],
  'mailerJobsMax' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'mailerJobsMax',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 4,
      'maxlength' => 8,
    ],
    'default' => 0,
    'add' => '4.7',
    'title' => ts('Mailer Cron Job Limit'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('The maximum number of mailer delivery jobs executing simultaneously (0 = allow as many processes to execute as started by cron).'),
    'help_text' => NULL,
  ],
  'mailThrottleTime' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'mailThrottleTime',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 4,
      'maxlength' => 8,
    ],
    'default' => 0,
    'add' => '4.7',
    'title' => ts('Mailer Throttle Time'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('The time to sleep in between each e-mail in micro seconds. Setting this above 0 allows you to control the rate at which e-mail messages are sent to the mail server, avoiding filling up the mail queue very quickly. Set to 0 to disable.'),
    'help_text' => NULL,
  ],
  'verpSeparator' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'verpSeparator',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 4,
      'maxlength' => 32,
    ],
    'default' => '.',
    'add' => '4.7',
    'title' => ts('VERP Separator'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Separator character used when CiviMail generates VERP (variable envelope return path) Mail-From addresses.'),
    'help_text' => NULL,
  ],
  'write_activity_record' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'write_activity_record',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'quick_form_type' => 'CheckBox',
    'default' => '1',
    'add' => '4.7',
    'title' => ts('Enable CiviMail to create activities on delivery'),
    'is_domain' => 1,
    'is_contact' => 0,
    'help_text' => NULL,
  ],
  'simple_mail_limit' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'simple_mail_limit',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'html_attributes' => [
      'size' => 4,
      'maxlength' => 8,
    ],
    'default' => 50,
    'title' => ts('Simple mail limit'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('The number of emails sendable via simple mail. Make sure you understand the implications for your spam reputation and legal requirements for bulk emails before editing. As there is some risk both to your spam reputation and the products if this is misused it is a hidden setting.'),
    'help_text' => 'CiviCRM forces users sending more than this number of mails to use CiviMails. CiviMails have additional precautions: not sending to contacts who do not want bulk mail, adding domain name and opt out links. You should familiarise yourself with the law relevant to you on bulk mailings if changing this setting. For the US https://en.wikipedia.org/wiki/CAN-SPAM_Act_of_2003 is a good place to start.',
  ],
  'auto_recipient_rebuild' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'auto_recipient_rebuild',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'quick_form_type' => 'CheckBox',
    'default' => '1',
    'title' => ts('Enable automatic CiviMail recipient count display'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Enable this setting to rebuild recipient list automatically during composing mail. Disable will allow you to rebuild recipient manually.'),
    'help_text' => ts('CiviMail automatically fetches recipient list and count whenever mailing groups are included or excluded while composing bulk mail. This phenomena may degrade performance for large sites, so disable this setting to build and fetch recipients for selected groups, manually.'),
  ],
  'allow_mail_from_logged_in_contact' => [
    'group_name' => 'Mailing Preferences',
    'group' => 'mailing',
    'name' => 'allow_mail_from_logged_in_contact',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 1,
    'title' => ts('Allow mail from logged in contact'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Allow sending email from the logged in contact\'s email address.'),
    'help_text' => 'CiviCRM allows you to send email from the domain from email addresses and the logged in contact id addresses by default. Disable this if you only want to allow the domain from addresses to be used.',
  ],
];
