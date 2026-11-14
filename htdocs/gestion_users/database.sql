DROP DATABASE IF EXISTS projet;
CREATE DATABASE projet CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE projet;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  tel VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  sexe VARCHAR(10) NOT NULL
);

INSERT INTO users (nom, prenom, tel, email, sexe) VALUES
('Ben Omar', 'Mohamed', '22345678', 'mohamed.benomar@gmail.com', 'Homme'),
('Trabelsi', 'Leila', '55123456', 'leila.trabelsi@gmail.com', 'Femme'),
('Ben Salem', 'Youssef', '98456123', 'youssef.bensalem@gmail.com', 'Homme'),
('Jebali', 'Sarra', '52789456', 'sarra.jebali@gmail.com', 'Femme'),
('Ayari', 'Anis', '22874561', 'anis.ayari@gmail.com', 'Homme'),
('Haddad', 'Rim', '97321654', 'rim.haddad@gmail.com', 'Femme');
