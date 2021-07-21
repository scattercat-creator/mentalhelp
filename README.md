# mentalhealth
A site to raise mental health awareness and make resources easy access

to run this you'll need to have xampp with a database named "mentalhelp", in that you'll need two tables which can be created with the following commands:
```
CREATE TABLE users (
    usersId int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usersName varchar (128) NOT NULL,
    usersEmail varchar (128) NOT NULL,
    usersUid varchar (128) NOT NULL,
    usersPwd varchar (128) NOT NULL
);
```
and
```
CREATE TABLE posts (
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) NOT NULL,
    content varchar(1000) NOT NULL,
    username varchar(128) NOT NULL
);

```