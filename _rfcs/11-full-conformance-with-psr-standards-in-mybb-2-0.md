---
layout: rfc
section: home

title: Full conformance with PSR standards in MyBB 2.0
date: 2016-06-26
---

# Full conformance with PSR standards in MyBB 2.0

## Abstract
Currently the [`CONTRIBUTING.md`](https://github.com/mybb/mybb2/blob/master/CONTRIBUTING.md) file mentions that the code must follow [PSR standards](http://www.php-fig.org/psr/), however not all rules are being enforced (such as 4 spaces indentation).

## Effects & Implications

- Editor and tool configuration files (such as .editorconfig) will be set up to validate the code using PSR and custom additional standards,
- code from all existing MyBB 2.0 repositories will be converted using aforementioned settings,
- changes to Coding Standards will have retroactive and proactive effect across all MyBB 2.0 repositories,
- custom standards, in addition to PSR, can be added, modified or removed from the CONTRIBUTING.md when a general consensus is achieved within the Team (RFC votings will have precedence over informal discussions), given they do not conflict with standards laid out by PSRs in any way.

## Justification
Confirming the willingness of Team members to strictly adhere to standards introduced and used by the PHP Community.

---

### Metadata
- **First draft:** 1 Jun 2016
- **Author(s):** Devilshakerz
- **Status:** Accepted

{: .standard_table }
| Voting started | Voting ended | Quorum | _Yes_ | _No_ | _Abstain_ |
|:--------------:|:------------:|:------:|:-----:|:----:|:---------:|
| 12 Jun 2016    | 26 Jun 2016  | 12     | 11    | 0    | 2         |
