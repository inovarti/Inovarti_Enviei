Inovarti_Enviei
===============

extens�o com a API para integrar com o Enviei


API (SOAP)

Resource Name: enviei
Methods:
orders - Obt�m a lista de pedidos com env�o Correios.
          

Faults:
100 - Order not exists.	



Setup

1. Descompactar o arquivo ZIP e copiar os arquivos para o Magento.


2. Configurar o modulo Enviei no admin


"Sistema -> Configura��es -> Inovarti -> Enviei

Endere�o = Linha do campo de endere�o para ser usado como logradouro.

N�mero = Linha do campo de endere�o para ser usado como n�mero.

Complemento = Linha do campo de endere�o para ser usado como complemento
"


3. Criar uma Fun��o para o SOAP e marcar os recursos do Enviei. 


"Sistema -> Servi�os Web -> SOAP/XML-RPC - Roles"

4. Criar um usu�rio para SOAP e marcar como Fun��o a fun��o criada anteriormente.

"Sistema -> Servi�os Web -> SOAP/XML-RPC - Users"
