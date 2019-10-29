CREATE TABLE articles(
  Identifiant STRING,
  Titre STRING,
  Auteur STRING,
  Type STRING,
  Genre STRING,
  Description TEXT,
  Quantite int,
  Prix REAL
)

CREATE TABLE categorie(
  id INTEGER PRIMARY KEY,
  nom TEXT,
  pere INTEGER,
  FOREIGN KEY(pere) REFERENCES categorie(id)
);
