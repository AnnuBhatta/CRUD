
    -- Database: `NIST`
    -- Table structure for table `employee`

    CREATE TABLE employee (
      
      id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
      firstname varchar(100),
      lastname varchar(100),
      phone int,
      email varchar(100) UNIQUE,
      created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

    --
    -- Inserting data into table `student`
    --

    INSERT INTO employee (firstname, lastname, phone, email) VALUES
    ('Anuja', 'Bhatta', '12345', 'bhattaanu698@gmail.com'),
    ('Aakriti', 'Ghimire', '56437', 'aakritighi669@gmail.com'),
    ('Ashmi', 'Bhandari', '87656', 'ashmibhandari753@gmail.com'),
    ('Nikina', 'Marharjan', '62364', 'nikimarharjan456@gmail.com');
    
