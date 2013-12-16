---
layout: blank
permalink: version_check.php
---

<?xml version="1.0" encoding="utf-8"?>
<mybb>
	<friendly_name>MyBB {{ site.data.latest_mybb.version }}</friendly_name>
	<latest_version>{{ site.data.latest_mybb.version }}</latest_version>
	<version_code>{{ site.data.latest_mybb.version_code }}</version_code>
	<download_url>http://resources.mybb.com/downloads/mybb_{{ site.data.latest_mybb.version_code }}.zip</download_url>
	<release_date>{{ site.data.latest_mybb.release }}</release_date>
	<download_size>{{ site.data.latest_mybb.size }}</download_size>
	<type>{{ site.data.latest_mybb.type }}</type>
</mybb>