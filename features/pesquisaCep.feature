# language: pt
Funcionalidade: pesquisar cep
  A fim de realizar uma pesquisa
  Como um usuário no viacep
  é preciso basicamente informar o cep para pesquisa

  Cenário: Pesquisando um cep válido
    Dado que exista um cep "54440480", 
    Quando Eu informar "54440480" na pesquisa
    Então Eu devo ter como resposta um "json" contendo os dados de resposta a busca

  Cenário: Pesquisando um cep inválido
    Dado que exista não exista o cep "54440244",
    Quando Eu informar "54440244" na pesquisa
    Então Eu devo ter como resposta um "json" informando erro como resposta
