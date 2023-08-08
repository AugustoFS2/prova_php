DROP SCHEMA sistema_provas;
DROP TABLE login_user;

CREATE SCHEMA sistema_provas;

CREATE TABLE login_user (
	id_user INT NOT NULL PRIMARY KEY,
	nome_user VARCHAR(25) NOT NULL,
	senha_user VARCHAR(12) NOT NULL UNIQUE
)