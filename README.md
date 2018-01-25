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

There are a number of changes to the settings file so we've included a template at `sites/default/default.civicrm.settings.php` with instructions on what to copy over if you've got an existing site. New sites will still have a settings file automatically created.

Steps for upgrading:

1. Disable each extension at `civicrm/admin/extensions?reset=1`.
2. Disable all CiviCRM integration modules (`admin/modules`), that is, modules that list CiviCRM as a dependency. The exception being Civitheme and CiviCRM itself.
3. Backup the database, files and code using Pantheon's backup tool first.
4. Merge the updates visible in Pantheon's admin interface.
5. Rename `civicrm.settings.php` to `old.civicrm.settings.php` and rename `default.civicrm.settings.php` to `civicrm.settings.php`.
6. In `civicrm.settings.php` replace each instance of a variable with double percentage signs. For instance, replace `%%siteKey%%` with `CIVICRM_SITE_KEY` and replace `%%baseURL%%` with `CIVICRM_UF_BASEURL`, by copying it over from the old.civicrm.settings.php file. Note that most of the settings are set to be generated automatically so there is just a minimal number of variables to edit manually to have a functioning site in Pantheon. The one exception is if you would also like to be able to work on the site on your own computer which requires you to add paths for each `else` statement: `if (isset($pantheon_conf)) {} else {` EDIT HERE `}`.
7. Commit your new `civicrm.settings.php` file and ftp or git push it to Pantheon.
8. Upgrade the database. Two options: go to `http://<your_drupal_home>/civicrm/upgrade?reset=1` or use `terminus drush site.env civicrm-upgrade-db` where "env" is dev, test, live or the name of the Multidev.
9. If you've got extensions switch to SFTP mode and go to `civicrm/admin/extensions?reset=1` to check and download any extension updates.
10. If there are extension database updates, make another backup of the database and click the update link in the Extension dashboard.
11. Commit any extension code updates and switch back to git mode.
12. Enable extensions and CiviCRM integration modules.
13. Verify Drupal role-based permissions which were added in recent releases. You can review and update these at `admin/people/permissions`.
14. If you were using Views integration prior to this upgrade, you will need to go to `admin/structure/views/settings/advanced` and press "Clear Views cache" for Views to capture changes in the CiviCRM Views integration code.
15. Clear CiviCRM caches by clicking "Cleanup Caches" at `civicrm/admin/setting/updateConfigBackend?reset=1`
16. Rebuild CiviCRM templates by first enabling debugging at `civicrm/admin/setting/debug?reset=1` and then pasting `&directoryCleanup=1` to the end of the URL so it looks like `civicrm/admin/setting/debug?reset=1&directoryCleanup=1` and hitting Enter. Once that's done loading disable debugging again if on live.

When you are ready to deploy the upgrade to live, put the live site into maintenance mode. You then have two options: one, you can copy the live database to dev or test and rerun the upgrade and then copy the database to live. Or two, rerun the relevant steps above on live (backup the database and files; disable extensions and CiviCRM integration modules; push the code update to live and run the database upgrade).

It is also useful to consult the [guide on upgrading CiviCRM on Drupal 7](https://wiki.civicrm.org/confluence/display/CRMDOC/Upgrading+CiviCRM+for+Drupal+7). On Pantheon the above steps overrule some of the steps in the latter guide but it is still useful to reference.

Finally, if you are stuck, confused or run into trouble please [contact us](http://civicrmstarterkit.org/contact) and we'll see how we can help.

Alternative approach to CiviCRM on Pantheon
-------------------------------------------

If you would prefer not to use this Starterkit--whether you already have a Drupal 7 website on Pantheon, you prefer to get the upstream updates directly from Pantheon--then you can also use the [minimially patched version of CiviCRM](https://github.com/freeform/civicrm-drupal-pantheon). This alternative requires a bit more work but provides you more flexibility. The [wiki](https://github.com/freeform/civicrm-drupal-pantheon/wiki) provides some steps on how to install it.
