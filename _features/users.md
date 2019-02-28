---
layout: feature
section: home

title: Users
meta_description: Features to keep your users engaged and active.
icon: users

redirect_from:
- /features/09-reputation/
- /features/reputation/
- /features/12-mass-mail-and-newsletters/
- /features/mass-mail-and-newsletters/
---
# Reputation

MyBB's reputation system lets users rate other users (negative, neutral, or positive) based on their actions and posts. All ratings are tallied to give every user a total reputation, which can be displayed in their profiles and posts. To help limit abuse, all reputation comments are public, displayed in a simple reputation report along with the comment and value of the rating.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/users/reputation.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/users/reputation.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Posts and profiles

Users can leave reputation on both other user's profiles (just once or multiple times) as well as for a user's posts. Every post can be given a rating shown on the user's reputation report. Ratings left on a user's profile require a comment, while those left on a post do not, allowing users to quickly show they like (or dislike) a post.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/users/reputation-rate.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/users/reputation-rate.png" class="feature-tour__screenshot__image" />
	</a>
</div>

# Mass mail

## HTML, text, HTML and text, or private message

Mass mail messages can be delivered to users via email or via private messages. For email, it's possible to choose between either text, HTML or multipart (HTML + text) message formats.

MyBB will also attempt to generate a text based version for the multipart format automatically but give you the choice of creating your own version too.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/users/mm1.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/users/mm1.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Decide exactly who should receive the message

It's possible to deliver mass mail messages to certain segments of registered users with the powerful filtering criteria. Messages can be delivered to users of certain user groups, those matching certain names or email addresses or those who have reached or not reached a certain post count.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/users/mm2.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/users/mm2.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Send it now or send it later

With the mass mail features built directly in to MyBB, it's possible to create and send powerful mass mail messages to registered users. Thanks to the built in task scheduling system it's also possible to schedule mail messages for delivery on a specific day or time.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/users/mm3.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/users/mm3.png" class="feature-tour__screenshot__image" />
	</a>
</div>

## Track delivery progress and resend

Once a mass mail message has been scheduled for delivery it will appear in the queue. From the queue, it's possible to see the progress of the mass mail (queued, delivering, delivered, cancelled) and if the message is being delivered, see exactly how many recipients out of the total have had the message delivered to them.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/users/mm4.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/users/mm4.png" class="feature-tour__screenshot__image" />
	</a>
</div>

After a mass mail has been sent, it's moved from the queue to an archive. From the archive it's possible to see everything that’s previously been sent with the option of resending that message again.
