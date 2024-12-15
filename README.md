# Gerenciador de Contatos

## Descrição
O projeto é um sistema de gerenciamento de contatos que permite armazenar, visualizar, editar e excluir informações de contatos.

## Tecnologias
- PHP
- Laravel

## Requisitos
- Linux ou macOS ou Windows (usando [WSL2](https://www-digitalocean-com.translate.goog/community/tutorials/how-to-install-the-windows-subsystem-for-linux-2-on-microsoft-windows-10?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=pt&_x_tr_pto=tc&_x_tr_hist=true))
- [Docker e Docker Compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04-pt) 

## Instalação
1. Clone o repositório
```bash
git clone https://github.com/rayconbatista/contact-manager.git
```
2. Entre na pasta do projeto
```bash
cd contact-manager
```
3. Instale as dependências
```bash
./vendor/bin/sail composer install
```
4.  Crie o arquivo de configuração
```bash
cp .env.example .env
```
5. Execute o comando para criar o banco de dados
```bash
./vendor/bin/sail artisan migrate
```
6. Execute o comando para iniciar o servidor
```bash
./vendor/bin/sail up -d
```
7. A porta 80 é padrão do laravel, caso seja necessário mudar, altere o valor da variável APP_PORT no arquivo .env
8. Acesse a aplicação em http://localhost:80