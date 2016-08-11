---
layout: feature
section: features

title: Task Scheduling System
meta_description: MyBB's task scheduling system performs regular forum maintenance automatically.

redirect_from:
- /features/13-task-scheduling/
---
## Keeping your forum in tip-top shape

A built-in schedule system in MyBB helps keep your forum performing at its best. Running behind the scenes on your forum, the task system will automatically execute different jobs at different times.

This includes things like:

* Checking for database tables that are corrupt and need repairing
* Rebuilding the daily list of birthdays to be shown on the home page
* Updating the “most popular” thread and post statistics
* Cleaning up old Captcha images, search history and thread redirects
* Promoting users to new user groups based on the group promotions
* Sending out mass-emails and newsletters
* Lifting expired user account bans and suspensions

<p class="tourScreenshot"><img alt="Scheduled Tasks" src="{{ site.url }}/assets/images/tour/tasks/tasks.png" /></p>

## View when a task was run & what it actually did
It's great that there’s a lot of automation happening behind the scenes but how can you tell that it's actually working? MyBB will let you know when a task was last run, when it is next due to run and also keeps a complete history when a task was run and if it was successful or not.

<p class="tourScreenshot"><img alt="Scheduled Task Log" src="{{ site.url }}/assets/images/tour/tasks/tasklog.png" /></p>

## Automatic backups

Using the task system, it's possible to automatically generate backups of the database of your forum. While this is disabled by default and we only recommend to be used by smaller forums, for those users it gives piece of mind that their forum is automatically being backed up.
