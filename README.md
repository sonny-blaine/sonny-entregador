
Entidades
* Volume
* Carga
* Destinatario
* Entregador
* Rota
    
**Volume** - Uma mercadoria entregue por um 
respons�vel para ser entregue a um destinat�rio � um determinado destino. 

O Volume possui: 
* Um Remetente
* Um destinat�rio
* Altura
* Peso
* Largura
* Comprimento
* Situa��o
* Logs

**Remetente** - � o responsavel pelo Volume

**Destinat�rio** - Quem ir� receber o Volume

**Entregador** - Um Respons�vel por realizar a entrega de uma carga
+ Carga

**Carga** - � composta por Volumes a serem entregues a
seus respectivos destinat�rios.
+ Entregador
+ Volumes
+ Situa��o
+ Log

**Roteirizador** - Respon�vel por montar uma carga e 
designar quem ser� o Entregador.

Roteiro:

Receber Novo Volume: Trata-se do recebimento de um novo volume

* Comandos: 
    * Analisar Novo Volume - Analisar as caracteristicar do volume e certificar-se de que � v�lido.
        * Comandos
            - Aceitar
                * Comandos:
                    + Registrar Volume
                        * Evento
                            + Emitir Comprovante ao Remetente 
            - Rejeitar
                * Comandos:
                    - Retornar ao Rementente que o Volume � inv�lido
                * Evento:
                    - Criar Log
                    
Roteirizar Entrega de Volumes

* Comandos:
    + Criar Carga
    + Buscar Volumes Pendentes
        * Comandos:
            Adicionar Volumes na Carga                 
       
   
    


