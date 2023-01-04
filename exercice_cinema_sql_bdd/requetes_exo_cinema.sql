/*== a ==*/
/*== Afficher infos film ==*/
SELECT id_film, titre_film, 
  DATE_FORMAT(date_sortie_fr, "%d/%m/%Y") AS date_sortie_fr, 
  CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
FROM film f
INNER JOIN realisateur r
  ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
  ON p.id_personne = r.id_personne
WHERE id_film = 4;

/*== b ==*/
/*== Films dont la durée excède 2h15 classés par durée (DESC) ==*/
SELECT 
  titre_film, 
  duree_film
FROM film 
WHERE duree_film > 135
ORDER BY duree_film DESC;

/*== c ==*/
/*== Liste des films d’un réalisateur (en précisant l’année de sortie) ==*/
SELECT 
  titre_film, 
  DATE_FORMAT(date_sortie_fr, "%d/%m/%Y") AS date_sortie_fr, 
  CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
FROM film f
INNER JOIN realisateur r
  ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
  ON p.id_personne = r.id_personne
WHERE r.id_realisateur = 5;

/*== d ==*/
/*== Nombre de films par genre (classés dans l’ordre décroissant) ==*/
SELECT 
  COUNT(type_genre_film) AS nbr_films, 
  type_genre_film 
FROM appartenir a
INNER JOIN genre g
  ON a.id_genre_film = g.id_genre_film
GROUP BY a.id_genre_film
ORDER BY COUNT(type_genre_film) DESC;

/*== e ==*/
/*== Nombre de films par réalisateur (classés dans l’ordre décroissant) ==*/
SELECT 
  COUNT(id_film) AS nbr_films, 
  CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
FROM film f
INNER JOIN realisateur r
  ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
  ON p.id_personne = r.id_personne
GROUP BY r.id_realisateur
ORDER BY COUNT(id_film) DESC;

/*== f ==*/
/*== Casting d’un film en particulier (id_film) : nom, prénom des acteurs + sexe ==*/
SELECT 
  CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur, 
  p.genre_personne, 
  c.id_acteur
FROM casting c
INNER JOIN acteur a
  ON c.id_acteur = a.id_acteur
INNER JOIN personne p
  ON a.id_personne = p.id_personne
WHERE id_film = 4;

/*== g ==*/
/*== Films tournés par un acteur en particulier (id_acteur) avec leur rôle et l’année de sortie (du film le plus récent au plus ancien) ==*/
SELECT 
    a.id_acteur,
	  p.id_personne,
	  CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur,
    c.id_role,
    r.nom_role,
    c.id_film,
    f.titre_film,
    DATE_FORMAT(date_sortie_fr, "%d/%m/%Y") AS date_sortie_fr
FROM personne p
INNER JOIN acteur a
	ON p.id_personne = a.id_personne
INNER JOIN casting c
	ON a.id_acteur = c.id_acteur
INNER JOIN film f
	ON c.id_film = f.id_film
INNER JOIN role r
	ON r.id_role = c.id_role
WHERE p.nom_personne = 'Ford'
ORDER BY f.date_sortie_fr DESC;

/*== h ==*/
/*== Listes des personnes qui sont à la fois acteurs et réalisateurs ==*/
SELECT DISTINCT
	p.*
FROM personne p
INNER JOIN realisateur r
	ON p.id_personne = r.id_personne
INNER JOIN acteur a
	ON r.id_personne = a.id_personne;

/*== i ==*/
/*== Liste des films qui ont moins de 5 ans (classés du plus récent au plus ancien) ==*/
SELECT
	titre_film,
    DATE_FORMAT(date_sortie_fr, "%d/%m/%Y") AS date_sortie_fr
FROM film f
WHERE date_sortie_fr >= YEAR(CURRENT_DATE()) - 5
ORDER BY date_sortie_fr DESC;

/*== j ==*/
/*== Nombre d’hommes et de femmes parmi les acteurs ==*/
SELECT
	COUNT(*) AS nbr_acteurs,
    genre_personne
FROM personne
GROUP BY genre_personne;

/*== k ==*/
/*== Liste des acteurs ayant plus de 50 ans (âge révolu et non révolu) ==*/
SELECT
	COUNT(*) AS nbr_acteurs,
    genre_personne
FROM personne p
INNER JOIN acteur a
	ON p.id_personne = a.id_personne
GROUP BY genre_personne;

/*== l ==*/
/*== Acteurs ayant joué dans 3 films ou plus ==*/
SELECT 
	COUNT(c.id_acteur) AS nbr_film,
    c.id_acteur,
    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur
FROM casting c
INNER JOIN acteur a
	ON c.id_acteur = a.id_acteur
INNER JOIN personne p
	ON a.id_personne = p.id_personne
GROUP BY c.id_acteur
HAVING COUNT(*) >= 3;