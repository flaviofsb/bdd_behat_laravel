# language: pt
Funcionalidade: pesquisar cep
  A fim de realizar uma pesquisa na api
  Como um usuário no viacep
  é preciso basicamente informar o cep para pesquisa

  Cenário: Pesquisando um cep válido
    Dado que eu queira realizar uma pesquisa na api do viacep, 
    Quando Eu informar na pesquisa "54440480"
    Então Eu devo ter como resposta um json contendo os dados de resposta a busca ou retornar falso