Projeto wordpress com o gerenciador de pacotes composer!

<h2>Repositório para testes usando composer para gerenciar plugins e temas do wordpress</h2>

Apos clonar o repositorio, na pasta raiz de um composer install
como as pastas do WP foram alteradas você precisa configurar o VHOSTS do apache de sua máquina (APACHE)
<b>no windows:</b>
 
 ![image](https://user-images.githubusercontent.com/35350879/134098181-f9e96c3c-6298-4cb0-bd4d-80539cd47881.png)


<h2><b>host local no windows</b></h2>

![image](https://user-images.githubusercontent.com/35350879/134098257-cfc5b7ab-19fb-4d44-98a0-31f7a9f9e3cd.png)

feito isso basta 
acessar do seu navegador http://nomedoprojeto.local

  <h2>CONFIGURAR VHOST NO LINUX (UBUNTU/DEBIAN): </h2>

###### CONFIGURAR VHOST ##########
sudo nano /etc/apache2/http-vhosts<br>
Inserir dados para config do vhosts

![image](https://user-images.githubusercontent.com/35350879/134098453-227efb19-9f07-458d-8f8c-db612937e3c9.png)

<b>salve e feche</b> 

Agora no terminal digite os seguintes comandos:<br>
sudo a2ensite && a2enmod rewrite && sudo /etc/init.d/apache2 restart

### CONFIGURAR HOST LOCAL LINUX (UBUNTU/DEBIAN) ###

sudo nano /etc/hosts<br>

127.0.0.1       nomedoprojeto.local<br>

<h3>EXTRAS (NÃO É NECESSARIO MAIS SE PRECISAR) SE BAIXAR O BANCO DE PRODUÇÃO OU DE ALGUM OUTRO LUGAR ESPECIFICO</h3>
##### REPLACE BANCO DE DADOS COM WP-CLI ########

wp --allow-root search-replace 'https://nomedoprojeto.com.br' 'http://nomedoprojeto.local' --recurse-objects --skip-columns=guid --skip-tables=wp_users<br>

sudo chmod +x wp-cli.phar && sudo mv wp-cli.phar /usr/local/bin/wp

<b>AGORA É SO CONTINUAR A INSTALAÇÃO NORMAL DO WORDPRESS E LEMBRE-SE PARA ATUALIZAR OS PLUGINS É TUDO VIA COMPOSER</b>
