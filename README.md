readme me ye dalde 

Dare2Design PHP Website

This is a PHP-based website developed for Dare2Design. Follow the instructions below to set up the environment and run the project locally.

 Prerequisites

1. Download and Install XAMPP
   - Download XAMPP from [Apache Friends](https://www.apachefriends.org/index.html) and install it on your computer.
   - Ensure that both Apache and MySQL services are running in XAMPP.

Setup Instructions

1. Clone or Download the Project Files
   - Clone this repository to your local machine, or download and extract the ZIP file.
   - Place the project folder in the htdocs directory of your XAMPP installation. By default, the path should be something like:
     
     C:\xampp\htdocs\dare2design
     

2. Create the Database
   - Open [phpMyAdmin](http://localhost/phpmyadmin/) in your browser.
   - Create a new database with the name:
     
     eduedget001_dare2design
     

3. Import Database Structure
   - In phpMyAdmin, select the eduedget001_dare2design database.
   - Click on the "Import" tab and upload the .sql file from the project (usually named something like        dare2design.sql).
   - Click "Go" to execute the import, which will set up the database structure and data.

4. Run the Project
   - Open a browser and go to:
     
     http://localhost/dare2design
     
   - This will load the homepage of the website.

 Login Details

The website has four portals, each with its own login credentials:

| Portal       | Email                                      | Password |
| Admin      | hilal123@gmail.com         | 123      |
| Student    |hilalstudent123@gmail.com  | 123      |
| Mentor    | hilalmentor123@gmail.com   | 123      |
| Judge       | hilaljudge123@gmail.com    | 123      |

Troubleshooting

- Port Conflicts: If Apache or MySQL does not start in XAMPP, make sure no other applications are using ports 80 (Apache) and 3306 (MySQL).
- Database Errors: Ensure the database name matches exactly as specified: eduedget001_dare2design.
