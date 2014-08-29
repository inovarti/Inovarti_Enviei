Inovarti_Enviei
===============

extensão com a API para integrar com o Enviei


API (SOAP)

Resource Name: enviei
Methods:
orders - Obtém a lista de pedidos com envío Correios.
          

Faults:
100 - Order not exists.	



Setup

1. Descompactar o arquivo ZIP e copiar os arquivos para o Magento.


2. Configurar o modulo Enviei no admin


"Sistema -> Configurações -> Inovarti -> Enviei

Endereço = Linha do campo de endereço para ser usado como logradouro.

Número = Linha do campo de endereço para ser usado como número.

Complemento = Linha do campo de endereço para ser usado como complemento
"


3. Criar uma Função para o SOAP e marcar os recursos do Enviei. 


"Sistema -> Serviços Web -> SOAP/XML-RPC - Roles"

4. Criar um usuário para SOAP e marcar como Função a função criada anteriormente.

"Sistema -> Serviços Web -> SOAP/XML-RPC - Users"
