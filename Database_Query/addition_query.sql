USE cs160project;

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