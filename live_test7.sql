-- Please write an sql query that retrieves the names and ages of all students from a table called students where the age is between 18 and 25, order by age in ascending order.

-- creating table for retrieve the name and age
create table students(
    id int primary key auto_increment,
    name varchar(50),
    age int
);


-- solution query
SELECT name, age FROM students WHERE age BETWEEN 18 AND 25 ORDER BY age ASC;