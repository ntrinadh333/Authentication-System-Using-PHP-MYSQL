# Authentication System using php and mysql

Installations Required :
1. A Browser Ex: Chrome , bing etc..
2. Xampp server
3. IDE (visual studio code)
4. mysql workbench

Steps to Run this :

1. Clone this project from the github / download the zip file and extract it.
2. Make sure that you've downloaded the xampp server application in your machine.
3. open the xampp control panel and run the apache server.
4. Now keep all the extracted files of the project in htdocs folder.
   htdocs folder location :
   - open xampp folder (not control panel)
   - you'll identify a folder named htdocs in it.
   - open it and add a new folder named **Login system** and place all the extracted files in that folder.
5. Now open mysql workbench and execute the following queries.
   - create database Users;
   - use Users;
   - CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
    );
6. Make sure that user and root of your database are correct in the config.php file .
   In my case it user = root , password = root , host = localhost:3306 (mysql).
7. check whether your apache server is started or not in xampp control panel.
8. now open your browser and type http://localhost/Register and Login System/registration.jsp.
10. Test the site !!!

    
     
