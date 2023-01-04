/*== 1 ==================*/
/* Nom des lieux finissant par 'um' */
SELECT * 
FROM lieu 
WHERE nom_lieu LIKE '%um';

/*== 2 =================*/
/* Nbre de personnages par lieu */
SELECT nom_lieu, COUNT(*) AS nbrHab
FROM lieu l
INNER JOIN personnage p ON l.id_lieu = p.id_lieu
GROUP BY l.id_lieu
ORDER BY nbrHab DESC;

/*== 3 =================*/
/* Nom perso, spécialité, adresse et lieu d'habitation */
SELECT nom_personnage, adresse_personnage, nom_lieu, nom_specialite
FROM personnage as p
INNER JOIN specialite as sp ON p.id_specialite = sp.id_specialite
INNER JOIN lieu as l ON p.id_lieu = l.id_lieu
ORDER BY nom_lieu, nom_personnage;

/*== 4 ================*/
/* Nom spécialité + nbre de perso par spécialité */
SELECT nom_specialite, COUNT(*) AS nbrPerso
FROM specialite sp
INNER JOIN personnage p ON sp.id_specialite = p.id_specialite
GROUP BY sp.id_specialite
ORDER BY nbrPerso DESC;

/*== 5 ================*/
/* Nom, date et lieu des bataille */
SELECT nom_bataille, DATE_FORMAT( date_bataille, "%d/%m/%Y" )
FROM bataille 
ORDER BY date_bataille DESC;

/*== 6 ================*/
/* Nom des potions + coût */
SELECT nom_potion, SUM( i.cout_ingredient * c.qte ) AS coutPotion
FROM composer c
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
INNER JOIN potion p ON c.id_potion = p.id_potion
GROUP BY p.id_potion
ORDER BY coutPotion DESC;

/*== 7 ================*/
/* Nom des ingrédients + coût + quantité de chaque ingrédient */
SELECT nom_potion, nom_ingredient, cout_ingredient, qte
FROM composer c
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
INNER JOIN potion p ON c.id_potion = p.id_potion
WHERE nom_potion = 'Santé';

/*== 8 ================*/
/* Nom du ou des personnages qui ont pris le plus de casques dans la bataille 'Bataille du village gaulois'. */
SELECT p.nom_personnage, SUM( pc.qte ) AS nb_casques
FROM personnage p, bataille b, prendre_casque pc
WHERE p.id_personnage = pc.id_personnage
AND pc.id_bataille = b.id_bataille
AND b.nom_bataille = 'Bataille du village gaulois'
GROUP BY p.id_personnage
HAVING nb_casques >= ALL(
  SELECT SUM( pc.qte )
  FROM prendre_casque pc, bataille b
  WHERE b.id_bataille = pc.id_bataille
  AND b.nom_bataille = 'Bataille du village gaulois'
  GROUP BY pc.id_personnage
  );

/*== 9 ================*/
/* Nom des personnages et leur quantité de potion bue */
SELECT per.nom_personnage, b.dose_boire 
FROM boire b
INNER JOIN potion p ON b.id_potion = p.id_potion
INNER JOIN personnage per ON b.id_personnage = per.id_personnage
ORDER BY dose_boire DESC;

/*== 10 ================*/
/* Nom de la bataille où le nombre de casques pris a été le plus important. */
SELECT b.nom_bataille, SUM( pc.qte ) AS nbr_casques
FROM prendre_casque pc, bataille b
WHERE b.id_bataille = pc.id_bataille
GROUP BY b.id_bataille
HAVING nbr_casques >= ALL(
	SELECT SUM( pc.qte )
	FROM prendre_casque pc, bataille b
	WHERE b.id_bataille = pc.id_bataille
  	GROUP BY b.nom_bataille
	);

/*== 11 ================*/
/* Combien existe-t-il de casques de chaque type et quel est leur coût total ? (classés par nombre décroissant) */
SELECT COUNT( c.id_casque ) AS nbr_casques, tc.nom_type_casque, SUM( c.cout_casque ) AS total
FROM type_casque tc
LEFT JOIN casque c
ON tc.id_type_casque = c.id_type_casque
GROUP BY tc.id_type_casque
ORDER BY nbr_casques DESC;

/*== 12 ================*/
/* Nom des potions dont un des ingrédients est le poisson frais. */
SELECT p.nom_potion, i.nom_ingredient
FROM composer c
INNER JOIN ingredient i ON c.id_ingredient = i.id_ingredient
INNER JOIN potion p ON c.id_potion = p.id_potion
WHERE nom_ingredient = 'Poisson frais';

/*== 13 ================*/
/*Nom du / des lieu(x) possédant le plus d'habitants, en dehors du village gaulois.*/
SELECT p.id_lieu, l.nom_lieu, COUNT( p.id_personnage ) AS nbr_habitants
FROM personnage p
LEFT JOIN lieu l
ON l.id_lieu = p.id_lieu
WHERE l.nom_lieu != 'Village gaulois'
GROUP BY p.id_lieu
ORDER BY nbr_habitants DESC LIMIT 1;


/*== 14 ================*/
/* Nom des personnages qui n'ont jamais bu aucune potion. */
SELECT p.nom_personnage
FROM personnage p
WHERE p.id_personnage NOT IN ( 
  SELECT b.id_personnage FROM boire b 
  );

/*== 15 ================*/
/* Nom du / des personnages qui n'ont pas le droit de boire de la potion 'Magique'. */
SELECT p.nom_personnage
FROM personnage p
WHERE p.id_personnage NOT IN ( 
    SELECT ab.id_personnage 
    FROM autoriser_boire ab 
    WHERE id_potion = 1 
    );

/*==  ================*/
SELECT per.nom_personnage, SUM(b.dose_boire) AS doseBue
FROM boire b
INNER JOIN potion p ON b.id_potion = p.id_potion
INNER JOIN personnage per ON b.id_personnage = per.id_personnage
GROUP BY per.id_personnage
ORDER BY doseBue DESC;

/*== A ======================================*/
/* Insérer personnage */

INSERT INTO personnage (nom_personnage, adresse_personnage, id_lieu, id_specialite)
VALUES ('Champdeblix', 'ferme Hantassion', 6, 12);

/*== B ======================================*/
/* Autoriser boire potion*/

DELETE
FROM autoriser_boire
WHERE id_personnage = 12;

INSERT INTO autoriser_boire (id_potion, id_personnage)
VALUES (1, 12),
(13, 12);

/*== C ======================================*/
/* Enlever casques Grec */

DELETE
FROM casque
WHERE id_type_casque = 2 
AND id_casque NOT IN (
  SELECT id_casque FROM prendre_casque
  )

/*== D ======================================*/
/* Changer adresse */

UPDATE personnage
SET adresse_personnage = 'prison à Condate', id_lieu = 9
WHERE nom_personnage = 'Zérozérosix';

/*== E ======================================*/
/* Soupe ne doit plus contenir de persil */

DELETE
FROM composer
WHERE id_ingredient = 19;

/*== F ======================================*/
/* Erreur de casques de Obélix */

UPDATE prendre_casque
SET id_casque = 10, qte = 42
WHERE id_personnage = 5 AND id_bataille = 9;


