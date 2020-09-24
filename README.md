# About this Code
---
Project-Code: Verzeo web App Deveopment for SQLi lab
Code Version: 1.0


## Prerequties 
- KALI VM (as we already using for other labs)  **or** LAMP stack installed 
- basic knowledge on PHP, MySQL
- Basic knowledge on Linux CLI
- Check apache2 server is installed **or** not and download LAMP stack my SQL server in your kali
  
## Process
- Download visual code in your kali 
- Download this code and extaract that file in your computer
- use cammand ***ls*** in your kali to see that sql-lab-setup installed or not
- give read and write and excute permissions to sql-lab-setup use command ***sudo chmod -R 777 sql-lab-setup***
- Now copy that file and send to var use command ***sudo cp sql-lab-setup/var/www/html/***
- Now go to that sql-lab-setup file and open it using command ***ls*** next use command ***code .*** 
- Now automatic it will open that file in visual code and minimize it 
- First we will setup database and sql server and in server we want configure ids,passwords,usernames after we will go to visual code minimaze page 
- Next start services apache2 and mysql in your kali using commands ***sudo service apache2 start*** and ***sudo service mysql start***
- Now open your browser check that apache server started or not serach in URL ***127.0.0.1***  and you will debain apache page in your browser to see sql server type in URL ***127.0.0.1/index.php*** you will see in page like about this code some plain text 
- Now come to terminal open new terminal type command ***sudo mysql -u root***to next use command ***sudo mysql -u rafi*** use your name 
- Next use command ***sudo mysql -u rafi -p pass123***
next use command ***sudo chmod -R 777 sql-lab-setup*** next ***sudo cp -r sql-lab-setup /var/www/rafi*** to send our file to rafi
- use command ***cd /var/www/*** now you type ***ls*** you will see rafi folder open it use command ***cd rafi/*** next do ***ls** again now use command ***code .*** to open that in visual code and minimize it 
- Now use command ***sudo chmod -R 777 rafi/*** that means that means your giving permissions to that folder
- Next ***sudo mv rafihtml/rafi*** next ***cd html*** next ***ls*** agian start apache2 service and sql i hope you know how to do it has i mentioned first how to start
- Open a new terminal type ***/var/www/html*** next ****sudo mysql -u root*** next ***show databases;*** next ***create database login;*** login means we are giving a name to our database now type ***show databases;*** you will see our created login database now type ***use login*** next ***show tables*** it will shows empty bcz now we want to create tables in that login database
- Now type ***exit*** now type ***sudo mysql -u root*** next type ***create user 'rafi'@'localhost' identified by 'pass123*** it shows Query ok next ***flush privileges;*** it again shows Query ok now ***exit*** we created rafi user sucessfully
- Now type ***sudo mysql -u rafi -p*** next it asks password now enter Pass123 next it show welocome to maridb next use type there ***show databases;*** it shows our created login database next type ***use login;*** now you are in login database now open our minimize visiual code page to create tables in our database
- You will see db.sql file in visiual use that file to configure our database create users in our database.
- After creating users and we need to add users in users table same process go db.sql file again you admin password modify it in password palce please make shure you are pasting ther md5 hash value password first open browser type md5 password generator now you will get encrypted hash value copy that paste here db.sql and use like that for all users your creating give unique id and passwords with hash value and configure it in our tables
- Now configure your dtabase properly now go to visiual code open dbconf.php modify that save like ***$con = new mysqli("127.0.0.1", "rafi", "pass123", "users");*** root file and password and our database name users
- Now open browser type this URL ***127.0.0.1/rafi/index.php*** now you will see login php page now use your users username and password type password deycrpt not hash value exampel ***test123*** now your loged in sucessfully now created sql-lab its vulnerabel SQLI attacks use payloads and try to bypass it


## Download the Code :
``` 
https://github.com/rafi9603/Day2-Notes-sql-lab-setup.git 
```

---
