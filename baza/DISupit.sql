use `dis`;

INSERT INTO korisnik_rola (NAZIV,OPIS)
values ('administrator','korisnik sa svim pravima'),
       ('korisnik','korisnik sa osnovnim pravima');
       
INSERT INTO korisnik_status(NAZIV,OPIS)
values
       ('u procesu verifikacije','korisnik je u procesu verifikacije'),
       ('Aktivan','Korisnik je aktivirao nalog'),
       ('Neaktivan','Korisnik je neaktivan duze od 3 dana'),
       ('Blokiran','Korisnik je blokiran'),
       ('Deaktiviran','Korisnik je deaktiviran');
       
INSERT INTO EMAIL_VERIFIKACIJA_STATUS(NAZIV,OPIS)
VALUES
      ('Generisan kod','Verifikacioni kod je generisan'),
      ('Poslat kod','Verifikacioni kod je poslat na adresu'),
      ('Restartovan','Generisan je novi kod'),
      ('Istekao','Verifikacioni kod  je istekao'),
      ('Verifikovan','Kod  je uspesno verifikovan');
      


INSERT INTO Korisnik(username,password,email,poslednje_logovanje,ID_STATUS,ID_ROLA)
VALUES
('admin','admin','admin2@gmail.com',null,12,5);

insert into tipovi (naziv,opis)
values
('Road','Road'),
('MTB','MTB'),
('City','city'),
('Children','Children');
