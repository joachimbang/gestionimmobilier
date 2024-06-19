CREATE TABLE IF NOT EXISTS tarif (
    -- identifiantTarif INT NOT NULL AUTO_INCREMENT;
    codeTarif INT NOT NULL,
    prixSemHS INT NOT NULL, 
    prixSemBS INT NOT NULL,
    PRIMARY KEY (codeTarif)
);
CREATE TABLE IF NOT EXISTS proprietaire(
    -- identifiantLocataire INT NOT NULL AUTO_INCREMENT;
    numProprietaire INT NOT NULL,
    nomProprietaire VARCHAR (120) NOT NULL,
    prenomProprietaire VARCHAR (120) NOT NULL,
    adresse1Proprietaire VARCHAR (120) NOT NULL,
    adresse2Proprietaire VARCHAR (120),
    codePostalProprietaire VARCHAR (50) NOT NULL,
    -- photo VARCHAR (150) NOT NULL,
    villeProprietaire VARCHAR (60) NOT NULL,
    numTel1Proprietaire INT NOT NULL,
    numTel2Proprietaire INT,
    caCumuleProprietaire INT NOT NULL,
    emailProprietaire VARCHAR(150) NOT NULL,
    PRIMARY KEY (numProprietaire)
);

CREATE TABLE IF NOT EXISTS appartement(
    -- identifiantAppartement INT NOT NULL AUTO_INCREMENT;
    numLocation INT NOT NULL,
    categorie VARCHAR (50) NOT NULL,
    typeAppartement VARCHAR (50) NOT NULL,
    nbPersonne INT NOT NULL,
    codeTarif INT NOT NULL,
    adresselocation VARCHAR (120) NOT NULL,
    photo VARCHAR (150) NOT NULL,
    equipement VARCHAR (60) NOT NULL,
    PRIMARY KEY (numLocation),
    numProprietaire INT NOT NULL,
    FOREIGN KEY (codeTarif) REFERENCES tarif (codeTarif),
    FOREIGN KEY (numProprietaire) REFERENCES proprietaire (numProprietaire)
);

CREATE TABLE IF NOT EXISTS locataire (
    -- identifiantLocataire INT NOT NULL AUTO_INCREMENT;
    numLocataire INT NOT NULL,
    nomLocataire VARCHAR (120) NOT NULL,
    prenomLocataire VARCHAR (120) NOT NULL,
    adresse1Locataire VARCHAR (120) NOT NULL,
    adresse2Locataire VARCHAR (120),
    codePostalLocataire VARCHAR (50) NOT NULL,
    villeLocataire VARCHAR (60) NOT NULL,
    numTel1Locataire INT NOT NULL,
    numTel2Locataire INT,
    emailLocataire VARCHAR(150) NOT NULL,
    PRIMARY KEY (numLocataire)
);
CREATE TABLE IF NOT EXISTS contrat (
    -- identifiantContrat INT NOT NULL AUTO_INCREMENT;
    numContrat INT NOT NULL,
    etatContrat VARCHAR (50) NOT NULL,
    dateCreation DATE NOT NULL,
    dateDebut DATE NOT NULL,
    dateFin DATE,
    PRIMARY KEY (numContrat),
    numLocation INT NOT NULL,
    numLocataire INT NOT NULL,
    FOREIGN KEY (numLocation) REFERENCES appartement (numLocation),
    FOREIGN KEY (numLocataire) REFERENCES locataire (numLocataire)
);

