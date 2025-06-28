<?php
$pdo = new PDO('mysql:host=localhost;dbname=web1-cw;charset=utf8mb4', 'root', '');


// -- Creating Users table to store user information
// CREATE TABLE Users (
//     user_id INTEGER PRIMARY KEY AUTOINCREMENT,
//     username VARCHAR(50) NOT NULL UNIQUE,
//     email VARCHAR(100) NOT NULL UNIQUE,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );

// -- Creating Posts table to store user posts
// CREATE TABLE Posts (
//     post_id INTEGER PRIMARY KEY AUTOINCREMENT,
//     user_id INTEGER NOT NULL,
//     content TEXT NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
// );

// -- Creating Answers table to store answers to posts
// CREATE TABLE Answers (
//     answer_id INTEGER PRIMARY KEY AUTOINCREMENT,
//     post_id INTEGER NOT NULL,
//     user_id INTEGER NOT NULL,
//     content TEXT NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (post_id) REFERENCES Posts(post_id) ON DELETE CASCADE,
//     FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
// );

// -- Creating UserPostInteractions table for many-to-many relationship (e.g., likes or follows)
// CREATE TABLE UserPostInteractions (
//     user_id INTEGER NOT NULL,
//     post_id INTEGER NOT NULL,
//     interaction_type VARCHAR(20) NOT NULL, -- e.g., 'like', 'follow'
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     PRIMARY KEY (user_id, post_id, interaction_type),
//     FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE,
//     FOREIGN KEY (post_id) REFERENCES Posts(post_id) ON DELETE CASCADE
// );