---
layout: feature
section: features

title: DBMS Support
meta_description: MyBB supports MySQL, PostgreSQL, and SQLite database systems.

redirect_from:
- /features/15-dbms-support/
---
## Support for multiple database types

MyBB supports the following types of database servers:

* MySQL v5 and above
* PostgreSQL v8.1 and above
* SQLite v3

It doesn't end there though - we'll be experimenting with support for additional database server types for future releases too.

## Database fall-over support

With MyBB, it's possible to specify a list of database servers that MyBB should attempt to connect to. If the connection fails or an error message is received while connecting, MyBB will then move on to the next available database server in the list.

This is fantastic for large forums who have database replication configured and multiple master servers spread out over multiple locations.

## Master/slave replication support

MyBB also contains built-in support for master/slave replication support. Larger forums requiring more than one database server will be able to set up automatic replication between their servers and have all write database queries fed off to a separate server than all content is fetched from.
