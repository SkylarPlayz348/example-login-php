CREATE TABLE IF NOT EXISTS users (
    userId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersName varchar(255),
    usersEmail varchar(255),
    usersUid varchar(255),
    usersPwd varchar(255)
);