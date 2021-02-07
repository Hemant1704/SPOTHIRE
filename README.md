<h1 align = "center">SPOTHIRE</h1>
<b>A web portal which helps to understand the placement scenario and ease of conducting it</b>. It will contain two separate <b>logins for student and and the
HR</b>. After logging in a student will have the choices like see the different aspects and information about different companies. Even a company <b>HR will be provided with some filters to filter
the students according to his criteria and requirement of the
post.</b>
The website <b>frontend has been made using Html, Css,Javascript and Bootstrap. As our website will be having adatabase to store the data related to enitity types in ourplacement cell portal, we have made our database using
MySQL in PhpMyAdmin. The frontend connection with the database has been made using php</b>. We have used XAMPP server to run our website on localhost.<br><br><br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/homepage.JPG" height = 500px width = 1200px><br><br>

## DATABASE
MySQL Database is used to store the data related to enitity types in our placement cell portal, we have made our database in PhpMyAdmin.The frontend connection with the database has been made using
php.<br><br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/db_tables.JPG" height = 200px width = 900px><br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/db_realtion.JPG" height = 400px width = 700px>

## SIGNUP FOR HR AND STUDENT
Hr signup:
For hr signup  a form is created containing fields - (Id, Name, Department, Email, Company). When the form is submitted the information will get stored in the database.<br>
<b>
Code File for hr signup frontend - signuphr.php<br>
Code File for pushing hr singup values in database -  hrprocess.php</b><br>

For student signup  a form is created for students to enter their information. Resume needs to be uploaded by the student(type - pdf,docx). When the form is submitted the information will get stored in the database.
The resume file is pushed into a folder named uploads and its filename will be stored in the database<br>
<b>
Code File for student signup frontend - signupstud.php<br>
Code File for pushing student singup values in database -  studprocess.php</b><br><br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/hr_signup.JPG" height = 400px width = 300px>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/student_signup.JPG" height = 400px width = 300px>
<br><br>
## LOGIN FOR HR AND STUDENT
A form has been created to enter the login credenitals for Hr and Student. The login information will be validated by comparing the data in the database.
<br></b><b>
Hrlogin frontend page code file : loginhr.php<br>
Hrlogin validating code file : processhrlog.php
</b><br><br>
<b>
Student login frontend page code file : loginstud.php<br>
Student login validating code file : processtudlog.php
</b><br><br><br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/hr_login.JPG" height = 400px width = 300px >
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/student_login.JPG" height = 400px width = 300px><br>

## FILTERS FOR HR
After login the<b> HR will be having multiple choices and filters to view the students according to the choices he selects</b>.<br>
The following filters are available to the HR:<br>
1.He can select a particular branch he wants the student to have bachelor’s degree in.<br>
2.Select min cgpa a student must have.<br>
3.Select the post for which he wants to hire and view students who applied for that post.<br>
4.Select the university you want to hire from.<br>
<b>
Code for frontend of this page : finalhr.php<br>
Code for processing data from frontend form : processfinalhr.php<br></b>
<br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/hr_area.JPG" height = 400px width = 1000px><br>
### Displaying information based on HR filters
<b>Suppose HR wants to have students having:</b><br>
Degree in Information Technology<br>
Minimum cgpa of 8.5<br>
Applied for web developer<br>
College - VIT VELLORE<br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/hr_results.JPG"><br>

## FILTERS FOR STUDENT
After login the <b>student will have filters to view the information about the companies post and hr according to the choices he/she selects.</b><br>
Filters for student:<br>
1.Select company and see the posts they are hiring from.<br>
2.Enter the minimum salary you expect and see the companies offering more salary than that.<br>
3.Select post and see the HR information who is going to hire you.<br><br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/student_area.JPG" height = 450px width = 1000px><br>
### Displaying information based on student filters.
Suppose <b>student wants to see the posts amazon is hiring for</b>. The stduent selects amazon in the first filter.<br>
The following result will be shown<br><br>
<img src = "https://github.com/Hemant1704/SPOTHIRE/blob/main/images/student_results.JPG">

# CONCLUSION
We have successfully developed a web application which helps
the students as well as Hr during the placement season. Instead 
of filling the google forms multiple times for different
companies, it will require the students to just enter their details
and resume one time and also keep them updated with the
companies coming to the campus and the posts and ctc they are
offering.
Similarly the HR will not need to sort students manually, our
portal will provide the HR with several filters he can apply and
sort out the students and then view their resumes separately
which makes this process easy and time efficient.
