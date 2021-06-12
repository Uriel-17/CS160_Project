CREATE DATABASE cs160project;

USE cs160project;

/*
AccountType table and its stored procedures
*/
CREATE TABLE accountType (
	accountTypeId INT NOT NULL PRIMARY KEY,
    accountTypeName VARCHAR(20)
);

DELIMITER $$
CREATE PROCEDURE GetAllAccountTypes()
BEGIN
	SELECT * FROM accountType;
END $$
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE GetAccountTypeById(IN id INT)
BEGIN
	SELECT * FROM accountType WHERE accountTypeId = id;
END $$
DELIMITER ;

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
    

DELIMITER $$
CREATE PROCEDURE GetAllUsers()
BEGIN
	SELECT * FROM user;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetUserById(IN id INT)
BEGIN
	SELECT * FROM user WHERE userId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetUserByAccount(IN user_name VARCHAR(30), IN pass_word CHAR(64))
BEGIN
	SELECT * FROM user WHERE username = user_name AND password = pass_word;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE CreateUser(IN newusername VARCHAR(30),
							IN newpassword CHAR(64),
                            IN newaccountTypeId INT,
                            IN newprofileImage VARCHAR(500),
                            IN newfullname VARCHAR(50),
                            IN newdateofbirth DATETIME,
                            IN newemail VARCHAR(100),
                            IN newphonenumber VARCHAR(15),
                            IN newcreatetime DATETIME,
                            IN newupdatetime DATETIME)
BEGIN
	INSERT INTO user (username, password, accountTypeId, profileImage, fullname, dateofbirth, email, phonenumber, createtime, updatetime)
    VALUES (newusername, newpassword, newaccountTypeId, newprofileImage, newfullname, newdateofbirth, newemail, newphonenumber, newcreatetime, newupdatetime);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE UpdateUser(IN id INT,
                            IN newaccountTypeId INT,
                            IN newprofileImage VARCHAR(500),
                            IN newfullname VARCHAR(50),
                            IN newdateofbirth DATETIME,
                            IN newemail VARCHAR(100),
                            IN newphonenumber VARCHAR(15),
                            IN newupdatetime DATETIME)
BEGIN
	UPDATE user
    SET accountTypeId = newaccountTypeId,
		profileImage = newprofileImage,
		fullname = newfullname,
        dateofbirth = newdateofbirth,
        email = newemail,
        phonenumber = newphonenumber,
        updatetime = newupdatetime
    WHERE userId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE ChangePassword(IN id INT, IN newPassword CHAR(64))
BEGIN
	UPDATE user
    SET password = newPassword
    WHERE userId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE SetUserStatus(IN id INT, IN newStatus BOOL)
BEGIN
	UPDATE user
    SET status = newStatus
    WHERE userId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE DeleteUser(IN id INT)
BEGIN
	DELETE FROM user WHERE userId = id;
END $$
DELIMITER ;

/*
Address table and its stored procedures
*/
CREATE TABLE address (
	addressId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    addressType VARCHAR(20) DEFAULT 'Home',
    streetAddress VARCHAR(500) NOT NULL,
    secondAdress VARCHAR(100),
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

DELIMITER $$
CREATE PROCEDURE GetAddressById(IN id INT)
BEGIN
	SELECT * FROM address WHERE addressId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetAddressByUserId(IN id INT)
BEGIN
	SELECT * FROM address WHERE userId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE CreateAddress(IN newstreetAddress VARCHAR(500),
								IN newsecondAdress VARCHAR(100),
                                IN newcity VARCHAR(100),
                                IN newstate VARCHAR(100),
                                IN newzipcode INT,
                                IN newcountry VARCHAR(100),
                                IN newuserId INT)
BEGIN
	INSERT INTO address (streetAddress, secondAdress, city, state, zipcode, country, userId)
    VALUES (newstreetAddress, newsecondAdress, newcity, newstate, newzipcode, newcountry, newuserId);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE UpdateAddress(IN id INT,
								IN newstreetAddress VARCHAR(500),
								IN newsecondAdress VARCHAR(100),
                                IN newcity VARCHAR(100),
                                IN newstate VARCHAR(100),
                                IN newzipcode INT,
                                IN newcountry VARCHAR(100))
BEGIN
	UPDATE address
    SET streetAddress = newstreetAddress,
		secondAddress = newsecondAdress,
        city = newcity,
        state = newstate,
        zipcode = newzipcode,
        country = newcountry
    WHERE addressId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE DeleteAddress(IN id INT)
BEGIN
	DELETE FROM address WHERE addressId = id;
END $$
DELIMITER ;

CALL CreateUser('phuocdle', 'password', 3, 'phuoc_img.png', 'Phuoc Le', '1996-11-30 00:00:00', 'phuoc.d.le@sjsu.edu', '5103097934', '2021-06-11 06:32:33', '2021-06-11 06:32:33');
CALL CreateAddress('2274 Ellena Dr', 'Apt #4', 'Santa Clara', 'California', 95050, 'United States', 1);

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
    
DELIMITER $$
CREATE PROCEDURE GetAllCategories()
BEGIN
	SELECT * FROM category;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetCategoryById(IN id INT)
BEGIN
	SELECT * FROM category WHERE categoryId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE CreateCategory(IN newcategoryname VARCHAR(100), IN newdescription VARCHAR(1000), IN newimage VARCHAR(500), IN newpriority INT, IN newcreatetime DATETIME, IN newupdatetime DATETIME)
BEGIN
	INSERT INTO category (categoryname, description, image, priority, createtime, updatetime)
    VALUES (newcategoryname, newdescription, newimage, newpriority, newcreatetime, newupdatetime);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE UpdateCategory(IN id INT,
								IN newcategoryname VARCHAR(100),
                                IN newdescription VARCHAR(1000),
                                IN newimage VARCHAR(500),
                                IN newpriority INT,
                                IN newupdatetime DATETIME)
BEGIN
	UPDATE category
    SET categoryname = newcategoryname,
		description = newdescription,
        image = newimage,
        priority = newpriority,
        updatetime = newupdatetime
    WHERE categoryId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE DeleteCategory(IN id INT)
BEGIN
	DELETE FROM category WHERE categoryId = id;
END $$
DELIMITER ;

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
    
DELIMITER $$
CREATE PROCEDURE GetAllCourses()
BEGIN
	SELECT * FROM course;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetCourseById(IN id INT)
BEGIN
	SELECT * FROM course WHERE courseId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetCoursesByUserId(IN id INT)
BEGIN
	SELECT * FROM course WHERE courseId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetCoursesByCategoryId(IN id INT)
BEGIN
	SELECT * FROM course WHERE categoryId = id;
END $$
DELIMITER ;

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

