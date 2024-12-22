# Módulo Magento - Retirado na Loja

Este módulo adiciona uma opção de método de entrega customizado no Magento chamada **"Retirado na Loja"**. Este método de entrega não realiza cotação de frete e permite que o cliente selecione a opção de retirar o produto na loja durante o processo de checkout. O método será exibido na visualização do pedido no painel administrativo e no grid de pedidos, onde pode ser filtrado.

## Funcionalidades

- Adiciona o método de entrega **"Retirado na Loja"** no processo de checkout.
- Não realiza cotação de frete para esse método (frete grátis).
- Exibe a opção de entrega na visualização de pedidos na área administrativa do Magento.
- Permite filtrar pedidos por método de entrega na grid de pedidos.

## Pré-requisitos

- Magento 2.4.x ou superior.
- Acesso ao servidor de hospedagem ou ambiente de desenvolvimento Magento.
- Permissões para executar comandos no terminal/SSH do Magento.


## Processo de Instalação

### Passo 1: Coloque os Arquivos do Módulo

1. Faça o upload ou copie os arquivos e pastas do módulo para o diretório `app/code/Custom/Shipping` na sua instalação Magento. Caso as pastas não existam, crie-as.

### Passo 2: Executar os Comandos do Magento

2. Acesse o diretório raiz do seu Magento via terminal ou SSH:

```bash
cd /caminho/para/seu/magento

Execute os seguintes comandos para instalar o módulo:

php bin/magento setup:upgrade
php bin/magento module:enable Custom_Shipping
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush






