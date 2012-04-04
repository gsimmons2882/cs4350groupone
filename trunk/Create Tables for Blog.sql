
CREATE TABLE final_post
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(128) NOT NULL,
	content TEXT NOT NULL,
	tags TEXT,
	status INTEGER NOT NULL,
	create_time INTEGER,
	update_time INTEGER,
	author_id INTEGER NOT NULL,
	CONSTRAINT FK_post_author FOREIGN KEY (author_id)
		REFERENCES final_user (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE final_tag
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(128) NOT NULL,
	frequency INTEGER DEFAULT 1
);

CREATE TABLE final_user
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	salt VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL,
	profile TEXT
);

CREATE TABLE final_comment
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content TEXT NOT NULL,
	status INTEGER NOT NULL,
	create_time INTEGER,
	author VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL,
	url VARCHAR(128),
	post_id INTEGER NOT NULL,
	CONSTRAINT FK_comment_post FOREIGN KEY (post_id)
		REFERENCES final_post (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE final_lookup
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(128) NOT NULL,
	code INTEGER NOT NULL,
	type VARCHAR(128) NOT NULL,
	position INTEGER NOT NULL
);

INSERT INTO final_user(username, password, salt, email, profile)
VALUES('Death', 'b847d3ff3f21d81bf40568ba27c8cc44',	'abcde', 'kickenerbutt@gmail.com', 'I hate my life.');

INSERT INTO final_user(username, password, salt, email, profile)
VALUES('Garrett', 'b847d3ff3f21d81bf40568ba27c8cc44', 'abcde', 'garrettsimmons2772@gmail.com', 'I have a hat.');

INSERT INTO final_user(username, password, salt, email, profile)
VALUES('Stephen', 'b847d3ff3f21d81bf40568ba27c8cc44', 'abcde', '', 'I have a hat a laptop.');


INSERT INTO final_lookup( name, code,
TYPE )
VALUES (
'Draft', 1, 'PostStatus'
);
INSERT INTO final_lookup( name, code,
TYPE )
VALUES (
'Publish', 2, 'PostStatus'
);
INSERT INTO final_lookup( name, code,
TYPE )
VALUES (
'Archive', 3, 'PostStatus'
);

