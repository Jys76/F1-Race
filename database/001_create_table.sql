
CREATE TABLE IF NOT EXISTS clie(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(64) NOT NULL UNIQUE,
    email VARCHAR(64) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL
);

CREATE TABLE IF NOT EXISTS trac(
    id INT AUTO_INCREMENT PRIMARY KEY,
    trac_name VARCHAR(64) NOT NULL,
    img_fname VARCHAR(64),
    nation VARCHAR(64)
);

CREATE TABLE IF NOT EXISTS cham(
    id INT AUTO_INCREMENT PRIMARY KEY,
    champ_name VARCHAR(64),
    champ_start_date DATETIME NOT NULL,
    champ_end_date DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS prix(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cham INT NOT NULL,
    id_trac INT NOT NULL,

    prix_start_date DATETIME NOT NULL,
    prix_end_date DATETIME NOT NULL,

    FOREIGN KEY (id_cham) REFERENCES cham(id),
    FOREIGN KEY (id_trac) REFERENCES trac(id)
);

CREATE TABLE IF NOT EXISTS clie_prix_stat(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS clie_prix(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_clie INT NOT NULL,
    id_prix INT NOT NULL,
    id_clie_prix_stat INT NOT NULL,

    points INT,
    start_date DATETIME NOT NULL DEFAULT NOW(),

    FOREIGN KEY (id_clie) REFERENCES clie(id),
    FOREIGN KEY (id_prix) REFERENCES prix(id),
    FOREIGN KEY (id_clie_prix_stat) REFERENCES clie_prix_stat(id)
);

