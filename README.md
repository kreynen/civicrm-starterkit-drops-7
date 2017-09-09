CiviCRM Starterkit for Pantheon
===============================

The [CiviCRM Starterkit](http://civicrmstarterkit.org/) project is not intended to be installed on its own. Instead, you can quickly get started with CiviCRM by [spinning it up on Pantheon](https://dashboard.pantheon.io/products/civicrm_starterkit/spinup). This Pantheon upstream keeps up to date with Pantheon's core Drupal 7 repository, with basic Drupal module security updates, and with updates to the core CiviCRM project.

We're moving to CiviCRM 4.7!
----------------------------

If you require support in upgrading from CiviCRM 4.6 to 4.7 please contact us at [CiviCRM Starterkit](http://civicrmstarterkit.org/contact).

We are upgrading CiviCRM at this time for four good reasons. First, 4.6 doesn't have much life left in it. It's status as long-term support was supposed to end at the [beginning of January 2017](https://civicrm.org/blog/eileen/the-lts-going-forwards) but got informally extended for an undetermined length of time. Second, the LTS is being maintained by volunteers so it doesn't get the same level of support as 4.7. Third, there were a lot of improvements in 4.7 that we can't take advantage of if we stay on 4.6. Lastly, CiviCRM developers moved to a new much more LTS-like release process for 4.7 that means that 4.7 will be stable for quite some time with a greater focus on bug fixing. Major changes will be 'grandfathered' in with opt-in extensions until such time that the old feature can be deprecated.

Though the upgrade may be challenging for some, we believe that it is worth the effort and will do our best to make the process easier.

Upgrading to 4.7
----------------

You will see the update in the Pantheon dashboard. Make sure to make a backup of your database if you don't already have a regular backup schedule.

Testing the upgrade is super important. We recommend testing it on the dev environment with a clone of the live database, or if you have access to Multidev, then a fresh environment and branch so that you don't bottleneck other code updates while you're testing this major upgrade.

Required changes for 4.7
------------------------

There are a number of changes to the settings file so we've included a template at sites/default/default.settings.php with instructions on what to copy over if you've got an existing site. New sites will still have a settings file automatically created.

Steps for upgrading:

1. Disable each extension at CiviCRM > Administration > System Settings > Extensions.
2. Backup the database, files and code using Pantheon's backup tool first.
3. Merge the updates visible in Pantheon's admin interface.
4. Rename `civicrm.settings.php` to `old.civicrm.settings.php` and rename `default.civicrm.settings.php` to `civicrm.settings.php`.
5. In `civicrm.settings.php` replace each instance of a variable with double percentage signs. For instance, replace `%%siteKey%%` with `CIVICRM_SITE_KEY` and replace `%%baseURL%%` with `CIVICRM_UF_BASEURL`, by copying it over from the old.civicrm.settings.php file. Note that most of the settings are set to be generated automatically so there is just a minimal number of variables to edit manually to have a functioning site in Pantheon. The one exception is if you would also like to be able to work on the site on your own computer which requires you to add paths for each `else` statement: `if (isset($pantheon_conf)) {} else {` EDIT HERE `}`.
6. Commit your new `civicrm.settings.php` file and ftp or git push it to Pantheon.
7. Upgrade the database. Two options: go to `http://<your_drupal_home>/civicrm/upgrade?reset=1` or use `terminus drush site.env civicrm-upgrade-db` where "env" is dev, test, live or the name of the Multidev.
8. If you've got extensions switch to SFTP mode and go to CiviCRM > Administration > System Settings > Extensions to check and download any extension updates.
9. If there are extension database updates, make another backup of the database and click the update link in the Extension dashboard.
10. Commit any extension code updates and switch back to git mode.
11. If you are stuck, confused or run into trouble please [contact us](http://civicrmstarterkit.org/contact) and we'll see how we can help.

Alternative approach to CiviCRM on Pantheon
-------------------------------------------

If you would prefer not to use this Starterkit--whether you already have a Drupal 7 website on Pantheon, you prefer to get the upstream updates directly from Pantheon--then you can also use the [minimially patched version of CiviCRM](https://github.com/freeform/civicrm-drupal-pantheon). This alternative requires a bit more work but provides you more flexibility. The [wiki](https://github.com/freeform/civicrm-drupal-pantheon/wiki) provides some steps on how to install it.
