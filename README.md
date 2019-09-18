Sistema para gestão, marketing e logista para empresa de reciclagem de óleo.
==============================================================================

Resumo do projeto
-----------------------------
O projeto consiste em desenvolver um sistema web que deverá suprir as
necessidades da empresa Coletar, nosso atual cliente, visto que apresentava dificuldades
para organizar os óleos a serem retirados, falta de divulgação e gestão de seus clientes.
Com o objetivo de resolver esses problemas, faremos um sistema web com todas as
ferramentas necessárias como tabela de organização de clientes, retiradas de óleo, links
que direcionam o usuário para as respectivas redes sociais, além de possuir todas as
informações necessárias sobre a empresa e serviços oferecidos. O site ainda conta com
um formulário de login do usuário e do administrador.
Com isso resolveremos a má gestão de clientes e logística, ampliaremos o alcance da
marca e aumentaremos a lucratividade da empresa.


O sistema 
------------------------
O site contem um sistema CRUD (create, read, update e delete)
que, traduzido, significa: Criação, Leitura, Atualização e Destruição. Esse sistema é
referente ao usuários.
Fizemos uma tabela para mostrar para o administrador a quantidade de óleo depositado,
outra tabela contendo as duvidas dos clientes que acessam o site e uma aba com os
bairros nos quais a coleta acontece com maior frequência


Política de Segurança da Informação
-----------------------------------------
A autenticação no website será baseada em uma senha, esse meio é mais utilizado por
ser de fácil implementação.
A senha do administrador e usuário deverá conter no mínimo 8 caracteres alfanuméricos.
Os campos dos formulários estão protegidos contra xss, que é um tipo de vulnerabilidade
do sistema web no qual os usuários inserem scripts dentro das páginas web, e crfs que é
um tipo de exploit malicioso de um website, no qual comandos não autorizados são
transmitidos a partir de um usuário confiável.


Linguagens utilizadas
-------------------------
Utilizamos HTML, CSS, JavaScript e o framework Bootstrap para estilização das páginas.
Como linguagem de programação utilizamos PHP juntamente com o  framework [codeigniter 3](https://codeigniter.com/).
Banco de dados usamos o PhpMyAdmin.
