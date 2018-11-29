Install Instructions for Voting Information Application

Download and Install WAMP Server.

- To create a password for MySQLAdmin login, go to command prompt, change directory to mysql in the main wamp install directory, 
enter command "mysqladmin -u root password" and enter root as your password 

- for wamp to work, go to windows services, select worldwide web publishing services, turn it off, turn on wamp, wait for it to turn green. WAMP Setup Done.

In file directory, C:\wamp64\www\, paste the php files in 1 project folder for WAMP to host.

In your browser go to http://localhost/phpmyadmin/ to acces the database feature. Login using root for username
and root for password. Then create a database and use the sql and csv documents to create the tables and import 
the table data. 

To access the application go to your browser and enter http://localhost:80/(the name of the folder with the php files)/
Then the application will start.
