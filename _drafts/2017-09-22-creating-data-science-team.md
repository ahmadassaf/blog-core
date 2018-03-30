---
layout: post
title:  "Creating A First Data Science Team"
subtitle: "A guide to create a company's first Data Science Team"
excerpt: "There are three broad types of companies that put AI at the core of their value chain. As a startup, we had to clearly define how our Data/AI team will be structured and how will it scale as we grow. This post describes the various roles the will form the core of our data team and the responsibilities and skills needed at all the different seniority levels"
date:   2017-09-22
tag:
- Data Science
- Data Engineering
category: general
image: images/posts/shell.jpg
---

There are three broad types of companies that put AI at the core of their value chain:

- **R&D companies:** Similar to pure academic research, these companies aim to further the field of artificial intelligence, often without a specific product or application in mind. Examples are non-profit organizations, think tanks or investor backed R&D companies.
- **AI Champion:** These companies put AI at the core of their value creation. While they do invest heavily in research and development, their research efforts are focused on developing a product that fully exploits the capabilities of AI for a specific application.
- **Digital Enterprise:** These companies use AI as a competitive advantage and improve their own value chain but the development of AI itself is not part of their core product.  In these organisations AI-based solutions are used to solve a real need.

![](https://d2mxuefqeaa7sj.cloudfront.net/s_EC35297C571E2E6774C0B64E5C4605074C423D99CE1CB712A73AC24FC55575F8_1501857566013_image.png)


Digital enterprises can build up in-house competences and grow a team that focuses on Data Science and Artificial Intelligence. A dedicated AI team has a higher chance of attracting AI talent and maintaining standards than a single gift card division does. Ideally, indeed, the team would be supervised by a Chief Artificial Intelligence Officer (CAiO)/Chief Data offices (CD)) (whatever you want to call it) who pushes digital innovation from the perspective of the senior management.


> AI itself is not a product or a business. Rather, it is a foundational technology that can help existing lines of business and create new products or lines of business. The ability to understand and work with diverse business units or functional teams is therefore critical .. 


# Roles .. whats what ?


## Data Scientist (DS)

A data scientist is the alchemist of the 21st century: someone who can turn raw data into purified insights. Data scientists apply statistics, machine learning and analytic approaches to solve critical business problems. Their primary function is to help organizations turn their volumes of big data into valuable and actionable insights.

The problem-solving skills of a data scientist requires an understanding of traditional and new data analysis methods to build statistical models or discover patterns in data. For example, creating a recommendation engine, predicting the stock market, diagnosing patients based on their similarity, or finding the patterns of fraudulent transactions.

They should have experience working with different datasets of different sizes and shapes, and be able to run his algorithms on large size data effectively and efficiently, which typically means staying up-to-date with all the latest cutting-edge technologies. This is why it is essential to know computer science fundamentals and programming, including experience with languages and database (big/small) technologies.

**Skills**: Python, R, Scala, Apache Spark, Hadoop, machine learning, deep learning, and statistics
**Tools:** Data Science Experience, Jupyter, and RStudio

## Data Engineer (DE)

Data Engineers are the data professionals who prepare the “big data” infrastructure to be analyzed by Data Scientists. They are software engineers who design, build, integrate data from various resources, and manage big data. Then, they write complex queries on that, make sure it is easily accessible, works smoothly, and their goal is optimizing the performance of their company’s big data ecosystem.
They might also run some ETL (Extract, Transform and Load) on top of big datasets and create big data warehouses that can be used for reporting or analysis by data scientists. Beyond that, because Data Engineers focus more on the design and architecture, they are typically not expected to know any machine learning or analytics for big data.

**Skills**: Hadoop, MapReduce, Hive, Pig, Data streaming, NoSQL, SQL, Distributed Programming
**Tools:** MySQL, MongoDB, Cassandra, Kafka .. etc


## Machine Learning Engineer (MLE)

An extension of the Data Engineer but with more focus and experience on Machine Learning algorithms and problems. Ideally an ML engineer will have knowledge in:


- Radial Basis Support Vector Machine
- Boosted Trees
- Random Forest
- Lasso / Ridge Regression / Elastic Net
- K-Nearest Neighbors
- Neural Networks
  - Deep Belief Nets or Stacked Denoising Autoencoders
  - Convolutional Neural Nets
  - Long Short Term Memory (LSTM) recurrent nets
  - Recursive Neural Nets
- Word2vec and related algorithms for learning words from their context


## Product Manager (PM)

Product management is about taking business requirements and converting it into actual product. If you look at the pipeline mentioned above, data engineers are good at coding, data scientists are good at statistics and algorithms. However what is missing in this picture is a role that understands the business requirements, knows what to look for in the data based on the business goals, and translates it to data scientist. DS then comes up with an algorithm that can be used and then the PM takes the pipeline feature to the engineer who tweaks the pipeline to start recording the new data as requested by the scientist.

DS, PM, and DE are the three pillars of data analytics in a firm and they work closely together to track meaningful metrics, analyze them and then utilize the insights to improve KPI for the actual consumer product.

So PM (data) is a product manager of the data analytics pipeline/data science pipeline. Its a newer role targeted at companies which have lots of data to analyze and make impact on the business goals/KPIs.

A PM (data) needs to know statistics, machine learning and AI algorithms (at least cursorily), have good product sense, be good in handling numbers/metrics/identifying KPI’s, be good in communication, knows how to code (expected to code hands on anywhere in the pipeline to make a tweak or two), and should have some knowledge of big data technologies/software such as AWS ecosystem (EMR, Spark, Redshift)

# The table of expectations

The table below shows the varied skills, responsibilities and behaviours expected from all the roles across the different experience levels

## Skills

| **Level**  | **Skills scope**                                                                                                                                         | **Programming**                                                                                                                                                                 | **Computer Science**                                                                                                         | **Scientific Method**                                                                                                          | **Legislations**                                                             |
| ---------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------- |
| **Lead**   | Expertise in multiple frameworks and tools with **hands on practical experience** in applying data science and ML in large-scale production environments | Have the ability to **proficiently** program in multiple languages and have **solid** working knowledge across multiple databases of various paradigms (relational, K/V, graph) | Have **solid** understanding of various CS concepts and is well versed in data structures and algorithms/complexity analysis | Able to **quickly** decide what is the best method/algorithm to use for various situations                                     | **Detailed** knowledge in data protection and privacy laws                   |
| **Senior** | **Expertise** in multiple frameworks and tools with experience in applying data science and ML in large-scale production environments                    | Have the ability to program in **multiple** languages and have **working knowledge** across multiple databases of various paradigms (relational, K/V, graph)                    | Have **solid** understanding of various CS concepts and is well versed in data structures and algorithms/complexity analysis | Can decide **quickly** the best methods/algorithms to use for an **increased** set of problems                                 | **Increased** Knowledge in data protection and privacy laws and legislations |
| **Mid**    | **Increased** technical skills within multiple tools and programming languages for each corresponding job title                                          | Skills in **various** programming languages and frameworks that correspond to each job title                                                                                    | Have **good** knowledge in various CS concepts/data structures and algorithms/complexity analysis                            | Able to **quickly** decide what is the best method/algorithm to use for various situations                                     | Knowledge in data protection and privacy laws and legislations               |
| **Junior** | Technical skill within one of the skills required for each role in the corresponding job title                                                           | Proficient in at least one programming language related to the job title                                                                                                        | Knowledge in various CS concepts/ data structures and algorithms/complexity analysis                                         | Is able to assess various alternatives and be able to select the best choice of tool/algorithm according to scientific methods | N/A                                                                          |

## Responsibilities

| **Level**  | **Scope**                                         | **Complexity**                                                        | **Planning**                                               | **Production Support**                                    | **Reporting**                                                    |
| ---------- | ------------------------------------------------- | --------------------------------------------------------------------- | ---------------------------------------------------------- | --------------------------------------------------------- | ---------------------------------------------------------------- |
| **Lead**   | Leads complex projects & programs                 | Works on projects that span a range of business areas                 | Leads project planning. Collaborates with project managers | Leads data efforts and live data platform support         | Able to generate weekly/bi weekly/monthly reports for management |
| **Senior** | Complex, major or high visibility projects        | Works on projects that span a range of applications                   | Participates and/or leads project planning                 | Assists in production support                             | Able to generate reports about projects progress                 |
| **Mid**    | Moderate to complex tasks on one or more projects | Work as a project member of a team and/or small independent  projects | Creates and shares development estimates in planning       | May assist in production support                          | N/A                                                              |
| **Junior** | Small moderately complex tasks                    | Work as a project member of a team                                    | Participates in the planning process                       | May assist in production support in extreme circumstances |                                                                  |

## Behaviours

| **Level**  | **Mentoring**                                                         | **Training**                                               | **Standards & Compliance**                      |
| ---------- | --------------------------------------------------------------------- | ---------------------------------------------------------- | ----------------------------------------------- |
| **Lead**   | Provides technical leadership, coaching and mentoring to team members | Will create training programmes for staff.                 | Assists in defining Data compliance & standards |
| **Senior** | Provides technical leadership, coaching and mentoring to team members | Will help create training programmes for staff             | Helps define and implement compliance practises |
| **Mid**    | Provides technical coaching and mentoring to junior team members      | May prepare and present formal training to staff as needed | Follows set procedures and compliance practises |
| **Junior** | N/A                                                                   | N/A                                                        | Follows set procedures and compliance practises |



![Technical Path in Enigma](https://d2mxuefqeaa7sj.cloudfront.net/s_EC35297C571E2E6774C0B64E5C4605074C423D99CE1CB712A73AC24FC55575F8_1502206196292_Screen+Shot+2017-08-08+at+4.29.26+pm.png)

# Engineering vs. Management Paths


## Product Vision vs. Technical Vision

The ***product manager*** is responsible for setting a product vision and strategy. Her job is to clearly articulate the business value to the product team so they understand the intent behind the new product or product release. She owns the strategy behind the product and its roadmap and must work with engineering to build what matters.

The ***engineering manager*** defines and drives technical strategy and architectural vision for the product and sometimes the company. He is responsible for defining the development methodology and ensuring adoption across the engineering team and organization. The engineering manager designs appropriate solutions and recommends alternative approaches, when necessary.


> **The product manager owns the product roadmap. He is the person responsible for defining, in detail, the “why’”and high-level “what” of the product that the engineering team will be asked to build**

## Product Expert vs. Technical Expert

The ***product manager*** is the go-to product expert on the team. He facilitates communication between the team and the stakeholders and ensures that the team is building the right product at the right time. He is also is a key resource to the rest of the non-technical organization and should be responsible for the overall success of the entire product experience. He must be the master of the product.

The ***engineering manager*** serves as a technical lead for technical decisions and he must stay abreast of advancements in related technologies. He manages complex technical projects and a team of engineers. In many environments, the engineering manager is willing to roll up his sleeves and code alongside his team while guiding the engineering team to grow both technically and professionally. He leads the planning, execution, and success of complex technical projects while recommending engineering best practices and assessing feasibility and ramifications of new business requirements.


## Manage Indirectly vs. Manage Directly

*The* ***product manager*** is typically seen as the CEO of the product, even though no one reports directly to her. For the product manager, this means she is responsible for making product decisions and must motivate and lead a cross-functional team of leaders from across the organization. She is responsible for delivering an entire product experience and ensuring the company can market, sell, and support it.

The ***engineering manager*** must not only have technical chops but also directly manage a team of engineers. The engineering manager is responsible for supporting the professional goals and development opportunities for the entire engineering staff — including providing coaching and mentoring, one-on-one meetings and reviewing each engineer’s progress.


> **A great engineering manager delivers against project goals, contributes to (but does not own) product strategy and helps develop his team**

A great product manager leads the product vision and roadmap while helping a cross-functional team be great. Working together, the product and engineering managers can create a product planning and development environment for success.


![Management Path in Enigma](https://d2mxuefqeaa7sj.cloudfront.net/s_EC35297C571E2E6774C0B64E5C4605074C423D99CE1CB712A73AC24FC55575F8_1502206224584_Screen+Shot+2017-08-08+at+4.29.01+pm.png)

# The future is bright 🔆 

Having identified the various paths one can take in the data team .. it is vital to understand that as we grow, we will be forming sub-teams inside of this team. Each team will be specialised in a specific area (Business Intelligence, Data Science, Data Engineering, etc.)

Each team will have a Head/Director who will be responsible for a group of product managers and engineers (on all levels) as see fit

The figure below shows a potential future of how this team can be and where can people grow into 🌲 


![Beamery .. few years down the road](https://d2mxuefqeaa7sj.cloudfront.net/s_EC35297C571E2E6774C0B64E5C4605074C423D99CE1CB712A73AC24FC55575F8_1502289078841_Screen+Shot+2017-08-09+at+3.31.08+pm.png)


