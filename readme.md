⭐      M.V.C     ⭐

☑️ Model => Dados
☑️ View => HTML
☑️ Controlador => Fornecer dados a view(html) e manipular os models(dados)


⭐ BD Relacional ⭐
☑️=> semelhante a uma planilha
☑️=>possuindo colunas e linhas
☑️=> Relaciona chaves com dados

⭐ Criação de tabelo no Banco ⭐
☑️  100% script via BeeKeeper Studio

🔹Script🔹
🔻🔻🔻Criar Tabela🔻🔻🔻
CREATE TABLE livros (
	id int,
  titulo varchar(255),
  autor varchar(100),
  descricao text
)

🔻🔻🔻Excluir Tabela🔻🔻🔻
drop database livros;

🔻🔻🔻Cria um registro🔻🔻🔻
insert into livros (titulo, autor, descricao, ano_de_lancamento)
	values('Lorem', 'Lorem da silva', 'lorem..', 1994);
-> Utilizar aspas simples.

🔻🔻🔻Atualizar/Alterar tabela🔻🔻🔻
alter table livros add column nro_paginas integer ;
