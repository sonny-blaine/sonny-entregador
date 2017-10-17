
Entidades
* Volume
* Carga
* Destinatario
* Entregador
* Rota
    
**Volume** - Uma mercadoria entregue por um 
responsável para ser entregue a um destinatário à um determinado destino. 

O Volume possui: 
* Um Remetente
* Um destinatário
* Altura
* Peso
* Largura
* Comprimento
* Situação
* Logs

**Remetente** - É o responsavel pelo Volume

**Destinatário** - Quem irá receber o Volume

**Entregador** - Um Responsável por realizar a entrega de uma carga
+ Carga

**Carga** - É composta por Volumes a serem entregues a
seus respectivos destinatários.
+ Entregador
+ Volumes
+ Situação
+ Log

**Roteirizador** - Responável por montar uma carga e 
designar quem será o Entregador.

Roteiro:

Receber Novo Volume: Trata-se do recebimento de um novo volume

* Comandos: 
    * Analisar Novo Volume - Analisar as caracteristicar do volume e certificar-se de que é válido.
        * Comandos
            - Aceitar
                * Comandos:
                    + Registrar Volume
                        * Evento
                            + Emitir Comprovante ao Remetente 
            - Rejeitar
                * Comandos:
                    - Retornar ao Rementente que o Volume é inválido
                * Evento:
                    - Criar Log
                    
Roteirizar Entrega de Volumes

* Comandos:
    + Criar Carga
    + Buscar Volumes Pendentes
        * Comandos:
            Adicionar Volumes na Carga                 
       
   
    


