---
layout: post
title:  "Schema Validation on MongoDB"
subtitle: "Setting up a last line of defence"
excerpt: "Document databases like MongoDB give you the freedom to store schema-less documents. This gives developers flexibility but introduces various "
tag:
- Semantic Web
- Schema Matching
- Data Integration
category: Programming
image: images/posts/rubix.jpg
---


# Introduction


The validation action controls what the Mongo server returns to a client that attempts to write something that is not valid. The choices are ‘error’ or ‘warn’, with ‘error’ being the default. As the names imply, an error is returned to a client if the action is ‘error’ and a warning if set to warn. To roll in a new validator, you might want to start with ‘warn’. When you use ‘warn’, a failed validation does not produce and error. The write continues and does not depend on validation. The validation failure will be logged into Mongo’s log file, but the write operation will not be prevented

[4:52 PM]
also the schema to define is not JSON schema but mongo schema with mongo operators

[4:52 PM]
so will take us some time to convert our joi to that one .. if we want to strictly follow the rules .. not just types

[4:53 PM]
so what do you think is best ? validate data types .. or types + structure + business logic rules

[4:53 PM]
since we have joi as first line of defence .. maybe we can have mongo validation a bit more loose ?
