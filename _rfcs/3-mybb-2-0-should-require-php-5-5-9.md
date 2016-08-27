---
layout: rfc
section: home

title: MyBB 2.0 Should Require PHP 5.5.9
date: 2015-06-23
---

# MyBB 2.0 Should Require PHP 5.5.9

## Proposal
 MyBB 2.0 will require a minimum PHP version of 5.5.9, thereby raising the requirement from PHP 5.4 to PHP 5.5.9. No release in the 2.x series shall drop below this requirement.

## Justification
- PHP 5.4 reaches EOL on 14 Sep 2015 (http://php.net/supported-versions.php), which will be before 2.0 ships. Supporting an EOL version from the start would mean that PHP vulnerabilities found after EOL will go unpatched, increasing the vulnerability of MyBB 2.0 installations without us being able to do much to mitigate other than telling people to upgrade to PHP 5.5.
- Laravel 5.1 requires PHP 5.5.9. Laravel 5.1 is an LTS release, which means MyBB 2.0 will benefit from bug fixes and security fixes for much longer than it would if it was using Laravel 5.0, making it a more stable version for an open source product which will be around for a long time.
- We are already encountering problems with 3rd party dependencies that require PHP 5.5, this will only get worse as time goes on, we are essentially being slowly locked out of being able to use third party libraries. This will mean we either have to fork and maintain PHP 5.4 compatible forks, build our own from scratch or don't have the features they would enable. The first two options will significantly increase the amount of maintenance and delay 2.0.

## Actions
- Add the PHP 5.5.9 requirement to the MyBB 2.0 composer.json - [Developers].
- Announce the new requirement to the community - [Community + Euan].
- Update Laravel to 5.1 [Developers]
- A significant drive to get MyBB users onto hosts that support PHP 5.5, with a list of known hosts who do support it and are known to be reliable - [Community]

## Effects & Implications
- Backlash from the community from people who's hosts are on 5.4 or less.
- Potential impact on adoption of 2.0.

---

### Metadata
- **First draft:** 4 Jun 2015
- **Author(s):** Will P
- **Status:** Accepted

{: .standard_table }
| Voting started | Voting ended | Quorum | _Yes_ | _No_ | _Abstain_ |
|:--------------:|:------------:|:------:|:-----:|:----:|:---------:|
| 9 Jun 2015     | 23 Jun 2015  | 14     | 14    | 1    | 1         |
