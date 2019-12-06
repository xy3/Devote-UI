## Table of Contents


------ | -------
**1.** Introduction	|	2
**1.1**  Overview	|	2
**1.2**  Business Context	|	2
**1.3**  Glossary	|	3
**2.** General Description	|	4
**2.1**  Product / System Functions	|	4
**2.2**  User Characteristics and Objectives	|	4
**2.3**  Operational Scenarios	|	4
**2.4**  Constraints	|	5
**3.** Functional Requirements	|	5
**3.1**  Login	|	5
**3.2**  Register	|	6
**3.3**  Account Privileges |	6
**3.4**  Vote	|	6
**3.5**  View Vote	|	7
**3.6**  Create Election	|	7
**3.7**  Search & View Elections	|	8
**3.8**  End Election 	|	8
**3.9**  Membership	|	9
**4.** System Architecture	|	13
**5.** High-Level Design	|	14
**6.** Preliminary Schedule	|	15
**7.** Appendices	|	16


# 1. Introduction

## 1.1 Overview

This project is a decentralized voting application that provides a platform for secure, anonymous ballots and elections. It uses blockchain technology to ensure the immutability of votes and utilizes Ethereum&#39;s distributed computing tools to achieve this.

The application has the functionality to create an election, place a vote, and view real time vote comparisons between the candidates. This application is completely electronic and could make the use of paper based electoral systems obsolete.

## 1.2 Business Context

The primary usage of the project is aimed at society committee elections in universities. Our application will be developed to provide a voting service for college societies across Ireland, primarily in Dublin City University.

The application will be developed in a dynamic way so that it could also be used as a simple voting application for any purpose, for example its usage could extend to user surveys and ballots of any description. It will be created with the main purpose of college society elections.

## 1.3 Glossary

**Blockchain**

A blockchain is a growing list of records, called blocks, that are linked using cryptography. Each block contains a cryptographic hash of the previous block, a hash of the current block, and the transaction data (in our case, a vote) of the block.

**Smart contract**

A smart contract is a piece of code that is stored on the blockchain. This piece of code is then fetched and executed when required. As it is stored on the blockchain it is distributed and immutable.

**Solidity**

Solidity is a statically typed, object-oriented programming language developed by Ethereum for writing smart contracts. It is designed to have similar syntax to JavaScript. It is used for implementing smart contracts on various blockchain platforms, most notably, Ethereum.

**Ethereum**

Ethereum is an open source, public, blockchain-based distributed computing platform and operating system featuring smart contract functionality. Ethereum provides a decentralized virtual machine, the Ethereum Virtual Machine (EVM), which can execute smart contracts using an international network of public nodes.

**Ganache**

Ganache is a piece of software that allows you to create a private Ethereum blockchain to run tests, execute commands, and inspect state while controlling how the chain operates. It gives you the ability to perform all actions you would on the main chain without the cost. It provides convenient tools such as advanced mining controls and a built-in block explorer.

**DApp**

A decentralized app (DApp) is a computer application that runs on a distributed system, i.e. the blockchain.

**Metamask**

Metamask is a browser extension that allows the user to run Ethereum Dapps in your browser without running a full Ethereum node. MetaMask includes a secure identity vault, providing a user interface to manage your identities on different sites and sign blockchain transactions.

**Web3 JS (Ethereum JavaScript API)**

Web3 JS is a collection of libraries which allow you to interact with a local or remote Ethereum node, using an HTTP or IPC connection.



# 2. General Description

## 2.1 Product / System Functions

The necessary functions for the voting system are and are not limited to the following.

- Register
- Login
- Search for election
- View election information
- Make a vote\*
- Create a new election\*
- End an election\*
- Give user voting permissions\*
- Add user to organisation\*

_\* Login is required_

## 2.2 User Characteristics and Objectives

Although the website will be hosted publicly online, not all of its functionality is accessible to all users.

**Unregistered users**

Until a user has signed up on the website, they have only one function available to them, to view previous elections and votes.

**Administrators**

Admins are members with elevated permissions. They have all the permissions members have, with the added ability to end, create and view every member&#39;s elections and votes. The system is aimed at being fully automated so that minimal moderation is necessary. Admin accounts will be primarily used for debugging purposes and light moderation.

**Members (Registered users)**

All member accounts have the same permissions; however, they can differ in their usage. Members can create their own user groups and add society members to it. This provides the group members with permission to partake in the society&#39;s elections. Member functions are discussed in more detail in section 3.

## 2.3 Operational Scenarios

**Register**

Users of the voting system must create an account to create and participate in elections. They will register by filling out an HTML form on the website that connects to the user database.

**Member Login**

After registration, members can proceed to login to the site using a username and password. This will allow them to access member restricted areas and participate in elections. If a user enters an incorrect username/password combination, they will be notified and prompted to try again.

**Vote\***

Once logged in, a user can vote by navigating to the voting page and using the user interface to make their choices before submitting. Only elections in progress will be displayed and in the case that a user votes on an election after it has closed, or that they do not have permission to vote on, they will be shown a relevant warning message and instructions on how to proceed.

**View election info**

Upon clicking on an election, the information pertaining to that election will be displayed on-screen for the user. Such info might include the electoral position, candidate list, election start date and end date.

**Create election\***

It is possible to create an election once the user is logged in, by using the provided UI form.

**End election\***

Elections can be ended at any stage by the user or committee that started it. Ending and election prematurely will close the voting process, preventing additional users from voting on the election.

**View past elections**

The ability to view information about past elections is open to everyone. This is a core aspect of distributed computing; the data is decentralized and everyone has access to view it.

_\* Login is required_

## 2.4 Constraints

**Time constraints**

As there is a lot of new technology used in this project, we will have to organize the time so we will have enough time to research and study these new technologies.

**Security requirements**

It is very important that our system cannot be tampered with and it is imperative that it protects against fake votes, users and safeguards user information. The software must be secure in all regards: registration, database access, vote immutability and anonymity.

**Anonymity requirements**

One of the key aspects to our application, is that users maintain full anonymity while voting on elections. For this to be achieved, the system must have the ability to track, store and allow users to view votes and elections, without any user-critical information being displayed to users.

**Moderation**

The system we implement must be built in such a way that works effectively without the need for human moderators. Therefore, using a blockchain structure is the most efficient way to achieve immutability and reduce the need for moderation.

# 3. Functional Requirements

## 3.1 Login

**Description**

The system will use a member login system to identify each individual participating in an election. It will store the users name, email and password. The elections will only be available for preview to anybody not logged in. Administrator accounts will have elevated privileges to moderate the site manually if necessary.

**Criticality**

The login system is essential to identify the voter and ensure that no user can vote more than once on the same election. An account is essential as it can be given voting permissions to restrict voting to specific elections and ensure only one vote is made per user.

**Technical Issues**

As we are storing user data, we need to follow the Ethics Approval process and ensure we uphold to the current standard of the GDPR. Each password will be salted and then hashed to ensure the highest level of security. The site must also have an extremely secure network to ensure each user may only have access to a single vote per election.

**Dependencies**

For users that aren&#39;t logged in, the site only provides access to preview an election. The entirety of the systems functionality is only available once a user is logged in and identified.

## 3.2 Register

**Description**

To allow each user to login they must first register an account. An email and password is required to setup an account. A Dublin City University (DCU) email address must be used when registering an account to be granted access to vote in DCU societal elections.

**Criticality**

This function is required to allow users to create accounts. Without it, there would be no way for moderators (or the system) to know who each user is.

**Technical Issues**

Similarly, to the previous system, this function collects personal data and carries all the same technical issues as the login system.

**Dependencies**

The system is dependent on an accurate registry system that effectively identifies individuals with minimal ways to create multiple accounts per user.


## 3.3 Account Privileges

**Description**

The system needs to give certain users administrative privileges. The moderators of the site will need extra functionality, such as the ability to end any election, ban a user by IP address, and change the details of any election remotely. Users that create elections will also be given such permission but for their elections only.

**Criticality**

An administrative system is needed to increase the security and durability of the site so that real humans can moderate any suspicious activity, such as creating multiple empty elections or having bot accounts vote on elections.

**Technical Issues**

These privileges must only be given to trusted members and therefore must have a high level of security to access them.

**Dependencies**

This functionality depends on the user accounts to give such permissions.

## 3.4 Vote

**Description**

Once a user has logged in, they must have the functionality to vote once per election. For elections with a specified voting user base, tokens can be given to known user accounts to allow a single vote in the election at the cost of their token.

**Criticality**

The system requires user votes to function. These votes will be transferred using a blockchain structure to ensure the accuracy of the election and mitigate the ability to tamper with votes.

**Technical Issues**

The effectiveness of the system relies on its ability to store the voting information accurately and securely.

**Dependencies**

The voting system is dependent on the blockchain structure as this is the structure, we are using to store each users vote and tally the scores.

## 3.5 View Vote Info

**Description**

Every user on the site will have access to preview the current state of any election even if they aren&#39;t logged in. The blockchain structure must be completely visible to all peers on the network to ensure the immutability of votes.

**Criticality**

This information needs to be displayed in a clean and concise manner. It is critical that the user is provided with the essential information of the election, such as the candidates&#39; names and total votes per candidate.

**Technical Issues**

An effective way to portray large amounts of data is to use graphs. A separate system may be developed to create graphs that suit the projects needs dynamically.

**Dependencies**

This function is dependent on the election candidates user information and will directly communicate with the blockchain structure to receive the total amount of votes for that election.

## 3.6 Create an election

**Description**

Each user will also have the functionality to create their own election/vote for any reason. The website will have an election creation page that will prompt the user for all the necessary information to create their own election. The user that creates the election will have elevated privileges to ban any user from their election. They may also lock, remove or end their election.

**Criticality**

This feature is critical to the functionality of the system as without the ability to create elections there would be nothing to vote on.

**Technical Issues**

This feature needs to be developed in a way that doesn&#39;t allow multiple elections to be created by a single user at any given time. This improves the readability of the site and reduces empty or dormant elections from clogging the election list.

**Dependencies**

This function does not have any dependencies.

## 3.7 Search &amp; view previous elections

**Description**

Each election will have a unique name and identifier which can be used in the search box to find a specific election quickly. The system will initially load every election in progress (by order of total votes descending), but can be filtered using the election details (like date created) or by entering key words in the search box.

**Criticality**

This feature needs to allow the user to navigate every election on the site quickly and with ease.

**Technical Issues**

The effectiveness of finding the correct election on the viewing page is directly proportional to the effectiveness of the search system.

**Dependencies**

This function is dependent on the current elections, as well as all the information encapsulated within each election (for formatting).

## 3.8 End election

**Description**

This feature allows the creator of the election (or a moderator) to end the election at a certain date &amp; time or immediately at their discretion.

**Criticality**

This feature is essential to the system to ensure that elections do not last forever. Deadlines encourage users to vote on the election faster and therefore allow for a swifter electoral process.

**Technical Issues**

Only admins with elevated privileges or the creator of the election must have access to terminate the election. A secure account tier system must be implemented to achieve different user permissions.

**Dependencies**

This function requires an active election with sufficient permissions to terminate it.

## 3.9 Membership

**Description**

The system needs to be able to provide exclusive access for an election to a specific group, such as a society in DCU and not allow any users outside of this group to vote in it. A membership system would allow the creator of the election to select a single group of users to be allowed to vote in it.

**Criticality**

This feature isn&#39;t essential but would add very useful functionality to the system for users that don&#39;t want open elections.

**Technical Issues**

There needs to be an accurate way to identify that someone is in a certain group, such as a member of DCU or more specifically, a certain society within DCU.

**Dependencies**

This function is dependent on the user having an efficient way to identify themselves remotely.

# 4. System Architecture

**Website**

The website is the frontend user-interface for the user. Users will navigate to the website to use the voting system. It provides an easy way for users to interact with the backend software. The website will feature JavaScript/jQuery scripts for making asynchronous AJAX requests.

**Database**

The database will store the information about elections, users and votes. It serves as a bridge between the website frontend and the blockchain contracts.

**Python - Flask**

Flask is a Python web framework. It will be used to handle requests, interact with the database and render web pages.

**Solidity contracts**

Solidity contracts will handle the logic for giving votes to a user, voting for a candidate, calculating the election winner and delegating voting permissions. Solidity contracts will run on the blockchain.

**Blockchain**

The Solidity contracts will be stored and executed on the blockchain. It provides the decentralization of the application.

**Metamask**

Metamask will be used to interact with the local Ethereum blockchain. It acts as a transaction wallet and allows developers &amp; users to make transactions without the use of real cryptocurrency.

## 5. High-Level Design

In this section we further illustrate the voting system with the use of a data-flow diagram and a context diagram.

Below is a Data Flow Diagram of the entire decentralized voting system. It illustrates the processes that users of the system can make, and how the data is used in the system.

![Data flow diagram](https://raw.githubusercontent.com/xy3/Devote-UI/master/img/data-flow.png)

## Context Diagram for Election Privileges

![Context diagram](https://raw.githubusercontent.com/xy3/Devote-UI/master/img/context.png)

## 6. Preliminary Schedule

Below is a preliminary Gantt chart illustrating our aim for start and end dates for the project tasks and goals. The start and end dates could possibly change along the way due to certain tasks being more or less difficult than we had estimated.

![Gantt Chart](https://raw.githubusercontent.com/xy3/Devote-UI/master/img/gantt.png)


## 7. Appendices

Ethereum developer resources

[https://ethereum.org/developers/](https://ethereum.org/developers/)

Solidity documentation

[https://solidity.readthedocs.io/](https://solidity.readthedocs.io/)

Metamask

[https://metamask.io/](https://metamask.io/)

Ethereum

[https://ethereum.org/](https://ethereum.org/)

Web3 JS documentation

[https://web3js.readthedocs.io/](https://web3js.readthedocs.io/)