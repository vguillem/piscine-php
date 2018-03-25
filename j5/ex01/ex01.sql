CREATE TABLE ft_table
(id_table INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
login varchar(8) DEFAULT 'toto' NOT NULL
groupe ENUM ('staf', 'student', 'other') NOT NULL
date_de_creation DATE NOT NULL);
