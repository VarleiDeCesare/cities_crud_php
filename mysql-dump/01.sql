create database cities_crud;
use cities_crud;
CREATE TABLE IF NOT EXISTS cities(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name UNIQUE VARCHAR(255) NOT NULL,
    uf VARCHAR(2) NOT NULL,
    updated_at TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);