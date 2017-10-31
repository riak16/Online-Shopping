
CREATE TABLE user(
	userId int NOT NULL,
	password varchar(50) NOT NULL,
	PRIMARY KEY (userId)
);

CREATE TABLE customer(
	firstName varchar(50) NOT NULL,
	lastName varchar(50) NOT NULL,
	email varchar(50) NOT NULL,
	address varchar(50) NOT NULL
);

CREATE TABLE product (
	productId int NOT NULL,
	discount int NOT NULL,
	price int NOT NULL,
	image varchar(50) NOT NULL,
	productName varchar(50) NOT NULL,
	description varchar(50) NOT NULL,
	PRIMARY KEY (productId)
);

CREATE TABLE bankInformation(
	bankNmae varchar(50) NOT NULL,
	AccountNo varchar(50) NOT NULL,
	amt int NOT NULL,
	accountHolderName varchar(50) NOT NULL
);

CREATE TABLE orderTable (
	orderId int NOT NULL,
	shipping_info varchar(50) NOT NULL,
	deliveryDate varchar(50) NOT NULL,
	PRIMARY KEY (orderId)
);

CREATE TABLE views (
	recommendation varchar(50) NOT NULL,
	customerId int NOT NULL,
	productId int NOT NULL,
	FOREIGN KEY (customerId) REFERENCES user(userId) on delete cascade on update cascade,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
	PRIMARY KEY (customerId, productId)
);



CREATE TABLE history(
	productId int NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
);


CREATE TABLE shoppingCart(
	customerId int NOT NULL,
	orderId int NOT NULL,
	quantity int NOT NUlL,
	totalCost int NOT NUlL,
	FOREIGN KEY (customerId) REFERENCES user(userId) on delete cascade on update cascade,
	FOREIGN KEY (orderId) REFERENCES orderTable(orderId) on delete cascade on update cascade,
	PRIMARY KEY (customerId, orderId)
);

CREATE TABLE men(
	productId int NOT NULL,
	size varchar(25) NOT NULL,
	brand varchar(25) NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
);

CREATE TABLE women(
	productId int NOT NULL,
	size varchar(25) NOT NULL,
	brand varchar(25) NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
);

CREATE TABLE children(
	productId int NOT NULL,
	size varchar(25) NOT NULL,
	brand varchar(25) NOT NULL,
	FOREIGN KEY (productId) REFERENCES product(productId) on delete cascade on update cascade,
 	PRIMARY KEY (productId)
);

