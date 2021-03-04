# Versioning metadata

## YML version data files

Each version has a corresponding `.md` file with the standard `title` tag and version metadata included in [Jekyll's Front Matter](https://jekyllrb.com/docs/front-matter/) in the YML format.

Optional page body is appended at the end of the information generated based on provided data.

### Basic variables

| Variable name    | Notes                                    | Example        |
| ---------------- | ---------------------------------------- | -------------- |
| `version_number` | release version number                   | `"1.8.12"`     |
| `release_date`   | date of the release in ISO 8601 format (*YYYY-MM-DD*) | `"2017-10-27"` |

### Optional variables

| Variable name                     | Notes                                    |
| --------------------------------- | ---------------------------------------- |
| `version_code`                    | version code, usually created by removing `.` characters from `version_number` |
| `type_major`                      | whether a release is named major; `true` / `false` |
| `type_feature`                    | whether a release adds new features; `true` / `false` |
| `upgrade_script_required`         | `true` / `false`                         |
| `resolved_issues_number`          | number of resolved issues                |
| `resolved_issues_link`            | link to resolved issues list             |
| `changed_language_files_number`   | number of changed language files         |
| `comment`                         | a human-friendly summary                 |

### Customization variables

| Variable name      | Notes                                    |
| ------------------ | ---------------------------------------- |
| `resolved_security_issues_number` | number of resolved security issues; inferred from the `resolved_security_issues` list if omitted |
| `type_maintenance` | whether a release resolves issues; `true` / `false`; inferred  from `resolved_issues_number` if omitted |
| `type_security`    | whether a release resolved security issues; `true` / `false`; inferred  from `resolved_security_issues_number` if omitted |
| `type`             | string which `feature`, `maintenance`, and `security` types can be inferred from (legacy) |

### Lists

#### `packages`
Lists packages for the release.

- `type`: identifier of the package type,

  `formats`:
  Lists formats (file extensions) for the package type.
  - `type`: the format name,

  `locations`:
    - `name`: the location identifier,

  `filesize`: size of the package with specified unit of information,

  `checksums`:
  Lists checksums for the package in specific format.
  - `type`: the checksum type,

    `value` the checksum value.


#### `resolved_security_issues`
Lists resolved security issues.

- `description`: issue description,

  `severity`: issue severity,

  `cve_id`: CVE ID,

  `cwe_id`: CWE ID,

  `cwe_name`: CWE name,

  `cwe_type`: CWE type name,

  `cvss_score`: CVSS Vector String,

  `reported_by`:
    - - `name`: The reporter name (Markdown links allowed),
      - `affiliation`: The organization, group, company or other association of the reporter (Markdown links allowed).

  `references`:
    - - `url`: Link to the resource,
      - `title`: Resource title,
      - `type`: Type identifier (e.g. `advisory`, `analysis`).


#### `notable_contributions`
Lists recognized contributions.

- `description`: issue description,

  `author`:
  - `name`: Author name (Markdown links allowed),
  - `affiliation`: The organization, group, company or other association of the author (Markdown links allowed).


#### `resolved_issues`
Lists resolved issues.
- `description`: issue description

#### `changed_files`
Lists changed files in a flat or nested array.

#### `changed_templates`
Lists modified templates.

## `_data/packaging.yml` definitions
#### `types`
List of package types.

- `name`: identifier,

  `title`: display name,

  `description`: description,


#### `locations`
List of locations for package downloads.

- `name`: identifier,

  `url`: URL for package downloads with possible `{TYPE}` (identifier from the `types` list), `{VERSION_CODE}`, and `{FORMAT}` (file extension provided in the version data file),

  `title`: display name.
