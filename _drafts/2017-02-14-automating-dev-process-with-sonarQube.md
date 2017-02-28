---
layout: post
title:  "Automating Dev Process with SonarQube"
subtitle: "Code Quality, Coverage and Standards using SonarQube, Mocha, Istanbul and ESLint"
excerpt: "As the dev team grows, keeping the code up to certain style and standards becomes increasingly hard. In this post, i will discuss the various tools and configurations we followed at Beamery to automate various parts of the dev process"
tag:
- SonarQube
- Code Quality
- Mocha
- Istanbul
- Process Automation
category: Programming
image: images/posts/code_quality.jpg
---


# Introduction

Scaling up the dev team is always interesting. Each developer joining the team brings with him a couple of new ideas, coding standard, opinions, etc. up to a point where it becomes vital to set up internal coding standards and methods to automate code analysis and checks. In addition to code styling and formatting, we need to make sure that every piece of code committed is covered by tests and will pass all of our integration tests.

Before i dive in the details of setting up the tools we decided to use, i will visit some of the concepts and terminologies used across this post.


