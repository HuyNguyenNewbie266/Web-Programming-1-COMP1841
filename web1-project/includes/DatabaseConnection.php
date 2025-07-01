<?php
$pdo = new PDO('mysql:host=localhost;dbname=grenovatehub;charset=utf8mb4', 'root', '');
// CREATE DATABASE GrenovateHub;
// USE GrenovateHub;

// CREATE DATABASE GrenovateHub;
// USE GrenovateHub;
// -- Users Table
// CREATE TABLE Users (
//     UserID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     Username VARCHAR(50) UNIQUE NOT NULL,
//     Password VARCHAR(255) NOT NULL,
//     Email VARCHAR(100) UNIQUE NOT NULL,
//     Name VARCHAR(100),
//     ProfilePicture VARCHAR(255),
//     Reputation BIGINT DEFAULT 0,
//     DateJoined TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );

// -- Posts Table
// CREATE TABLE Posts (
//     PostID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     Title VARCHAR(255) NOT NULL,
//     Content TEXT NOT NULL,
//     Image VARCHAR(255) NULL,
//     AuthorID BIGINT,
//     DateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (AuthorID) REFERENCES Users(UserID)
// );

// -- Tags Table
// CREATE TABLE Modules(
//     ModuleID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     ModuleName VARCHAR(50) UNIQUE NOT NULL
// );

// -- PostTags Table
// CREATE TABLE PostModules (
//     PostID BIGINT,
//     ModuleID BIGINT,
//     PRIMARY KEY (PostID, ModuleID),
//     FOREIGN KEY (PostID) REFERENCES Posts(PostID),
//     FOREIGN KEY (ModuleID) REFERENCES Modules(ModuleID)
// );

// -- Answers Table
// CREATE TABLE Answers (
//     AnswerID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     PostID BIGINT,
//     AuthorID BIGINT,
//     Content TEXT NOT NULL,
//     DateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (PostID) REFERENCES Posts(PostID),
//     FOREIGN KEY (AuthorID) REFERENCES Users(UserID)
// );

// -- Comments Table
// CREATE TABLE Comments (
//     CommentID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     AnswerID BIGINT,
//     AuthorID BIGINT,
//     Content TEXT NOT NULL,
//     DateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (AnswerID) REFERENCES Answers(AnswerID),
//     FOREIGN KEY (AuthorID) REFERENCES Users(UserID)
// );

// -- Friends Table
// CREATE TABLE Friendships (
//   UserID     BIGINT NOT NULL REFERENCES Users(UserID),
//   FriendID    BIGINT NOT NULL REFERENCES Users(UserID),
//   status       ENUM('pending','accepted','blocked') NOT NULL,
//   DateCreated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
//   PRIMARY KEY (UserID, FriendID)
// );

// -- Groups Table
// CREATE TABLE Groups (
//     GroupID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     GroupName VARCHAR(100) NOT NULL,
//     CreatorID BIGINT,
//     DateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (CreatorID) REFERENCES Users(UserID)
// );

// -- GroupMembers Table
// CREATE TABLE GroupMembers (
//     GroupID BIGINT,
//     UserID BIGINT,
//     PRIMARY KEY (GroupID, UserID),
//     FOREIGN KEY (GroupID) REFERENCES Groups(GroupID),
//     FOREIGN KEY (UserID) REFERENCES Users(UserID)
// );
// CREATE TABLE GroupMessages (
//     MessageID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     GroupID BIGINT NOT NULL,
//     SenderID BIGINT NOT NULL,
//     Content TEXT NOT NULL,
//     Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (GroupID) REFERENCES Groups(GroupID),
//     FOREIGN KEY (SenderID) REFERENCES Users(UserID)
// );
// -- PostVotes Table
// CREATE TABLE PostVotes (
//     PostID BIGINT,
//     UserID BIGINT,
    
//     VoteType ENUM('up','down') NOT NULL,
//     PRIMARY KEY (PostID, UserID),
//     FOREIGN KEY (PostID) REFERENCES Posts(PostID),
//     FOREIGN KEY (UserID) REFERENCES Users(UserID)
// );

// -- AnswerVotes Table
// CREATE TABLE AnswerVotes (
//     AnswerID BIGINT,
//     UserID BIGINT,
//     VoteType ENUM('up','down') NOT NULL,
//     PRIMARY KEY (AnswerID, UserID),
//     FOREIGN KEY (AnswerID) REFERENCES Answers(AnswerID),
//     FOREIGN KEY (UserID) REFERENCES Users(UserID)
// );

// -- Badges Table
// CREATE TABLE Badges (
//     BadgeID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     BadgeName VARCHAR(50) NOT NULL,
//     Description TEXT
// );

// -- UserBadges Table
// CREATE TABLE UserBadges (
//     UserID BIGINT,
//     BadgeID BIGINT,
//     DateEarned TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     PRIMARY KEY (UserID, BadgeID),
//     FOREIGN KEY (UserID) REFERENCES Users(UserID),
//     FOREIGN KEY (BadgeID) REFERENCES Badges(BadgeID)
// );

// -- Notifications Table
// CREATE TABLE Notifications (
//     NotificationID BIGINT AUTO_INCREMENT PRIMARY KEY,
//     UserID BIGINT,
//     NotificationTitle	VARCHAR(50) NOT NULL,
//     Type VARCHAR(50) NOT NULL,
//     RelatedEntityID BIGINT NOT NULL,
//     DateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     IsRead BOOLEAN DEFAULT FALSE,
//     FOREIGN KEY (UserID) REFERENCES Users(UserID)
// );

// CREATE TABLE Roles (
//     RoleID SMALLINT AUTO_INCREMENT PRIMARY KEY,
//     Name VARCHAR(50) NOT NULL UNIQUE  -- e.g., 'user', 'admin', 'moderator'
// );

// CREATE TABLE User_Roles (
//     UserID BIGINT NOT NULL,
//     RoleID SMALLINT NOT NULL,
//     PRIMARY KEY (UserID, RoleID),
//     FOREIGN KEY (UserID) REFERENCES Users(UserID) ON DELETE CASCADE,
//     FOREIGN KEY (RoleID) REFERENCES Roles(RoleID) ON DELETE CASCADE
// );
