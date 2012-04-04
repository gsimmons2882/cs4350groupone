SET SQL_MODE = 'ANSI_QUOTES';

CREATE TABLE tbl_post
(
    id  INT AUTO_INCREMENT PRIMARY KEY,
    title                                               VARCHAR(128), 
    content                                         VARCHAR(255),
    tags                                              VARCHAR(128),
    status                                              INT,
    create_time                                 INT,
    update_time                                INT,
    author                      INT 
);

CREATE TABLE tbl_tag
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name    VARCHAR(50),
    frequency    INT
);

CREATE TABLE tbl_user
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username    VARCHAR(50),
    password    VARCHAR(60),
    salt                VARCHAR(20),
    email               VARCHAR(50),
    profile                 VARCHAR(255)
);

CREATE TABLE tbl_comment
(
    id  INT AUTO_INCREMENT PRIMARY KEY,
    content             VARCHAR(255),
    status      INT,
    create_time          INT,
    name              VARCHAR(60),
    email               VARCHAR(60),
    website         VARCHAR(255),
    post_id               INT
);

CREATE TABLE tbl_lookup
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128),
    code INT,
    type VARCHAR(128),
    position INT,
    status INT
);
ALTER TABLE tbl_comment
ADD FOREIGN KEY (post_id) REFERENCES Post(id);
ALTER TABLE tbl_post
ADD FOREIGN KEY (author) REFERENCES User(id);
