--comments will describe the preceding action
CREATE TABLE departments (
department_id int NOT NULL AUTO_INCREMENT,
department_name varchar(255) NOT NULL,
PRIMARY KEY (department_id)
ENGINE=InnoDB;
--create departments table
CREATE TABLE course (
course_id int NOT NULL AUTO_INCREMENT,
course_title varchar(255) NOT NULL,
course_department int DEFAULT NULL,
credit_hours float NOT NULL,
PRIMARY KEY (course_id),
FOREIGN KEY (course_department) REFERENCES departments(department_id)
) Engine=InnoDB;
--create course table
CREATE TABLE textbooks (
textbook_id int NOT NULL AUTO_INCREMENT,
title varchar(255) NOT NULL,
author varchar(255) NOT NULL,
cost float NOT NULL,
edition int NOT NULL,
year_published int(4) NOT NULL,
number_pages int(5) NOT NULL,
publisher varchar(255) NOT NULL,
course_id int DEFAULT NULL,
PRIMARY KEY (textbook_id),
FOREIGN KEY (course_id) REFERENCES course(course_id)
) Engine=InnoDB;
--create textbooks table
INSERT INTO departments (
department_name
) VALUES
('Mathematics'),
('English'),
('Chemistry'),
('Physics'),
('Art');
--creating values for the departments table
INSERT INTO course (
course_title,
department_id,
credit_hours
) VALUES
('Calculus', (SELECT department_id FROM departments WHERE department_name = 'Mathematics'), '4.0'),
('Intro to Thermodynamics', (SELECT department_id FROM departments WHERE department_name = 'Physics'), '4.0'),
('Organic Biochemistry', (SELECT department_id FROM departments WHERE department_name = 'Chemistry'), '4.0'),
('British Literature I', (SELECT department_id FROM departments WHERE department_name = 'English'), '3.0'),
('Studio Art I', (SELECT department_id FROM departments WHERE department_name = 'Art'), '2.0');
--creating values for/adding 5 rows to course table
INSERT INTO textbooks (
title,
author,
cost,
edition,
year_published,
number_pages,
publisher,
course_id
) VALUES
('Thermodynamics are Cool', 'Albert Einstein', '342.95', '3', '1924', '3524', 'Harvard University Press', (SELECT course_id FROM course WHERE course_title = 'Intro to Thermodynamics')),
('Thermodynamics 101', 'Physics Guy', '643.43', '1', '2004', '232', 'Random House', (SELECT course_id FROM course WHERE course_title = 'Intro to Thermodynamics')),
('Hamlet', 'William Shakespeare', '15.32', '1', '1609', '123', 'Gutenberg Press', (SELECT course_id FROM course WHERE course_title = 'British Literature I')),
('Beowulf', 'Anglo-Saxon Poet', '14.54', '5', '1000', '321', 'Gutenberg Press', (SELECT course_id FROM course WHERE course_title = 'British Literature I')),
('Chemistry is Cool', 'Kurt Alder', '423.43', '3', '1934', '3242', 'Oxford University Press', (SELECT course_id FROM course WHERE course_title = 'Organic Biochemistry')),
('Chemistry is Way Cool', 'Joseph Priestley', '421.54', '2', '1994', '432', 'Penguin', (SELECT course_id FROM course WHERE course_title = 'Organic Biochemistry')),
('Calculus is Fun', 'Math Guy', '653.32', '3', '1989', '4231', 'Harcourt', (SELECT course_id FROM course WHERE course_title = 'Calculus')),
('Calculus is Amazing', 'Isaac Newton', '834.21', '2', '1004', '4123', 'Newton Press', (SELECT course_id FROM course WHERE course_title = 'Calculus')),
('How to Art', 'Claude Monet', '348.21', '5', '1837', '432', 'Art Press', (SELECT course_id FROM course WHERE course_title = 'Studio Art I')),
('Art is the Best', 'Vincent van Gogh', '413.64', '4', '1789', '132', 'Van Gogh Press', (SELECT course_id FROM course WHERE course_title = 'Studio Art I'));
--creating values for/adding 10 rows to textbooks table
SELECT course_title FROM course ORDER BY course_title;
--names all courses in alphabetical order by course title
SELECT course.course_title, course.department_id, departments.department_id, departments.department_name 
FROM departments 
INNER JOIN course ON departments.department_id = course.department_id
WHERE course.course_title IN ('Calculus', 'British Literature I','Studio Art I');
--returns name and department for all courses that are not in the sciences
SELECT CONCAT(author,'; ',title,' (',publisher,': ',year_published,')') AS Books FROM textbooks ORDER BY author;
--displays summary information for each book in bibliographic format in order by author name
SELECT textbooks.title, textbooks.author, departments.department_id, departments.department_name
FROM departments INNER JOIN course ON departments.department_id = course.department_id
INNER JOIN textbooks ON course.course_id = textbooks.course_id
ORDER BY departments.department_name, textbooks.author;
--displays title and author of every book in order by department
SELECT MAX(number_pages), title, author, publisher FROM textbooks;
--displays title, author and publisher of longest book
SELECT COUNT(title) FROM textbooks WHERE course_id = '1';
--counts number of books for course 1
SELECT COUNT(title) FROM textbooks WHERE course_id = '2';
--counts number of books for course 2
SELECT COUNT(title) FROM textbooks WHERE course_id = '3';
--counts number of books for course 3
SELECT COUNT(title) FROM textbooks WHERE course_id = '4';
--counts number of books for course 4
SELECT COUNT(title) FROM textbooks WHERE course_id = '5';
--counts number of books for course 5
SELECT course_id, AVG(cost) FROM textbooks GROUP BY course_id;
--displays average cost of books for each course and displays the results in order by course ID
