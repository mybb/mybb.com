---
layout: feature
section: features

title: Warning System
meta_description: MyBB's warning system lets you easily keep track of troublesome users.

redirect_from:
- /features/11-warning-system/
---
## Keeping track of naughty users has never been this easy

MyBB includes an advanced set of controls that allow you to warn users for inappropriate behavior on your forums. The MyBB warning system also allows for automatic action based on the user's warning level, as set by the forum administrator.

## Warn a user for inappropriate behavior

You can warn a user from posts of theirs or from their profile. When warning a user, you can choose from preset warning times or, if enabled by the forum administrator, a custom warning type. You can also set notes that will only be displayed to forum staff, and can choose to send the user a PM notifying them of the warning. Users will also be able to see a listing of recent warnings in the User Control Panel, if enabled by the forum administrator.

If you select a pre-set warning type, you will be given the user's new warning level. Also, if the warning will cause action to be taken against the user, you will be told so.

<p class="tourScreenshot"><img alt="Warning a user" src="{{ site.url }}/assets/images/tour/warnings/warn-user.png" /></p>

## Predefined warning types and warning levels

From the MyBB Admin Control Panel, you can choose to define warning types and warning levels. Warning types can be chosen when warning a user, and have a set title, number of points to add, and time of expiry.

<p class="tourScreenshot"><img alt="MyBB Admin Control Panel (Add New Warning Type)" src="{{ site.url }}/assets/images/tour/warnings/warning-types.png" /></p>

Warning levels are the automatic actions that occur when users warning levels reach certain percentages. These include post moderation, suspension of post privileges, or banning. For each, you select the amount of time this punishment will last. For warning levels, in addition to the punishment, you select the warning percentage that the warning level will be enacted at.

<p class="tourScreenshot"><img alt="MyBB Admin Control Panel (Add New Warning Level)" src="{{ site.url }}/assets/images/tour/warnings/warning-levels.png" /></p>

## Full warning history available for forum staff</h2>

Forum staff can view a full warning history from each user's profile. There is also a warning log of all warnings issued on the forum in both the administrator control panel and the moderator control panel.

<p class="tourScreenshot"><img alt="User warning log" src="{{ site.url }}/assets/images/tour/warnings/warning-log.png" /></p>

The warning details page allows you to view all information regarding the warning. You can also choose to revoke the warning, meaning the warning is no longer counted towards the user's warning level. This is the equivalent of the warning expiring naturally. However, revoking a warning does not remove the punishments enacted as part of the warning.

<p class="tourScreenshot"><img alt="Warning details" src="{{ site.url }}/assets/images/tour/warnings/warning-details.png" /></p>
