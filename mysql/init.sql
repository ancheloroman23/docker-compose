CREATE TABLE test_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(255) NOT NULL
);

INSERT INTO test_table (message) VALUES ('Hola Mundo desde la base de datos');