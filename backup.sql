CREATE TABLE user (

    id INT AUTO_INCREMENT PRIMARY KEY,
    email TEXT ,
    passwords TEXT ,
    secret TEXT ,
    creation_date DATETIME ,
    role TEXT,
    bloked INT(11)

);