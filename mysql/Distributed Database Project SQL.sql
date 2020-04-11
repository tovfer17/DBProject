create database testingDB;
use testingDB;

create table contactInfo
(
    email				varchar(50) NOT NULL, #email of potential buyer
    fname				varchar(35) NOT NULL, #first name of potential buyer
    lname				varchar(50) NOT NULL, #last name of potential buyer
    phone  				varchar(13) NOT NULL, #phone of potential buyer
    streetaddress		varchar(50) NOT NULL, #street address of potential buyer
    city				varchar(50) NOT NULL, #city of potential buyer
    state				varchar(50) NOT NULL, #state of potential buyer
    zipcode				varchar(5) NOT NULL,   #zipcode of potential buyer
    
    PRIMARY KEY (email)
);

create table employee
(
	emp_no			varchar(6), #Unique id for product
    fname			varchar(50) NOT NULL, #first name
    lname			varchar(50) NOT NULL, #last name
    email			varchar(100) NOT NULL, #email
    password		varchar(20) NOT NULL, #password
    
    PRIMARY KEY	(emp_no)
);

create table customeracc
(
    fname			varchar(50) NOT NULL, #first name
    lname			varchar(50) NOT NULL, #last name
    email			varchar(100) NOT NULL, #email
    username		varchar(50) NOT NULL, #username used for login
    password		varchar(20) NOT NULL, #password
    
    PRIMARY KEY	(username)
);
create table customer
(
	cust_no				varchar(6), #Unique id for product
    fname				varchar(50) NOT NULL, #first name
    lname				varchar(50) NOT NULL, #last name
    email				varchar(100) NOT NULL, #email
    
    PRIMARY KEY	(cust_no)
);

SELECT * FROM employee;
SELECT * FROM customer;
SELECT * FROM customeracc;
SELECT * FROM contactInfo;