CREATE DATABASE portfolio;
USE portfolio;

CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  technologies VARCHAR(255),
  github_link VARCHAR(255)
);

CREATE TABLE education (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  year VARCHAR(10),
  description TEXT
);

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(20),
  message TEXT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
