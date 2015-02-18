INSERT INTO books(
book_name,
author,
publisher,
language_id,
length_pages,
cover,
fiction,
genre_id,
pub_year
) VALUES
('The Great Gatsby', 'Fitzgerald, F. Scott', 'Penguin', '1', '245', 'gatsby.jpg', 'yes', '1', '1920'),
('Catcher in the Rye', 'Salinger, J.D.', 'Oxford University Press', '1', '198', 'catcher.jpg', 'yes', '1', '1956'),
('The Waves', 'Woolf, Virginia', 'Oxford University Press', '1', '184', 'waves.jpg', 'yes', '1', '1922'),
('El amor en los tiempos de cólera', 'Marquez, Gabriel García', 'Random House', '2', '498', 'loveinthetimeofcholera.jpg', 'yes', '4', '1988'),
('Winesburg, Ohio', 'Anderson, Sherwood', 'Random House', '1', '189', 'winesburg.jpg', 'yes', '1', '1923'),
('The Hunger Games', 'Collins, Suzanne', 'Penguin', '1', '392', 'hungergames.jpg', 'yes', '1', '2007'),
('Harry Potter and the Chamber of Secrets', 'Rowling, J.K.', 'Oxford University Press', '1', '729', 'chamberofsecrets.jpg', 'yes', '1', '1992'),
('The Fault In Our Stars', 'Green, John', 'Random House', '1', '423', 'tfios.jpg', 'yes', '4', '2011'),
('The Kite Runner', 'Hosseini, Khaled', 'Riverhead Books', '1', '483', 'kiterunner.jpg', 'yes', '2', '2004'),
('Farenheit 451', 'Bradbury, Ray', 'Plaza y Janes', '1', '238', 'farenheit451.jpg', 'yes', '6', '1950'),
('1984', 'Orwell, George', 'Signet Books', '1', '328', '1984.jpg', 'yes', '4', '1949'),
('Lord of the Flies', 'Golding, William', 'Penguin', '1', '182', 'lordoftheflies.jpg', 'yes', '3', '1954');
--adds values to books table
INSERT INTO movies(
	movie_name,
	screenwriter,
	producer,
	director,
	language_id,
	length_min,
	movie_format,
	cover,
	mgenre_id,
	prod_year
) VALUES
('The Shawshank Redepmtion', 'King, Stephen', 'Glotzer, Liz', 'Darabont, Frank', '1', '142', 'DVD', 'shawshank.jpg', '2', '1994'),
('The Godfather', 'Puzo, Mario', 'Evans, Robert', 'Coppola, Francis Ford', '1', '175', 'DVD', 'godfather.jpg', '3', '1972'),
('Pulp Fiction', 'Tarantino, Quentin', 'DeVito, Danny', 'Tarantino, Quentin', '1', '154', 'VHS', 'pulpfiction.jpg', '5', '1994'),
('The Good, The Bad and the Ugly', 'Vincenzoni, Luciano', 'Grimaldi, Alberto', 'Leone, Sergio', '1', '161', 'VHS', 'goodbandandugly.jpg', '4', '1966'),
('12 Angry Men', 'Rose, Reginald', 'Fonda, Henry', 'Lumet, Sidney', '1', '96', 'VHS', '12angrymen.jpg', '5', '1957'),
('The Dark Knight', 'Nolan, Christopher', 'De La Noy, Kevin', 'Nolan, Christopher', '1', '152', 'DVD', 'darkknight.jpg', '3', '2008'),
('Fight Club', 'Uhls, Jim', 'Fincher, David', '1', '139', 'DVD', 'fightclub.jpg', '5', '1999'),
('Inception', 'Nolan, Christopher', 'Brigham, Chris', 'Nolan, Christopher', '1', '148', 'DVD', 'inception.jpg', '4', '2010'),
('Goodfellas', 'Pileggi, Nicholas', 'De Fina, Barbara', 'Scorsese, Martin', '1', '146', 'VHS', 'goodfellas.jpg', '3', '1990'),
('Star Wars', 'Lucas, George', 'Lucas, George', 'Lucas, George', '1', 'VHS', 'starwars.jpg', '4', '1977'),
('Forrest Gump', 'Roth, Eric', 'Finerman, Wendy', 'Zemeckis, Robert', '1', '142', 'VHS', 'forrestgump.jpg', '3','1994'),
('Casablanca', 'Epstein, Julius J.', 'Warner, Jack L.', 'Curtiz, Michael', '1', '102', 'VHS', 'casablanca.jpg', '2', '1947');
--add values to movies table
INSERT INTO users(
	user_fname,
	user_lname,
	join_date,
	book_id,
	last_active,
	fees,
	administrator
	) VALUES
('Hayley', 'Munguia', '1/1/1990', '1', '2/3/2012', '0.20', 'yes'),
('Jack', 'Richards', '1/8/2010', '5', '9/13/2012', '1.04', 'no'),
('Nathalie', 'Ramirez', '1/5/2012', '3', '4/3/2013', '4.39', 'no'),
('Michael', 'Grieve', '3/2/2010', '4', '3/2/2012', '2.39', 'no'),
('Rowanne', 'Simpson', '2/3/2008', '6', '9/2/2012', '4.93', 'no'),
('Lucy', 'Johnson', '3/3/2007', '4', '9/3/2012', '4.92', 'no'),
('Imy', 'Suhr', '3/1/2006', '2', '9/3/2011', '8.39', 'no'),
('Tal', 'Kirk', '3/10/2011', '7', '3/9/2012', '8.30', 'no'),
('Maggie', 'LaPoint', '5/3/2009', '8', '8/4/2012', '5.39', 'no'),
('Kate', 'Daniel', '3/3/1993', '9', '9/30/2000', '10.30', 'no'),
('Lily', 'Otto', '3/2/1996', '10', '9/30/2003', '18.39', 'no'),
('Carl', 'Trovall', '3/4/1992', '11', '9/3/2005', '83.22', 'no'),
('Jordan', 'Overton', '2/2/1996', '9/3/2009', '93.29', 'no');
--add values to users table