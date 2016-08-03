CREATE TABLE t_user
(
id INTEGER NOT NULL AUTO_INCREMENT UNIQUE ,
user_name VARCHAR(50),
pwd VARCHAR(50),
type VARCHAR(50),
PRIMARY KEY (id)
);

CREATE TABLE t_assoc_sw
(
id_assoc_sw INTEGER NOT NULL AUTO_INCREMENT UNIQUE ,
name VARCHAR(50),
description VARCHAR(255),
logo VARCHAR(50),
website VARCHAR(50),
login_id INTEGER,
PRIMARY KEY (id_assoc_sw),
FOREIGN KEY (login_id) REFERENCES t_user(id)
);


CREATE TABLE t_project
(
id_project INTEGER NOT NULL AUTO_INCREMENT UNIQUE ,
name VARCHAR(50),
description VARCHAR(255),
budget double,
deadline DATETIME,
status VARCHAR(50),
document VARCHAR(50),
assoc_sw_id int,
PRIMARY KEY (id_project),
FOREIGN KEY (assoc_sw_id) REFERENCES t_assoc_sw(id_assoc_sw)
);

CREATE TABLE t_submission
(
id_submission INTEGER NOT NULL AUTO_INCREMENT UNIQUE ,
bid double,
project_id int ,
submission_date DATETIME,
PRIMARY KEY (id_submission),
FOREIGN KEY (project_id) REFERENCES t_project(id_project)
);

CREATE TABLE t_student
(
id_student INTEGER NOT NULL AUTO_INCREMENT UNIQUE ,
name VARCHAR(150),
email VARCHAR(50),
school VARCHAR(50),
cv VARCHAR(50),
rating double,
login_id INTEGER,
PRIMARY KEY (id_student),
FOREIGN KEY (login_id) REFERENCES t_user(id)
);
