
CREATE DATABASE hw1;



USE hw1;


CREATE TABLE Profili (
Username Varchar(255) ,
VeroNome varchar(255),
email varchar(255),
userID Varchar(255),
Password varchar(255),
primary key(userID)
);

create table preferiti (
userID VARCHAR(255),
image VARCHAR(255),
titolo Varchar(255),
ID_gioco INTEGER PRIMARY KEY AUTO_INCREMENT,
index id_userID(userID),
FOREIGN KEY(userID)REFERENCES Profili(userID),
UNIQUE(userID,titolo)
)Engine = InnoDB;

create table spotify (
ClientID varchar(255),
ClientSecret varchar (255)
);

INSERT INTO  `spotify` VALUES ('649e127d7e3c4d58989acd2a3b5d97c7', 'd4a94659818c4ce6b193d7fe9c0bdf54');

drop table preferiti;

SELECT * FROM preferiti AS p WHERE p.userID = 'MiChiamoVirgola' AND p.titolo = 'star wars jedi: survivor' ;

INSERT INTO  `Profili` VALUES ('djmishima', 'schillaci', 'abcde@gmail.com', 'UserIDUNO', '12345');
INSERT INTO  `Profili` VALUES ('tuttoBene', 'Valastro', '54321@gmail.com', 'UserIDDUE', '10000');

SELECT * FROM Profil