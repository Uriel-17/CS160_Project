CREATE DATABASE cs160project;

USE cs160project;

/*
AccountType table and its stored procedures
*/
CREATE TABLE accountType (
	accountTypeId INT NOT NULL PRIMARY KEY,
    accountTypeName VARCHAR(20)
);

/*
Create the main 3 account types.
*/
INSERT INTO accountType VALUES (1, 'Basic User');
INSERT INTO accountType VALUES (2, 'Content Creator');
INSERT INTO accountType VALUES (3, 'Administrator');

/*
User table and its stored procedures
*/
CREATE TABLE user (
	userId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password CHAR(64) NOT NULL,
    accountTypeId INT DEFAULT 1,
    profileImage VARCHAR(500),
    fullname VARCHAR(50) NOT NULL,
    dateofbirth DATETIME,
    email VARCHAR(100),
    phonenumber VARCHAR(15),
    status BOOL DEFAULT TRUE,
    createtime DATETIME,
    updatetime DATETIME,
    CONSTRAINT user_unique UNIQUE (username),
    
    CONSTRAINT fk_accountType_user
    FOREIGN KEY (accountTypeId)
    REFERENCES accountType(accountTypeId)
		ON UPDATE CASCADE
        ON DELETE SET NULL
    );
    


/*
Address table and its stored procedures
*/
CREATE TABLE address (
	addressId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    addressType VARCHAR(20) DEFAULT 'Home',
    streetAddress VARCHAR(500) NOT NULL,
    secondAddress VARCHAR(100),
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    zipcode INT NOT NULL,
    country VARCHAR(100) NOT NULL DEFAULT 'United States',
    userId INT NOT NULL,
    CONSTRAINT fk_user_address
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE CASCADE
);


/*
Category table and its stored procedures
*/
CREATE TABLE category (
	categoryId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    categoryname VARCHAR(100) NOT NULL,
    description VARCHAR(1000),
    image VARCHAR(500),
    priority INT NOT NULL DEFAULT 1,
    createtime DATETIME,
    updatetime DATETIME
    );

/*
Course table and its stored procedures
*/
CREATE TABLE course (
	courseId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	courseTitle VARCHAR(200) NOT NULL,
    description VARCHAR(2000),
    categoryId INT,
    author VARCHAR(100) NOT NULL DEFAULT 'Anonymous',
    userId INT NOT NULL,
    url VARCHAR(1000),
    image VARCHAR(1000),
	createtime DATETIME,
    updatetime DATETIME,
    CONSTRAINT fk_category_course
    FOREIGN KEY (categoryId)
    REFERENCES category(categoryId)
		ON UPDATE CASCADE
        ON DELETE SET NULL,
        
	CONSTRAINT fk_user_course
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE CASCADE
    );
    

/*
Comment table and its stored procedures
*/
CREATE TABLE comment (
	commentId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userId INT NOT NULL,
    courseId INT NOT NULL,
    detail VARCHAR(2000) not null,
    createtime DATETIME,
    updatetime DATETIME,
    CONSTRAINT fk_user_comment
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE CASCADE,
	
    CONSTRAINT fk_course_comment
    FOREIGN KEY (courseId)
    REFERENCES course(courseId)
		ON UPDATE CASCADE
        ON DELETE CASCADE
    );

/*
Rating table and its stored procedures
*/
CREATE TABLE rating (
    userId INT NOT NULL,
    courseId INT NOT NULL,
    ratescore INT NOT NULL,
    createtime DATETIME,
    updatetime DATETIME,
    
    PRIMARY KEY (userId, courseId),
    
    CONSTRAINT fk_user_rating
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE CASCADE,
        
	CONSTRAINT fk_course_rating
    FOREIGN KEY (courseId)
    REFERENCES course(courseId)
		ON UPDATE CASCADE
        ON DELETE CASCADE
);

/*
Report table and its stored procedures
*/
CREATE TABLE report (
	reportId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userId INT NOT NULL,
    courseId INT NOT NULL,
    detail VARCHAR(2000) NOT NULL,
    createtime DATETIME,
    updatetime DATETIME,
    CONSTRAINT fk_user_report
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE CASCADE,
        
	CONSTRAINT fk_course_report
    FOREIGN KEY (courseId)
    REFERENCES course(courseId)
		ON UPDATE CASCADE
        ON DELETE CASCADE
);

/*
Watch table and its stored procedures
*/
CREATE TABLE watch (
	watchId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userId INT,
    courseId INT NOT NULL,
    createtime DATETIME,
    CONSTRAINT fk_user_watch
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE SET NULL, 
        
	CONSTRAINT fk_course_watch
    FOREIGN KEY (courseId)
    REFERENCES course(courseId)
		ON UPDATE CASCADE
        ON DELETE CASCADE
);

/*
Saved Course table and its stored procedures
*/
CREATE TABLE savedCourse (
	userId INT NOT NULL,
    courseId INT NOT NULL,
    createtime DATETIME,
    PRIMARY KEY (userId, courseId),
    
    CONSTRAINT fk_user_savedCourse
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE CASCADE, 
        
	CONSTRAINT fk_course_savedCourse
    FOREIGN KEY (courseId)
    REFERENCES course(courseId)
		ON UPDATE CASCADE
        ON DELETE CASCADE
);

/*
Feedback table and its stored procedures
*/
CREATE TABLE feedback (
	feedbackId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userId INT,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    detail VARCHAR(2000) NOT NULL,
    createtime DATETIME,
    
    CONSTRAINT fk_user_feedback
    FOREIGN KEY (userId)
    REFERENCES user(userId)
		ON UPDATE CASCADE
        ON DELETE SET NULL
);
