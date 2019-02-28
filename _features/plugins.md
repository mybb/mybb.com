---
layout: feature
section: home

title: Plugins
meta_description: MyBB offers an advanced plugin system to make adding more features to your forum easy.
icon: puzzle-piece

redirect_from:
- /features/02-plugin-system/
- /features/plugin-system/
---
MyBB has one of the most advanced plugin systems found in bulletin boards today. It takes only minutes to install plugins that can make MyBB suit your needs even better. The active and friendly MyBB community has developed a large amount of plugins that are ready to use; amongst them are plugins to show all unanswered threads, extend the forum statistics, show the permissions one has in a forum and many more.

# Hooks are everywhere
MyBB's plugin system makes use of hooks found throughout the PHP code. These hooks allow plugins to run code where the hook is placed, which means most plugins will not require you to modify any files. Hooks are even found in the Admin Control Panel, meaning plugins can add new pages to the Admin CP or add items to existing pages, once again without editing a single file. MyBB's plugin hooks list is quite extensive, meaning that you hardly ever have to modify a file for addition of new features to MyBB, both small and large.

# Plugins can add or modify templates, too
MyBB's plugin system allows for more than just the running of code through hooks. When you activate a plugin, they can add new templates, and even modify existing templates for all existing sets. Because plugins can modify your templates as well, no lengthy step-by-step instructions are necessary for most modifications for your forum - you'll just upload the plugin file, hit Activate, and you're done. Customizing your forum can't get any easier!

# Check for updates to plugins from the control panel
We've built directly in to the MyBB Control Panel the ability for users to check that they're running the latest versions of the plugins they have installed. This means no longer hunting around several websites to check that you have the latest version.

<div class="feature-tour__screenshot">
	<a href="{{ site.baseurl }}/assets/images/features/plugins/plugins.png" class="feature-tour__screenshot__link">
		<img src="{{ site.baseurl }}/assets/images/features/plugins/plugins.png" class="feature-tour__screenshot__image" />
	</a>
</div>

<p class="note">
	Developers: When submitting to <a href="https://community.mybb.com/mods.php">MyBB Mods</a>, plugins are provided with their own GUID (a unique identifier) for version checking. To implement version checking support in to your plugin, it's as simple as including this GUID and having your plugin listed on MyBB Mods.</p>

# Installation and un-installation routines for developers
One of the common complaints we've previously received with the MyBB plugin system is that when you disable a plugin, you'd generally lose all of the information it stored too. MyBB now makes it possible for users to disable a plugin and then optionally uninstall it - only then will the data from a plugin be removed.

This means that when a plugin is disabled, the plugin should just remove itself from view (remove any template customizations, disable access to itself etc) but not remove any stored information. If the plugin has an uninstall method available, this method should then take care of removing all data for the associated plugin.

# Version compatibility checking
MyBB also makes it possible for plugin authors to set a list of compatible MyBB version numbers for this plugin. This means plugins that aren't compatible with your version of MyBB can't be installed and do damage to your forum.

Version compatibility is based on the MyBB version code (a 4 digit identifier) and it's possible for plugins to specify a comma separated list of supported versions codes, a wildcard based (so for example 16* for MyBB 1.6 releases) list of version codes, or just support all versions of MyBB out of the box.
