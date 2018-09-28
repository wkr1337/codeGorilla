use test1;
create table Users (
	ID int NOT NULL AUTO_INCREMENT,
	isOwner boolean NOT NULL,
	firstName varchar(100) NOT NULL,
	surName varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	country varchar(100),
	city varchar(100),
	address varchar(100),
	telephone varchar(20),
	gender boolean,
	hasPets boolean,
	allowPets boolean,
	smokes boolean,
	allowSmokers boolean,
	startDate DATE NOT NULL,
	endDate date NOT NULL,
	comments varchar(200),
        password varchar(100) NOT NULL,
	PRIMARY KEY (ID)
	);
	