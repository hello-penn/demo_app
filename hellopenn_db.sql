-- Created by Vertabelo (http://vertabelo.com)
-- Model: GLnpBqR8qn5oqbrGX7NNeKKd3LZbbIDqHcucofO3rTQO9Flx3vxL9sjZkfneIuBl
-- Version: chcHaVcrJOJHQI1ZFFANJ7QNC3tKsY51Fxdmi6UrOS6g1Y5az4HYuznl0Lt0xSXZ
-- Script type: create
-- Scope: [tables, references, sequences, views, procedures]
-- Generated at Wed Jan 08 20:31:18 CET 2014

DROP DATABASE IF EXISTS hellopenn;
CREATE DATABASE hellopenn;
USE hellopenn;

-- tables
-- Table ideas
CREATE TABLE ideas (
    id int  NOT NULL AUTO_INCREMENT,
    user_id int  NOT NULL,
    name varchar(255) NOT NULL,
    description text  NOT NULL,
    link varchar(255),
    up int,
    down int,
    active int,
    category_id int,
    created_at timestamp,
    PRIMARY KEY (id)
);

-- Table categories
CREATE TABLE categories (
    id int  NOT NULL AUTO_INCREMENT,
    name varchar(255)  NOT NULL,
    created_at timestamp,
    PRIMARY KEY (id)
);

-- Table user
CREATE TABLE users (
    id int  NOT NULL AUTO_INCREMENT,
    username varchar(255)  NOT NULL,
    email varchar(255)  NOT NULL,
    up int,
    down int,
    role int,
    created_at timestamp,
    PRIMARY KEY (id)
);

-- Table comments
CREATE TABLE comments (
    id int  NOT NULL AUTO_INCREMENT,
    text text  NOT NULL,
    user_id int  NOT NULL,
    idea_id int  NOT NULL,
    created_at timestamp,
    PRIMARY KEY (id)
);





-- foreign keys
-- Reference:  user_idea (table: ideas)


ALTER TABLE ideas ADD CONSTRAINT user_idea FOREIGN KEY user_idea (user_id)
    REFERENCES users (id)

 
 
;-- Reference:  Idea_category (table: Idea)


ALTER TABLE ideas ADD CONSTRAINT idea_category FOREIGN KEY idea_category (category_id)
    REFERENCES categories (id)

 
 
;-- Reference:  Comments_User (table: Comments)


ALTER TABLE comments ADD CONSTRAINT comments_users FOREIGN KEY comments_users (user_id)
    REFERENCES users (id)

 
 
;-- Reference:  Comments_Idea (table: Comments)


ALTER TABLE comments ADD CONSTRAINT comments_ideas FOREIGN KEY comments_ideas (idea_id)
    REFERENCES ideas (id)

 
 
;

INSERT INTO categories (name, created_at) VALUES ('categorie 1', NOW());
-- End of file.

