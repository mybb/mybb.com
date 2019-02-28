---
layout: feature
section: home

title: Performance
meta_description: MyBB has been carefully developed to be both powerful and extremely efficient.
icon: database

redirect_from:
- /features/14-performance/
---

# Database support

## Support for multiple database types

MyBB supports the following types of database servers:

* MySQL v5 and above
* PostgreSQL v8.1 and above
* SQLite v3

## Database fall-over support

With MyBB, it's possible to specify a list of database servers that MyBB should attempt to connect to. If the connection fails or an error message is received while connecting, MyBB will then move on to the next available database server in the list.

This is fantastic for large forums who have database replication configured and multiple master servers spread out over multiple locations.

## Master/slave replication support

MyBB also contains built-in support for master/slave replication support. Larger forums requiring more than one database server will be able to set up automatic replication between their servers and have all write database queries fed off to a separate server than all content is fetched from.


# Built for speed

Working closely with some of the largest forums on the web, we have determined some of the bottlenecks in previous versions of MyBB and completely eradicated them, allowing MyBB to handle larger sized forums than were previously possible. With the introduction of new cache handlers, improved debugging information, and the removal of unnecessary queries, we're proud to say that MyBB is still one of the fastest, yet feature rich forum solutions available today.

## Built-in support for eAccelerator, APC, memcached and X-Cache caching

In a standard installation of MyBB, we already cache the most frequently accessed items (a list of forums, user groups, birthdays, settings, etc) to either the database or the file system. While this is a great speed and optimization improvement, having this information stored in memory on the server is quicker once again.

MyBB also has the ability to store cached information using built-in shared memory caching from PHP modules such as X-Cache and eAccelerator and also has the ability to interface with memcached servers for cache storage.

# Keeping your forum in tip-top shape

A built-in schedule system in MyBB helps keep your forum performing at its best. Running behind the scenes on your forum, the task system will automatically execute different jobs at different times.

This includes things like:

* Checking for database tables that are corrupt and need repairing
* Rebuilding the daily list of birthdays to be shown on the home page
* Updating the “most popular” thread and post statistics
* Cleaning up old Captcha images, search history and thread redirects
* Promoting users to new user groups based on the group promotions
* Sending out mass-emails and newsletters
* Lifting expired user account bans and suspensions

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/performance/tasks.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/performance/tasks.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## View when a task was run & what it actually did
It's great that there’s a lot of automation happening behind the scenes but how can you tell that it's actually working? MyBB will let you know when a task was last run, when it is next due to run and also keeps a complete history when a task was run and if it was successful or not.


<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/performance/tasklog.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/performance/tasklog.png" class="feature-tour__screenshot__image" />
	</a>
</div>
