/*
 Description:

In this assignment, you will be working with a fictional database of a company named "XYZ Corp." The database contains two tables, employees and departments. Your task is to write SQL commands to retrieve and manipulate data from these tables.


 
Instructions:

Use the employees table to answer the following questions:

a. Write a query to select all columns and rows from the employees table.

b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.

c. Write a query to calculate the average salary of all employees.

d. Write a query to count the number of employees who work in the "Marketing" department.

e. Write a query to update the salary column of the employee with an id of 1001 to 60000.

f. Write a query to delete all employees whose salary is less than 30000.


 
Use the departments table to answer the following questions:

a. Write a query to select all columns and rows from the departments table.

b. Write a query to select only the name and manager columns of the "Finance" department.

c. Write a query to calculate the total number of employees in each department.

d. Write a query to insert a new department called "Research" with a manager named "John Doe".

 
Deliverables:

A text file containing all SQL commands written to answer the above questions.

A brief explanation of each SQL command and its purpose.


Note: You can assume that both tables have the following columns:

employees: id, name, age, salary, department_id

departments: id, name, manager 

*/



-- a. Write a query to select all columns and rows from the employees table.
select * from employees;

-- b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.
select name, salary from employees where salary > 50000;

-- c. Write a query to calculate the average salary of all employees.
select avg(salary) as avg_salary from employees;

-- d. Write a query to count the number of employees who work in the "Marketing" department.
select count(*) from employees JOIN departments on employees.department_id= departments.id where departments.name = "marketing";

-- e. Write a query to update the salary column of the employee with an id of 1001 to 60000.
UPDATE employees set salary = 60000 where id=1001;

-- f. Write a query to delete all employees whose salary is less than 30000.
DELETE from employees where salary < 30000;


-- departments table query

-- a. Write a query to select all columns and rows from the departments table.
select * from departments;


-- b. Write a query to select only the name and manager columns of the "Finance" department.
SELECT name, manager from departments where id=4;


-- c. Write a query to calculate the total number of employees in each department.
select count(employees.id) as total_employees, departments.name as department_name from employees right join departments on employees.department_id = departments.id GROUP BY departments.id;


-- d. Write a query to insert a new department called "Research" with a manager named "John Doe".
insert into departments (name, manager) values ("Research", "John Doe");