SELECT employees FROM Employee_21200301424  WHERE ( name LIKE 'S%' or name LIKE 'M%') and (name NOT LIKE '%m' or name NOT LIKE '%n');


select count(*) as total_no_of_employees, Employee_21200301424.Div_code from emp inner join Division_Your on emp.DEPTNO = dept.DEPTNO group by Employee_21200301424.Div_code


ALTER TABLE Employee_21200301424 ADD named VARCHAR(30), publisher VARCHAR(30);


ALTER TABLE Employee_21200301424 RENAME COLUMN ID TO ISBN;