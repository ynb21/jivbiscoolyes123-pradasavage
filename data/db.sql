CREATE DATABASE webpage;
USE webpage;
CREATE TABLE view_count (
    id INT AUTO_INCREMENT PRIMARY KEY,
    count INT NOT NULL
);
INSERT INTO view_count (count) VALUES (0);