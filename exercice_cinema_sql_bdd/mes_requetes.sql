SELECT CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_prenom_acteur
FROM acteur a
INNER JOIN personne p
ON p.id_personne = a.id_personne;

SELECT CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
FROM realisateur r
INNER JOIN personne p
ON p.id_personne = r.id_personne;

SELECT  
	c.id_film,
	f.titre_film,
	c.id_role,
	r.nom_role,
	a.id_personne,
	p.nom_personne,
	p.genre_personne
FROM casting c
INNER JOIN acteur a
	ON c.id_acteur = a.id_acteur
INNER JOIN film f
	ON c.id_film = f.id_film
INNER JOIN role r
	ON c.id_role = r.id_role
INNER JOIN personne p
	ON a.id_acteur = p.id_personne
WHERE c.id_film = 4;

SELECT 
    a.id_acteur,
	p.id_personne,
	CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur,
    c.id_role,
    c.id_film,
    f.titre_film
FROM personne p
INNER JOIN acteur a
	ON p.id_personne = a.id_personne
INNER JOIN casting c
	ON a.id_acteur = c.id_acteur
INNER JOIN film f
	ON c.id_film = f.id_film
WHERE p.nom_personne = 'Ford';
