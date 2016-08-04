CREATE TABLE t_user
(
id 					INTEGER  		AUTO_INCREMENT  ,
user_name           VARCHAR(50)  NOT NULL,
pwd VARCHAR(50)					 NOT NULL,
type VARCHAR(50)				 NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE t_assoc_sw
(
id_assoc_sw 		INTEGER 		 AUTO_INCREMENT  ,
name 				VARCHAR(50)      NOT NULL,
description 		VARCHAR(255),
logo 				VARCHAR(50),
website 			VARCHAR(50)					 NOT NULL	,
login_id 			INTEGER,
PRIMARY KEY (id_assoc_sw),
FOREIGN KEY (login_id) REFERENCES t_user(id)
);


CREATE TABLE t_project
(
id_project 			INTEGER  AUTO_INCREMENT  ,
name 				VARCHAR(50)					NOT NULL,
description 		VARCHAR(255),
budget 				double,
deadline 			DATETIME,
status 				VARCHAR(50)                 NOT NULL  ,
document 			VARCHAR(50),
assoc_sw_id 		integer,
PRIMARY KEY (id_project),
FOREIGN KEY (assoc_sw_id) REFERENCES t_assoc_sw(id_assoc_sw),
CONSTRAINT	status CHECK  (status in ('done','in_progress','pending'))
);

CREATE TABLE t_submission
(
id_submission 		INTEGER  					AUTO_INCREMENT  ,
bid 				double						NOT NULL		,
project_id		 	int ,
submission_date 	DATETIME   					NOT NULL,
PRIMARY KEY (id_submission),
FOREIGN KEY (project_id) REFERENCES t_project(id_project)
);

CREATE TABLE t_student
(
id_student 			INTEGER  						AUTO_INCREMENT  ,
name 				VARCHAR(150)					NOT NULL,
email 				VARCHAR(50)						NOT NULL,
school 				VARCHAR(50)						NOT NULL ,
cv 					VARCHAR(50)						NOT NULL,
rating 				double							NOT NULL,
login_id            INTEGER,
PRIMARY KEY (id_student),
CONSTRAINT FOREIGN KEY (login_id) REFERENCES t_user(id),
CONSTRAINT school  CHECK (school in('ensi','esprit','eniso'))

);
