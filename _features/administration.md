---
layout: feature
section: home

title: Administration
meta_description: Developed and refined to put you in full control of your forum.
icon: wrench

redirect_from:
- /features/03-administration/
---
MyBB contains an Administrator Control Panel (Admin CP) that’s been developed from the ground up to be easy to use while giving you complete control over your forum. Our extensive experience in the forum industry tells us one thing: poorly designed control panels lead to increasing frustration and difficulty maintaining a forum. We’ve spent the time planning the MyBB Admin Control Panel while developing it to ensure it’s easy to use and increases productivity.

# Organized in to six logical sections
Generally you'll login to the control panel to do one of a few tasks relating to either configuration, user & group management or forum & content management. We've broken down the control panel so that you're only seeing what you need to, _when you need to_:

* Home - An overview of your forum (the dashboard)
* Configuration - Everything relating to the configuration of your forum (settings, bans, thread prefixes etc)
* Forums & Posts - Content management (forums, announcements, permissions etc)
* Users & Groups - User and group management (users, groups, promotions, mass-mails etc)
* Templates & Style - Design management (templates, themes etc)
* Tools & Maintenance - General system utilities (system health, logs, backups etc)

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/administration/dashboard.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/administration/dashboard.png" class="feature-tour__screenshot__image" />
	</a>
</div>

# Powerful forum permissions
For most forums, permissions are simple: guests can read, members can post, and administrators and moderators can moderate. For this reason, MyBB allows forums to inherit permissions from the user group and parent forums, meaning for most forums, you do not need to configure any permissions at all. The only forums that need custom permissions set are those that differ from the norm.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/administration/forum-permissions-overview.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/administration/forum-permissions-overview.png" class="feature-tour__screenshot__image" />
	</a>
</div>

MyBB makes it easy to see which permissions are inherited and which are customized for each forum. However, MyBB also allows you to configure a wide range of permissions; these are organized into categories for each user group to make it easy to see what permissions apply to each forum.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/administration/set-forum-permissions.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/administration/set-forum-permissions.png" class="feature-tour__screenshot__image" />
	</a>
</div>

# Powerful user management
MyBB lets you configure exactly what information you see in the user management section of the control panel. You can also configure custom 'views' that allow you to save searches for later. This lets you keep track of your forum staff or your most active users, only showing the information that's most important for you.

You can also perform administrative actions on multiple users at once, including activating, banning, and deleting users;  changing the users' group; and pruning the users' posts.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/administration/users.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/administration/users.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Automatically promote users based on their post count, reputation or registration date

Also available in MyBB is a user promotions system whereby a user can be promoted to a new primary user group or a new additional user group when they reach a specific combination based on the number of posts they’ve made, the reputation they’ve received or the length of time they have been registered.

# Advanced forum statistics
MyBB logs simple, daily counts of all of the threads, posts, and users on your forum. All of this data is accessible in the Statistics section of the control panel, allowing you to see three large graphs and a table showing the daily counts and change for the time period of your choosing.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/administration/forum-statistics.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/administration/forum-statistics.png" class="feature-tour__screenshot__image" />
	</a>
</div>
<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/administration/forum-statistics2.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/administration/forum-statistics2.png" class="feature-tour__screenshot__image" />
	</a>
</div>

# Find plugins and themes without leaving the admin control panel
With MyBB you can see a listing of the most popular [plugins](/features/plugins/) and [themes](/features/themes/) directly in your Admin CP. From there, you can also search for plugins and themes or browse the entire selection available on [MyBB Extend](https://community.mybb.com/mods.php).
