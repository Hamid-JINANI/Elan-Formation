INSERT INTO personne (nom_personne, prenom_personne, date_naiss_personne, lieu_naiss_personne, genre_personne)
VALUES ('', '', '', '', '');

INSERT INTO film (titre_film, date_sortie_fr, duree_film, synopsis_film, affiche_film, note_film, id_realisateur)
VALUES ('', '', '', '', '', '', '');

INSERT INTO genre (type_genre_film)
VALUES ('');

INSERT INTO role (nom_role)
VALUES (''),
(''),
('');

/* Pour modifier une foreign_key */
alter table T2 add constraint fk_T2_T1  foreign key(T2.C1)  references T1(T1.C1) 
on update cascade;
ALTER TABLE film 
ADD CONSTRAINT fk_film
FOREIGN KEY ()
REFERENCES ()
ON UPDATE CASCADE;

