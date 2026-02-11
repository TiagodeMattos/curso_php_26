# Tutorial
l
- Abrir vscode ver se ta logado ubunto (canto inferior 
esquerdo), depois file open folder: seleciona tudo e apaga.

- /var/www/html e da um ok. Após, terminal novo terminal.
git clone LINK_GITHUD da um enter. Novamente, file open folder: seleciona
tudo e apaga.

- /var/www/html/curso_php_26 e da um ok. Após, terminal novo terminal 
verificar se esta em: /var/www/html/curso_php_26.

# MariaDB

CREATE database curso_php_26;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.

sudo mysql -uroot -p

Exemplo:

drop table if exists  `pessoa_juridica`;

CREATE TABLE `pessoa_juridica` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) DEFAULT NULL,

  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

select u.* from usuario as u
inner join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

-- C create (criar 1 usuario) 
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES (
  "fulano de tal", "fulano@ciclano.com.br", false, false); 
  "Beltrano de tal". beltrano@ciclano.com.br", false, false

-- D Delete (Excluir 1 usuario)
Delete FROM usuario WHERE id = 3;

-- R read (todos usuarios)
SELECT * from usuario;

-- R read Only (1 usuario)
select * from usuario WHERE id = 3;

-- U Updade Only (mais de 1 usuario)
Update usuario SET email="ariel@infoserv.com" WHERE id =1;

-- U Updade Only (1 usuario)
Update usuario SET status=true, cadastro_preenchido=true 
WHERE IN (1,2);

-- D Delete (Excluir mais usuario)
delete from usuario WHERE id IN (3, 7);

-- ALTER TABLE 
ALTER TABLE usuario ADD Column cadastro_preenchido bool default false;

ALTER TABLE usuario MODIFY Column cadastro_preenchido bool NOT NULL default;

ALTER TABLE usuario DROP Column cadastro_preenchido;

--DATAS AUTOMATICAS 

ALTER TABLE usuario DROP COLUMN criado_em;

ALTER TABLE usuario ADD COLUMN criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;

ALTER TABLE usuario DROP COLUMN atualizado_em;

ALTER TABLE usuario ADD COLUMN atualizado_em DATETIME DEFAULT NULL ON UPDADE CURRENT_TIMESTAMP 