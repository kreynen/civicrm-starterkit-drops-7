CiviCRM Starterkit for Pantheon
===============================

The [CiviCRM Starterkit](http://civicrmstarterkit.org/) project is not intended to be installed on its own. Instead, you can quickly get started with CiviCRM by [spinning it up on Pantheon](https://dashboard.pantheon.io/products/civicrm_starterkit/spinup).

Updates
-------

This Pantheon upstream attempts to keep up to date with Pantheon's core Drupal 7 repository, with basic Drupal module security updates, and with updates to CiviCRM core long-term support version.

Versions
--------

We're moving to CiviCRM 4.7!

If you require support in upgrading from CiviCRM 4.6 to 4.7 please contact us at [CiviCRM Starterkit](http://civicrmstarterkit.org/contact).

We are upgrading CiviCRM at this time for four good reasons. First, 4.6 doesn't have much life left in it. It's status as long-term support was supposed to end at the beginning of January 2017 but got informally extended for an undetermined length of time. Second, the LTS is being maintained by volunteers so it doesn't get the same level of support as 4.7. Third, there were a lot of improvements in 4.7 that we can't take advantage of if we stay on 4.6. Lastly, CiviCRM developers moved to a new process that means that 4.7 will be stable for quite some time with a greater focus on bug fixing. All major feature improvements are to be rolled out in CiviCRM extensions first before being merged into core at some point.

Previously, the CiviCRM Starterkit had taken the policy of staying on the LTS, but with the greater stability of 4.7 there aren't many good reasons to stay on 4.6 for much longer.

Upgrading to 4.7
----------------

You will see the update in the Pantheon dashboard. Make sure to make a backup of your database if you don't already have a regular backup schedule.

Testing the upgrade is super important so if you have access to Multidev that would be the best option so that you don't stop other code updates while you're testing. If you don't have Multidev, test this thoroughly on dev with a clone of the live database.

If you have existing CiviCRM extensions you should probably disable them before attempting to upgrade. If the extension has updates so they'll work under 4.7 then in your environment you can switch to SFTP mode and then click the update from the CiviCRM extension page. This will update the code and run any database updates. You will then be able to commit this code to your site repository.

You can upgrade the database in two ways. The most robust way is by using terminus. Use `terminus drush mysite:env civicrm-upgrade-db` where "mysite" is your site name and "env" is dev, test, live or the name of the Multidev.

Required changes for 4.7
------------------------

There are a number of changes to the settings file so we've included a template at sites/default/default.settings.php with instructions on what to copy over if you've got an existing site. New sites will still have a settings file automatically created.

For upgrades:

1. Disable each extension at CiviCRM > Administration >
2. Make sure you backup using Pantheon's database backup tool first.
3. Merge the updates visible in Pantheon's admin interface.
4. Rename civicrm.settings.php to old.civicrm.settings.php and rename default.civicrm.settings.php to civicrm.settings.php.
5. In civicrm.settings.php replace each instance of a variable with double percentage signs. For instance, replace %%siteKey%% with CIVICRM_SITE_KEY and replace %%baseURL%% with CIVICRM_UF_BASEURL, by copying it over from the old.civicrm.settings.php file. Note that most of the settings are set to be generated automatically so there is just a minimal number of variables to edit manually to have a functioning site in Pantheon. The one exception is if you would also like to be able to work on the site on your own computer which requires you to add paths for each `else` statement: `if (isset($pantheon_conf)) {} else {` EDIT HERE `}`.
6. Commit your new civicrm.settings.php file and ftp or git push it to Pantheon.
7. Upgrade the database. Two options: go to `http://<your_drupal_home>/civicrm/upgrade?reset=1` or use `terminus drush site.env civicrm-upgrade-db`.

Alternative
-----------

If you would prefer not to use this Starterkit--whether you already have a Drupal 7 website on Pantheon, you prefer to get the upstream updates directly from Pantheon--then you can also use the [minimially patched version of CiviCRM](https://github.com/freeform/civicrm-drupal-pantheon). This alternative requires a bit more work but provides you more flexibility. The [wiki](https://github.com/freeform/civicrm-drupal-pantheon/wiki) provides some steps on how to install it.
