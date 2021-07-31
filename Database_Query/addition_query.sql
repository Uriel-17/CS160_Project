USE cs160project;

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
	SELECT * FROM course WHERE userId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetCoursesByCategoryId(IN id INT)
BEGIN
	SELECT * FROM course WHERE categoryId = id;
END $$
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE CreateCourse(IN newcoursetTitle VARCHAR(200),
IN newdescription VARCHAR(2000),
IN newcategoryId INT,
IN newauthor VARCHAR(100),
IN newuserId INT,
IN newurl VARCHAR(1000),
IN newimage VARCHAR(1000),
IN newcreatetime DATETIME,
IN newupdatetime DATETIME)
BEGIN
	INSERT INTO course (courseTitle, description, categoryId, author, userId, url, image, createtime, updatetime)
    VALUES (newcourseTitle, newdescription, newcategoryId, newauthor, newuserId, newurl, newimage, newcreatetime, newupdatetime);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE UpdateCourse(IN id INT, IN newcoursetTitle VARCHAR(200),
IN newdescription VARCHAR(2000),
IN newcategoryId INT,
IN newauthor VARCHAR(100),
IN newurl VARCHAR(1000),
IN newimage VARCHAR(1000),
IN newupdatetime DATETIME)
BEGIN
	UPDATE course
    SET courseTitle = newcoursetTitle,
		description = newdescription,
        categoryId = newcategoryId,
        author = newauthor,
        url = newurl,
        image = newimage,
        updatetime = newupdatetime
    WHERE courseId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE DeleteCourse(IN id INT)
BEGIN
	DELETE FROM course WHERE courseId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetRatingByUserId(IN id INT)
BEGIN
	SELECT * FROM rating WHERE userId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetRatingByCourseId(IN id INT)
BEGIN
	SELECT * FROM rating WHERE courseId = id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE GetRating(IN _userId INT, IN _courseId INT)
BEGIN
	SELECT * FROM rating WHERE userId = _userId AND courseId = _courseId;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE CreateRating(IN newuserId INT, IN newcourseId INT, IN newratescore INT, IN newcreatetime DATETIME, IN newupdatetime DATETIME)
BEGIN
	INSERT INTO rating (userId, courseId, ratescore, createtime, updatetime)
    VALUES (newuserId, newcourseId, newratescore, newcreatetime, newupdatetime);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE UpdateRating(IN _userId INT, IN _courseId INT, IN newratescore INT, IN newupdatetime DATETIME)
BEGIN
	UPDATE rating
    SET ratescore = newratescore,
    updatetime = newupdatetime
    WHERE userId = _userId AND courseId = _courseId;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE DeleteRating(IN _userId INT, IN _courseId INT)
BEGIN
	DELETE FROM rating WHERE userId = _userId AND courseId = _courseId;
END $$
DELIMITER ;
