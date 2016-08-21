---
layout: feature
section: features

title: Calendars and Events
meta_description: MyBB includes a complete calendar to keep track of events.

redirect_from:
- /features/08-calendars-and-events/
---
## Multiple calendars
The MyBB calendar functionality has support for multiple calendars. Calendars are created by forum administrators in the control panel and can have user group based permissions applied to them. Users that then have permission to access these calendars can create public or private events.

<p class="tourScreenshot"><img alt="Multiple Calendars" src="{{ site.baseurl }}/assets/images/tour/calendars/calendars.png" /></p>

## Recurring and ranged events

It's possible to create events that have a start and a finishing date as well as optionally repeat themselves at different intervals between two periods of time. There’s an advanced set of recurring periods that can be chosen, similarly to what's offered by Microsoft Outlook or Google Calendar.

<p class="tourScreenshot"><img alt="Creating a Recurring Event" src="{{ site.baseurl }}/assets/images/tour/calendars/addevent.png" /></p>

## Weekly overview

The MyBB calendar additionally has built-in support for a weekly overview for all events over a 7-day period. On these pages, a mini calendar of the month is also displayed.

<p class="tourScreenshot"><img alt="Weekly Calendar View" src="{{ site.baseurl }}/assets/images/tour/calendars/week.png" /></p>

## Other features

* Events can optionally have a time zone applied to them or be told to completely ignore time zones altogether (for example, events that fall on the same date no matter which time zone they’re created in)
* Approval can be required before events are publicly visible on calendars and events can be moved between calendars by moderators.
* The week start day can be adjusted per calendar.
