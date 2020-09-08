-- TODO: Put ALL SQL in between `BEGIN TRANSACTION` and `COMMIT`
BEGIN TRANSACTION;

-- TODO: create tables

CREATE TABLE images (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	name TEXT NOT NULL,
	file_name TEXT NOT NULL,
	file_ext TEXT NOT NULL,
	description TEXT NOT NULL,
	source TEXT
);

CREATE TABLE tags (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	name TEXT NOT NULL UNIQUE
);

CREATE TABLE image_tags (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	image_id INTEGER NOT NULL,
 	tag_id INTEGER NOT NULL
);

-- TODO: initial seed data

INSERT INTO images (id, name, file_name, file_ext, description, source) VALUES (1, 'Parachute', '1.png', '.png', 'The Effiel Tower is located in Paris, France and was constructed in 1887 by Stephen Sauvestre, Maurice Koechlin, and Émile Nouguier.', 'https://www.livescience.com/29391-eiffel-tower.html');
INSERT INTO images (id, name, file_name, file_ext, description, source) VALUES (2, 'SoundCloud', '2.png', '.png', 'Commisioned in 1632 by the Mughal Emporor Sah Jahan to house the tomb of Mumtaz Mahal, the mausoleum is locted on the south bank of the Yamuna river in Agra and houses the tomb of Mumtaz Mahal.', 'https://www.smithsonianmag.com/travel/eight-secrets-taj-mahal-180962168/');
INSERT INTO images (id, name, file_name, file_ext, description, source) VALUES (3, 'Blue Foundry','3.png', '.png', 'The Statue of Liberty was a gift from the people of France to the people of the United States. It is located in New York and was dedicated on October 28, 1886.', 'https://www.history.com/topics/landmarks/statue-of-liberty');
INSERT INTO images (id, name, file_name, file_ext, description, source) VALUES (4, 'Sage and Sound','4.png', '.png', 'This pyramid was built as a tomb for the Fourth Dynasty Egyptian Pharaoh Khufu and the oldest seven wonder of the world.', 'https://www.planetware.com/tourist-attractions-/pyramids-of-giza-egy-giza-giza.htm');


COMMIT;
