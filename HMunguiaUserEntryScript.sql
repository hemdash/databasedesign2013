CREATE TABLE books (
book_id int NOT NULL AUTO_INCREMENT,
book_name varchar(255) NOT NULL,
author varchar(255) NOT NULL,
editor varchar(255),
translator varchar(255),
compiler varchar(255),
publisher varchar(255) NOT NULL,
edition int,
language_id int NOT NULL,
length_pages int NOT NULL,
cover varchar(255) NOT NULL,
fiction boolean,
genre_id int,
dewey_decimal varchar(255),
pub_year date NOT NULL,
PRIMARY KEY (book_id),
FOREIGN KEY genre_id REFERENCES genre(genre_id),
FOREIGN KEY language_id REFERENCES languages(language_id)
) ENGINE=InnoDB;
--creates books table, which will be populated by user entry
CREATE TABLE movies (
movie_id int NOT NULL AUTO_INCREMENT,
movie_name varchar(255) NOT NULL,
screenwriter varchar(255) NOT NULL,
producer varchar(255) NOT NULL,
director varchar(255) NOT NULL,
language_id int NOT NULL,
length_min int NOT NULL,
movie_format int NOT NULL,
cover varchar(255) NOT NULL,
mgenre_id int NOT NULL,
prod_year date NOT NULL,
PRIMARY KEY (movie_id),
FOREIGN KEY mgenre_id REFERENCES mgenre(mgenre_id),
FOREIGN KEY language_id REFERENCES languages(language_id)
) ENGINE=InnoDB;
--creates movies table, which will be populated by user entry
CREATE TABLE users (
user_id int NOT NULL AUTO-INCREMENT,
user_fname varchar(255) NOT NULL,
user_lname varchar(255) NOT NULL,
join_date date NOT NULL,
book_id int,
movie_id int,
last_active date NOT NULL,
fees float,
administrator boolean,
PRIMARY KEY (user_id),
FOREIGN KEY book_id REFERENCES books(book_id),
FOREIGN KEY movie_id REFERENCES movies(movie_id)
) ENGINE=InnoDB;