# Flexmoney_Assignment

## Problem Statement
Assume that you are the CTO for the outsourcing firm which has been chosen to build an admission form for the Yoga Classes which happen every month. 
Requirements for the admission form are:
    - Only people within the age limit of 18-65 can enroll for the monthly classes and they will be paying the fees on a month on month basis. 
    i.e. an individual will have to pay the fees every month and he can pay it any time of the month.
    - They can enroll any day but they will have to pay for the entire month. The monthly fee is 500/- Rs INR.
    - There are a total of 4 batches a day namely 6-7AM, 7-8AM, 8-9AM and 5-6PM. The participants can choose any batch in a month and can move to any other batch next month. i.e. participants can shift from one batch to another in different months but in same month they need to be in same batch.

## Solution
The solution is built using HTML,CSS and PHP. The solution is divided into 2 parts:
    - Backend
    - Frontend

### Backend
The backend is built using PHP and MySQL. The backend consists of the database and the PHP files.

#### Database
The database is built using MySQL. The database has 2 tables:
    - Users
    - Payments

##### Users
The users table has the following fields:
    - id
    - name
    - email
    - phone
    - age
    - gender
    - batch
    - date

##### Payments
The payments table has the following fields:
    - id
    - user_id
    - amount
    - date

### Frontend
The frontend is built using HTML and CSS. The frontend has 2 pages:
    - index.php
    - payment.php

#### index.php
The index.php page is the home page of the application. It has the following features:
    - It has a form to add a new user.
    - It has a table to display the list of users.
    - It has a button to add a new payment for a user.

#### payment.php
The payment.php page is the payment page of the application. It has the following features:
    - It has a mock function named CompletePayment() which accepts the details of user and payment and does the payment for you.

## How to run the application
The application can be run using the following steps:
    - Clone the repository
    - Create a database in MySQL
    - Import the database.sql file into the database
    - Update the database credentials in the config.php file
    - Run the application using the following command:
        - php -S localhost:8000

## How to use the application
The application can be used using the following steps:
    - Open the application in the browser
    - Click on the "Add User" button to add a new user
    - Click on the "Add Payment" button to add a new payment for a user

template from https://www.w3docs.com/tools/editor/5934