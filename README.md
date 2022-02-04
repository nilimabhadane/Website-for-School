******************************** Website-for-School*********************************

****ABOUT PROJECT****

Develop a website which keeps the record of various academic activities at school including student and teacher information.

Admin Module Design

In this website administrator can register all the students and teachers in the school. Admin is responsible to maintain the database in which student, teacher information is present.

•	Add teacher information (like name, joining date, subject to teach, education etc.)

•	Add student information (like name, standard, division, login ID and password )

•	Add user(login ID and Password of teacher)

•	Add events(Upcoming events going on school)

In this module administrator can also update all this information and delete it.


Teacher Module Design

Teacher module is according to their respected subject. To interact with this website teacher needs authentication, administrator provides login details for every teacher in the school.

After successful login, teacher can fill following details:

• 	Attendance of students.

• 	Complaints about students.

• 	Fill up the marks.


Parent Module Design

Parents need to get the login details from the administrator to view the details of their child.
  
  After successful login parent can:
  
•	Check attendance.

•	Parents can analyze the results of their child

•	Event notifications.

•	Check complaints of their child.


****HOW TO RUN PROJECT****


To run this project you must have installed a virtual server i.e XAMPP on your PC.


After Starting Apache and MySQL in XAMPP, follow the following steps

1st Step: Extract file

2nd Step: Copy the main project folder

3rd Step: Paste in xampp/htdocs/


Now Connecting Database


4th Step: Open a browser and go to URL “http://localhost/phpmyadmin/”

5th Step: Then, click on the databases tab

6th Step: Create a database naming “school” and then click on the import tab

7th Step: Click on browse file and select “school.sql” file which is inside the “db” folder

8th Step: Click on go.


After Creating Database,


9th Step: Open a browser and go to URL 

“http://localhost:8080/school/" -> for user module

"http://localhost:8080/school/admin/" -> for admin module

"http://localhost:8080/school/teacher/" -> for teacher module


****************************************************************************************************************************************


