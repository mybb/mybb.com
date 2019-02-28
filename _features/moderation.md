---
layout: feature
section: home

title: Moderation
meta_description: Powerful and convenient tools for forum moderators and staff to work by your side.
icon: gavel

redirect_from:
- /features/04-moderation/
- /features/11-warning-system/
- /features/warning-system/
---
Moderation of posts and threads in MyBB is easy: with inline moderation, just select the posts or threads you want to moderate, select the tool to use, and click go. In just a few clicks, you can clean up an entire thread or forum without breaking a sweat. As an added bonus, you can select all threads in an entire forum from a single page: just tick the select all checkbox on one page then select all threads from the prompt that appears. Moderating a forum has never been this simple.

# Moderator tools

MyBB offers and advanced set of thread and post moderation option known as custom moderator tools. These custom mod tools are essentially moderation macros, allowing you to define a number of actions to be performed at once. Mod tools are used just like all included moderation actions: from both individual thread moderation and inline moderation. Mod tools can even be defined to only be allowed on certain forums, giving you the ability to create an advanced set of tools specific to your board.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/moderation/custom-mod-tools.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/moderation/custom-mod-tools.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Delayed moderation

With delayed moderation introduced in MyBB 1.6, you can set any thread moderation tool - default or custom - to be performed after a certain number of days. You can perform delayed moderation on just one thread or several, and actions can be queued to allow a whole set of moderation actions to occur at just the right time. From closing a thread to making a copy of one, every tool can now be queued with delayed moderation.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/moderation/delayed-moderation.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/moderation/delayed-moderation.png" class="feature-tour__screenshot__image" />
	</a>
</div>

# Built-in Moderator Control Panel

Using the built-in moderator control panel in MyBB, forum staff can assist with light administration tasks on the forum such as:

* Announcement Management - Moderators can manage forum announcements in the forums they moderate
* View Moderation Queues - Moderators can view full moderation queues and approve threads, posts and attachments in the forums they moderate
* View Reported Content - Moderators are able to see a listing of any reported posts in the forums that they moderate and mark them as actioned/read. Super Moderators can see reported reputation and users, too
* Moderator Logs - Moderators can access past moderation history to view actions taken by other moderators to specific threads or posts
* Profile Management - Moderators are able to edit portions of user profiles to either change or remove inappropriate content
* User Banning - Moderators are able to ban users for predefined periods of time
* View Warning Logs - Moderators can see a history/log of warnings given to a particular user by other forum staff
* IP Searching - Moderators can search for a specific IP address and return any users or posts that match

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/moderation/modcp.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/moderation/modcp.png" class="feature-tour__screenshot__image" />
	</a>
</div>

# Comprehensive warning system

MyBB includes an advanced set of controls that allow you to warn users for inappropriate behavior on your forums. The MyBB warning system also allows for automatic action based on the user's warning level, as set by the forum administrator.

## Warn a user for inappropriate behavior

You can warn a user from posts of theirs or from their profile. Moderators can choose from pre-defined warning types or create their own. As part of issuing a warning, moderators can leave notes only visible to other members of the forum staff and can choose to send the user a custom PM notifying them of the warning.

If enabled, users see a listing of recent warnings in their User Control Panel.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/moderation/warn-user.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/moderation/warn-user.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Pre-defined warning types
From the Admin Control Panel, you can set up pre-defined warning types for your staff to choose from. This includes setting the number of points to give for the warning and the length of time before those points expire.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/moderation/warning-types.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/moderation/warning-types.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Automatic actions at set warning levels

As part of the warning system, actions can be taken automatically when a user reaches a pre-defined warning level. This includes post moderation, suspension of posting privileges, and a temporary or permanent ban.


<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/moderation/warning-levels.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/moderation/warning-levels.png" class="feature-tour__screenshot__image" />
	</a>
</div>
