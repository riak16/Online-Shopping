-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 14, 2011 at 02:45 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE 'user'(
	'userId' varchar(50) NOT NULL,
	'password' varchar(50) NOT NULL,
	PRIMARY KEY (userId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'customer'(
	'firstName' varchar(50) NOT NULL,
	'lastName' varchar(50) NOT NULL,
	'email' varchar(50) NOT NULL,
	'address' varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'views' (
	recommendation varchar(50) NOT NULL,
	customerId int NOT NULL,
	productId int NOT NULL,
	FOREIGN KEY (customerId) REFERENCES customer(customerId) on delete cascade on update cascade,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
	PRIMARY KEY (customerId, productId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'product' (
	productId int NOT NULL,
	discount int NOT NULL,
	price int NOT NULL,
	image varchar(50) NOT NULL,
	productName varchar(50) NOT NULL,
	description varchar(50), NOT NULL,
	PRIMARY KEY (productId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'history'(
	productId int NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'bankInformation'(
	bankNmae varchar(50) NOT NULL,
	AccountNo varchar(50) NOT NULL,
	amt int NOT NULL,
	accountHolderName varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'order'(
	orderId int NOT NULL,
	shipping_info varchar(100) NOT NULL,
	date_of_delivery DATE NOT NULL,
	PRIMARY KEY (orderId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'shoppingCart'(
	customerId int NOT NULL,
	orderId int NOT NULL,
	quantity int NOT NUlL,
	totalCost int NOT NUlL,
	FOREIGN KEY (customerId) REFERENCES customer(customerId) on delete cascade on update cascade,
	FOREIGN KEY (orderId) REFERENCES order(orderId) on delete cascade on update cascade,
	PRIMARY KEY (customerId, orderId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'men'(
	productId int NOT NULL,
	size varchar(25) NOT NULL,
	brand varchar(25) NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'women'(
	productId int NOT NULL,
	size varchar(25) NOT NULL,
	brand varchar(25) NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'children'(
	productId int NOT NULL,
	size varchar(25) NOT NULL,
	brand varchar(25) NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

