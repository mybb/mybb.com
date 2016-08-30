---
layout: rfc
section: home

title: Encrypted communications rollout
date: 2016-02-13
---

# Encrypted communications rollout

##  Proposal
- Accept [Keybase.io](https://keybase.io) as the Team's default hub for exchanging PGP keys
- Introduce a requirement for the **Management Team and Team leaders to have a PGP key** available
- **Keys** optional but **recommended** for all team members, or **required when sending or receiving** sensitive information
- Links and fingerprints pointing to public PGP keys will be published on https://www.mybb.com/about/team/
- Vulnerability disclosure information pages will include a notice on PGP keys being available
- Published keys will be used for signing MyBB packages in the future
- Establish a policy requiring team members to take all necessary precautions to prevent third party entities from obtaining sensitive information related to MyBB (no storing or transmitting without the Team's PGP standard)
- The default medium for transmitting sensitive information will be the _\*@mybb.com_ e-mail address
- Maintain an off-site, up-to-date list of professional/private communication identifiers (tamper evident, preferably Google Docs)
- Maintain an off-site, up-to-date list of team members holding specified information or user/administrative access to third party platforms/services (tamper evident)
- All MyBB-related information will be stored by the Management Team and the leader of the team using that information (if applicable)
- Security policy violations will be reported to the Management Team or appropriate Team leader (if applicable) to perform recovery + _#security_ channel on Slack (if possible); in case of emergency, recovery and redistribution can be performed by any Team member
- Recovery and redistribution of information necessary for authorization/authentication will be performed when a member in hold of it leaves the team
- Enforce **2-Factor Authentication** across all platforms (where possible; exceptions noted in aforementioned lists)
- Prefer Single Sign On (provider: @mybb.com Google Accounts) and custom accounts over password sharing.

## Justification
 Improve operations security of the MyBB Team.

---

### Metadata
- **First draft:** 12 Jan 2016
- **Author(s):** Devilshakerz
- **Status:** Accepted

{: .standard_table }
| Voting started | Voting ended | Quorum | _Yes_ | _No_ | _Abstain_ |
|:--------------:|:------------:|:------:|:-----:|:----:|:---------:|
| 30 Jan 2016    | 13 Feb 2016  | 13     | 13    | 0    | 0         |
