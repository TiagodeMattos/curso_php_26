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


Exemplo:

drop table if exists  `pessoa_juridica`;

CREATE TABLE `pessoa_juridica` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) DEFAULT NULL,

  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;