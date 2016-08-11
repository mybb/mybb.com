---
layout: feature
section: features

title: Administration
meta_description: MyBB's Administrator Control Panel gives you complete control over your forum.

redirect_from:
- /features/03-administration/
---
MyBB contains an Administrator Control Panel (Admin CP) that’s been developed from the ground up to be easy to use while giving you complete control over your forum. Our extensive experience in the forum industry tells us one thing: poorly designed control panels lead to increasing frustration and difficulty maintaining a forum. We’ve spent the time planning the MyBB Admin Control Panel while developing it to ensure it’s easy to use and increases productivity.

<p class="tourScreenshot"><a href="{{ site.url }}/assets/images/tour/admin/dashboard.png" class="fancybox" title="MyBB's ACP dashboard gives you an overview of your community."><img alt="MyBB Admin Control Panel (Dashboard)" src="{{ site.url }}/assets/images/tour/admin/dashboard.png" width="500" height="270" /></a></p>

## Organized in to six logical sections
Generally you'll login to the control panel to do one of a few tasks relating to either configuration, user & group management or forum & content management. We've broken down the control panel so that you're only seeing what you need to, _when you need to_:

* Home - An overview of your forum (the dashboard)
* Configuration - Everything relating to the configuration of your forum (settings, bans, thread prefixes etc)
* Forums & Posts - Content management (forums, announcements, permissions etc)
* Users & Groups - User and group management (users, groups, promotions, mass-mails etc)
* Templates & Style - Design management (templates, themes etc)
* Tools & Maintenance - General system utilities (system health, logs, backups etc)

## Simple, intuitive forum permissions
For most forums, permissions are simple: guests can read, members can post, and administrators and moderators can moderate. For this reason, MyBB allows forums to inherit permissions from the user group and parent forums, or have custom permissions set. This makes it much easier to set up the permissions for all of your forums: the only permissions you need to set are those that differ from the norm.

In most forum softwares, as well as previous versions of MyBB, forum permissions are confusing: checkbox matrices and long lists of forums overwhelm even the most familiar administrator. In MyBB 1.6, we rebuilt forum permissions management from the ground up to make the already advanced permissions system extremely intuitive as well. It is now clear which permissions are inherited (and what those permissions are), and which permissions are custom to each group and forum.

<p class="tourScreenshot"><a href="{{ site.url }}/assets/images/tour/admin/forum-permissions-overview.png" class="fancybox" title="Forum permissions are a great way to control functionality of each usergroup."><img alt="MyBB Admin Control Panel (Forum Permissions)" src="{{ site.url }}/assets/images/tour/admin/forum-permissions-overview.png" width="500" height="300" /></a></p>

For each group, you can set a wide range of permissions. Many of these permissions were buried and confusing in the past; with MyBB 1.6, the permissions have been categorized, simplified, and brought to the forefront in order to make the already advanced system much more intuitive.

<p class="tourScreenshot"><a href="{{ site.url }}/assets/images/tour/admin/set-forum-permissions.png" class="fancybox" title="Further your control by limiting everything from posting attachments to voting in polls."><img alt="MyBB Admin Control Panel (Forum Permissions)" src="{{ site.url }}/assets/images/tour/admin/set-forum-permissions.png" width="400" height="180" /></a></p>

## Powerful user management with views and mass actions
Views allow for saved searches in user management. For example, you may like to create a view for users called "Forum Staff" that fetches forum administrators, super moderators and moderators. This search can be saved so it can be quickly recalled later. It can also be customized to only show the information that's important for you.

New in MyBB 1.6 is the ability to perform administrative actions on multiple users at once. This includes activating, banning, and deleting users; changing the users' user group; and pruning the users' posts. These mass actions are performed right from the regular users listing, just like inline thread moderation. In fact, we've called this feature "Inline User Moderation" in the Admin CP.

<p class="tourScreenshot"><a href="{{ site.url }}/assets/images/tour/admin/users.png" class="fancybox" title="Managing your users is a breeze with MyBB's simple user manager."><img alt="MyBB Admin Control Panel (User Management)" src="{{ site.url }}/assets/images/tour/admin/users.png" width="500" height="159" /></a></p>

## Advanced forum statistics
With version 1.4, MyBB began logging simple, daily counts of all of the threads, posts, and users on your forum, but there was no way to access the data short of loading up the database table. Since MyBB 1.6, all of this data is accessible in the Statistics section of the Admin CP, allowing you to set a time period to view, presenting three large graphs and a table showing the daily counts and change. With this feature, you can easily see both the growth of your forum over time and individual spikes of activity.</p>

<p class="tourScreenshot"><a href="{{ site.url }}/assets/images/tour/admin/forum-statistics.png" class="fancybox" title="MyBB makes it easy to understand your forum's growth."><img alt="MyBB Admin Control Panel (Statistics)" src="{{ site.url }}/assets/images/tour/admin/forum-statistics.png" width="500" height="300" /></a></p>

## Find plugins and themes without leaving the admin control panel
With MyBB you can see a listing of the most popular [plugins](/features/plugin-system/) and [themes](/features/themes/) directly in your Admin CP. From there, you can also search for plugins and themes or browse the entire selection available on [MyBB Extend](https://community.mybb.com/mods.php).

<!--<p class="tourScreenshot"><a href="{{ site.url }}/assets/images/tour/admin/browse-themes.png" class="fancybox" title="There are hundreds of free themes for you to use on your forum &mdash; or design your own!"><img alt="MyBB Admin Control Panel (Browse Themes)" src="{{ site.url }}/assets/images/tour/admin/browse-themes.png" width="500" height="300" /></a></p>-->

<!--<h2>Completely customizable via skins</h2>
<p>
	The new control panel can be completely customized via an internal skinning system. Thanks to the extensive use of cascading stylesheets (CSS) too, for a lot of design modifications it's as simple as editing the stylesheets. The complimentary "Sharepoint" theme for the control panel that ships with MyBB:</p>

<p class="tourScreenshot"><img alt="MyBB Admin Control Panel (Sharepoint Theme)" src="{{ site.url }}/assets/images/tour/admin/sharepoint-theme.png" /></p>-->
