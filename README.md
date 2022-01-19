# Informações Sobre a Aplicação

- O Banco de dados foi colocado dentro de um container Docker.
    - A pasta mysql-dump na raiz do projeto é responsável na criação da estrutura do Banco de dados, no start do container, o script irá ser rodado e assim fazendo a estruturação do banco de dados.
    - A imagem do mysql está rodando em uma porta alternativa do mysql padrão, 33061, para não dar conflito com um possível mysql local da maquina local.
    - Caso as credências de host ou qualquer outra informação do banco de dados não estiver "batendo", basta alterar no arquivo app/Db/Database.php, nas variáveis no início do documento.

