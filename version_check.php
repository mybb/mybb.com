---
layout: blank
permalink: version_check.php
---
{% include latest_version.html %}<?xml version="1.0" encoding="utf-8"?>
<mybb>
	<friendly_name>MyBB {{ latest_version.version_number }}</friendly_name>
	<latest_version>{{ latest_version.version_number }}</latest_version>
	<version_code>{{ latest_version.version_code }}</version_code>
	<download_url>{{ latest_version_first_location_url }}</download_url>
	<release_date>{{ latest_version.release_date | date: "%b %d, %Y" }}</release_date>
	<download_size>{{ latest_version_first_format.filesize }}</download_size>
	<type>{{ latest_version_types_amp }}</type>
</mybb>