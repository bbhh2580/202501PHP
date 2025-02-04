-- 创建表
CREATE TABLE `students` (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(100),
`age` TINYINT UNSIGNED,
`grade` VARCHAR(10)
) COMMENT='学生表';

-- 添加数据到表中
INSERT INTO `students` (`name`, `age`, `grade`) VALUES ('张三', 18, 'A');

-- 查询当前表(students)的所有数据
SELECT * FROM `students`;

-- 只查询需要的数据的时候, 在 SELECT 关键字后面写上对应的字段名就可以了
-- 一般情况下推荐大家用这种办法查询, 只获取需要的信息. 执行速度比 SELECT * ... 要快
SELECT `name`, `grade` FROM `students`;


SELECT `name`, `grade` FROM `students` WHERE `grade` = 'B';
SELECT `name`, `grade`, `age` FROM `students` WHERE `grade` = 'B' AND `age` < '12';

UPDATE `student` SET `grade` = 'C' WHERE `name` = '王五';

DELETE FROM `students` WHERE `name` = '六二';

SELECT * FROM students WHERE name LIKE '章%';

CREATE TABLE `courses` (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(100)
) COMMENT='课程表';

INSERT INTO `courses` (`id`, `name`) VALUES (101, 'math');
INSERT INTO `courses` (`id`, `name`) VALUES (102, 'japanese');
INSERT INTO `courses` (`id`, `name`) VALUES (103, 'computer');

CREATE TABLE `student_courses` (
`student_id` INT AUTO_INCREMENT PRIMARY KEY,
`course_id` VARCHAR(100)
) COMMENT='学生课程关系表';

INSERT INTO `student_courses` (`student_id`, `course_id`) VALUES (1, 101);
INSERT INTO `student_courses` (`student_id`, `course_id`) VALUES (2, 102);
INSERT INTO `student_courses` (`student_id`, `course_id`) VALUES (3, 103);

SELECT `students`.`name` AS `students_name`,`courses`.`name` AS `courses_name` FROM `students`
INNER JOIN `student_courses` ON `students`.`id` = `student_courses`.`student_id`
INNER JOIN `courses` ON `student_courses`.`course_id` = `courses`.`id`;

SELECT students.name AS student_name, courses.name AS course_name FROM students
LEFT JOIN student_courses ON students.id = student_courses.student_id
LEFT JOIN courses ON student_courses.course_id = courses.id;

SELECT students.name AS student_name, courses.name AS course_name FROM students
RIGHT JOIN student_courses ON students.id = student_courses.student_id
RIGHT JOIN courses ON student_courses.course_id = courses.id;

SELECT COUNT(*) AS `total_students` FROM `students` WHERE `grade` = 'C';

SELECT SUM(`age`) AS `total_age` FROM `students`;

SELECT AVG(`age`) AS `average_age` FROM `students`;

SELECT MAX(age) AS max_age, MIN(age) AS min_age FROM students;

SELECT grade, COUNT(*) AS total_students FROM students GROUP BY grade;

SELECT * FROM students ORDER BY age ASC;

SELECT name, age FROM students LIMIT 3;

EXPLAIN SELECT * FROM students WHERE age > 18;

SELECT * FROM students WHERE id IN (SELECT student_id FROM student_courses);

SELECT * FROM students WHERE id IN (1, 2);

SELECT * FROM students WHERE age BETWEEN 19 AND 10;

SELECT DISTINCT grade FROM students;


