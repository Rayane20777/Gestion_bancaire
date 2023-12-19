CREATE DATABASE IF NOT EXISTS Bank_8;
USE Bank_8;

-- Address Table
CREATE TABLE IF NOT EXISTS address (
    id VARCHAR(50) PRIMARY KEY,
    city VARCHAR(50),
    district VARCHAR(50),
    street VARCHAR(50),
    postal_code VARCHAR(10),
    email VARCHAR(50),
    telephone INT,
    date TIMESTAMP
);

-- Permission Taqle
CREATE TABLE IF NOT EXISTS permission (
    id VARCHAR(50) PRIMARY KEY,
    name VARCHAR(50),
    description VARCHAR(255)

);


-- Role Table
CREATE TABLE IF NOT EXISTS role (
    name VARCHAR(50) PRIMARY KEY
);




-- Bank Table
CREATE TABLE IF NOT EXISTS bank (
    id VARCHAR(50) PRIMARY KEY,
    name VARCHAR(20) UNIQUE,
    logo VARCHAR(100)
);

-- Agency Table
CREATE TABLE IF NOT EXISTS agency (
    id VARCHAR(50) PRIMARY KEY,
    longitude VARCHAR(20),
    latitude VARCHAR(20),
    bank_id VARCHAR(50),
    address_id VARCHAR(50),
    FOREIGN KEY (bank_id) REFERENCES bank(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (address_id) REFERENCES address(id) ON DELETE CASCADE ON UPDATE CASCADE


);

-- Distributer Table
CREATE TABLE IF NOT EXISTS atm (
    id VARCHAR(50) PRIMARY KEY,
    longitude VARCHAR(20),
    latitude VARCHAR(20),
    address VARCHAR(100),
    bank_id VARCHAR(50),
    FOREIGN KEY (bank_id) REFERENCES bank(id) ON DELETE CASCADE ON UPDATE CASCADE
);



CREATE TABLE IF NOT EXISTS user (
    id VARCHAR(50) PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    nationality VARCHAR(50),
    gender VARCHAR(50),
    address_id VARCHAR(50),
    agency_id VARCHAR(50),
    date TIMESTAMP,
    FOREIGN KEY (address_id) REFERENCES address(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (agency_id) REFERENCES agency(id) ON DELETE CASCADE ON UPDATE CASCADE

);

-- Account Table
CREATE TABLE IF NOT EXISTS account (
    id VARCHAR(50) PRIMARY KEY,
    rib VARCHAR(20),
    currency VARCHAR(10),
    balance DECIMAL(10,2),
    user_id VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE
  );  
   -- Account_courant Table
CREATE TABLE IF NOT EXISTS account_courant (
    id VARCHAR(50) PRIMARY KEY,
    account_id VARCHAR(50),
 FOREIGN KEY (account_id) REFERENCES account(id) ON DELETE CASCADE ON UPDATE CASCADE
);

   -- Account_epargne Table
CREATE TABLE IF NOT EXISTS account_epargne (
    id VARCHAR(50) PRIMARY KEY,
    account_id VARCHAR(50),
 FOREIGN KEY (account_id) REFERENCES account(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Transaction Table
CREATE TABLE IF NOT EXISTS transaction (
    id VARCHAR(50) PRIMARY KEY,
    type ENUM('credit', 'debit'),
    amount DECIMAL(10,2),
    account_id VARCHAR(50),
    FOREIGN KEY (account_id) REFERENCES account_courant(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS roleOfUser (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT;,
    role_id VARCHAR(50),
    user_id VARCHAR(50),
    FOREIGN KEY (role_id) REFERENCES role(name) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS permissionOfRole (
    id VARCHAR(50) PRIMARY KEY,
    permission_id VARCHAR(50),
    role_id VARCHAR(50),
    FOREIGN KEY (permission_id) REFERENCES permission(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (role_id) REFERENCES role(name) ON DELETE CASCADE ON UPDATE CASCADE
);


