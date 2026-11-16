CREATE DATABASE IF NOT EXISTS burger_shop;
USE burger_shop;

CREATE TABLE IF NOT EXISTS burger (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO burger (name, price)
SELECT 'cheese burger', 120.00
WHERE NOT EXISTS (SELECT 1 FROM burger WHERE name = 'cheese burger');

INSERT INTO burger (name, price)
SELECT 'beef burger', 150.00
WHERE NOT EXISTS (SELECT 1 FROM burger WHERE name = 'beef burger');

INSERT INTO burger (name, price)
SELECT 'chicken burger', 130.00
WHERE NOT EXISTS (SELECT 1 FROM burger WHERE name = 'chicken burger');
