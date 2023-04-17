CREATE TABLE IF NOT EXISTS carousel
(
  page_id SERIAL UNIQUE PRIMARY KEY,
  page_link VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS author
(
  author_id SERIAL PRIMARY KEY,
  author TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS publisher
(
  pub_id SERIAL PRIMARY KEY,
  pub_name TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS series
(
  series_id SERIAL PRIMARY KEY,
  series_name TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS game_year
(
  year_id SERIAL PRIMARY KEY,
  game_year VARCHAR(4) NOT NULL
);

CREATE TABLE IF NOT EXISTS cover_type
(
  cover_id SERIAL PRIMARY KEY,
  cover_name TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS game
(
    game_id SERIAL UNIQUE PRIMARY KEY,
    image VARCHAR(100) NOT NULL,
    name TEXT NOT NULL,
    author_id INT NOT NULL REFERENCES author
      ON UPDATE CASCADE
      ON DELETE RESTRICT,
    annotation TEXT NOT NULL,
    pub_id INT NOT NULL REFERENCES publisher
      ON UPDATE CASCADE
      ON DELETE RESTRICT,
    series_id INT NOT NULL REFERENCES series
      ON UPDATE CASCADE
      ON DELETE RESTRICT,
    year_id INT NOT NULL REFERENCES game_year
      ON UPDATE CASCADE
      ON DELETE RESTRICT,
    game_format VARCHAR(40) NOT NULL,
    cover_id INT NOT NULL REFERENCES cover_type
      ON UPDATE CASCADE
      ON DELETE RESTRICT,
    weight VARCHAR(40) NOT NULL, 
    janre VARCHAR(40) NOT NULL,
    mode VARCHAR(40) NOT NULL
);


CREATE TABLE IF NOT EXISTS users (
  users_id SERIAL PRIMARY KEY,
  full_name varchar(355) DEFAULT NULL,
  login varchar(100) UNIQUE DEFAULT NULL,
  email varchar(255) UNIQUE DEFAULT NULL,
  password varchar(500) DEFAULT NULL,
  avatar varchar(500) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS cart (
  users_id INT NOT NULL REFERENCES users,
  game_id INT NOT NULL REFERENCES game,
  game_count INT NOT NULL
);

CREATE TABLE IF NOT EXISTS comments
(
  users_id INT NOT NULL REFERENCES users
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
  game_id INT NOT NULL REFERENCES game
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
  grade INT NOT NULL,
  game_com TEXT NOT NULL
);

INSERT INTO carousel (page_link)
VALUES
('../carouselPages/new.jpg'),
('../carouselPages/sale.jpg');

INSERT INTO author (author)
VALUES
('Ubisoft Montreal'),
('Blizzard Entertainment'),
('Gearbox Software'),
('4A Games');

INSERT INTO publisher (pub_name)
VALUES
('Ubisoft Entertainment'),
('Blizzard Entertainment'),
('2K Games'),
('Deep Silver');

INSERT INTO series (series_name)
VALUES
('Стелс убийства'),
('Безумие'),
('Космическая фантастика'),
('Постапокалипсис');

INSERT INTO game_year (game_year)
VALUES
('2014'),
('2012'),
('2010'),
('2013'),
('2022');

INSERT INTO cover_type (cover_name)
VALUES
('17+'),
('18+'),
('16+');

INSERT INTO game (image, name, author_id, annotation, pub_id, series_id, year_id, game_format, cover_id, weight, janre, mode)
VALUES
('./gamePhoto/lands.jpeg', 'Borderlands 2', 3, 'Пришло время поквитаться с Красавчиком Джеком.  Соберитесь с друзьями, переверните весь мир в поисках несметных сокровищ и оружия — и постарайтесь спасти Пандору от захвата корпорацией «Гиперион».',3, 2, 2, 'PC, PS, Xbox', 3, '13 GB', 'Шутер', 'Однопользовательская игра'),
('./gamePhoto/metro.jpg', 'Metro 2033 Redux', 4, 'В 2013 году на мир обрушился апокалипсис, почти полностью уничтоживший человечество и превративший поверхность Земли в отравленную пустошь.Горстка выживших укрылась в глубинах московского метро, а человечество погрузилось в новое Средневековье.', 3, 4, 1, 'PC, PS, Xbox', 3, '10 GB', 'Шутер', 'Однопользовательская игра');

INSERT INTO users (full_name, login, email, password, avatar) VALUES
('Соловов Михаил', 'zubaka', 'm_solovov@mail.ru', '123', 'uploads/1670630480ava_2.jpeg');

INSERT INTO cart (users_id, game_id, game_count)
VALUES
(1, 1, 3);

INSERT INTO comments (users_id, game_id, grade, game_com)
VALUES 
(1, 1, 8, 'Хорошая игра!');