CREATE TABLE languages (
language_id int NOT NULL AUTO_INCREMENT,
language_name varchar(255) NOT NULL,
PRIMARY KEY (language_id)
) ENGINE=InnoDB;
--creates language reference table
INSERT INTO languages (
language_name) VALUES
    ('British English'),
	('American English'),
    ('German'),
    ('French'),
    ('Italian'),
    ('Spanish'),
    ('Mandarin'),
    ('Japanese'),
    ('Arabic'),
    ('Hebrew'),
    ('Bengali'),
    ('Hindi'),
    ('Russian'),
    ('Portguese'),
    ('Wu'),
    ('Korean'),
    ('Turkish'),
    ('Vietnamese'),
    ('Telugu'),
    ('Cantonese'),
    ('Marathi'),
    ('Tamil'),
    ('Urdu'),
    ('Min Nan'),
    ('Jinyu'),
    ('Gujarati'),
    ('Polish'),
    ('Ukrainian'),
    ('Persian'),
    ('Xiang'),
    ('Malayalam'),
    ('Hakka'),
    ('Kannada'),
    ('Oriya'),
    ('Panjabi'),
    ('Sunda'),
    ('Romanian'),
    ('Bhojpuri'),
    ('Azerbaijani'),
    ('Maithili'),
    ('Hausa'),
    ('Burmese'),
    ('Serbo-Croatian'),
    ('Gan'),
    ('Awadhi'),
    ('Thai'),
    ('Dutch'),
    ('Yoruba'),
    ('Sindhi'),
    ('Khmer'),
    ('Latin');
--inserts fields into language reference table
CREATE TABLE genre (
    genre_id int NOT NULL AUTO_INCREMENT,
    genre_name varchar(255) NOT NULL,
    PRIMARY KEY (genre_id)
    ) ENGINE=InnoDB;
--creates genre reference table
INSERT INTO genre (
    genre_name) VALUES
    ('Historical Fiction'),
    ('Humor'),
    ('Mystery'),
    ('Sci-Fi'),
    ('Fantasy'),
    ('Drama'),
    ('Adventure'),
    ('Experimental'),
    ('Classics'),
    ('Horror'),
    ('Thriller'),
    ('Romance'),
    ('Realistic');
--inserts values into genre reference table
CREATE TABLE movie_format (
	format_id int NOT NULL AUTO_INCREMENT,
	format_name varchar(255) NOT NULL,
	PRIMARY KEY (format_id)
	)ENGINE=InnoDB;
--creates movie format reference table
INSERT INTO movie_format (
	format_name) VALUES
	('VHS'),
	('DVD'),
	('BluRay'),
	('.mp4');
--inserts values into movie format reference table
CREATE TABLE mgenre (
	mgenre_id int NOT NULL AUTO_INCREMENT,
	mgenre_name varchar(255) NOT NULL,
	PRIMARY KEY (format_id)
	)ENGINE=InnoDB;
--creates movie genre reference table
INSERT INTO mgenre (
    mgenre_name) VALUES
    ('Documentary'),
    ('Comedy'),
    ('Mystery'),
    ('Sci-Fi'),
    ('Fantasy'),
    ('Drama'),
    ('Adventure'),
    ('Horror'),
    ('Thriller'),
    ('Romance');
--inserts values into movie genre reference table