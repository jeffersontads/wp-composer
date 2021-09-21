# wp-composer
<h2>Repositório para testes usando composer para gerenciar plugins e temas do wordpress</h2>

Apos clonar o repositorio, na pasta raiz de um composer install
como as pastas do WP foram alteradas você precisa configurar o VHOSTS do apache de sua máquina (APACHE)
no windows:

<VirtualHost *:80><br>
	ServerName nomedoprojeto.local<br><br>
	DocumentRoot "c:/wamp64/www/nomedoprojeto/app/"<br>
	<Directory  "c:/wamp64/www/nomedoprojeto/app/"><br>
		Options +Indexes +Includes +FollowSymLinks +MultiViews<br><br>
		AllowOverride All<br>
		Require local<br>
	</Directory><br>
</VirtualHost><br>

host local no windows

127.0.0.1 nomedoprojeto.local<br><br>
::1 nomedoprojeto.local<br>

agora é so acessar do seu navegador http://nomedoprojeto.local<br>

#########################################
  <h2>NO LINUX: <h2>
#########################################

###### CONFIGURAR VHOST ##########
sudo nano /etc/apache2/http-vhosts
inserir dados do vhosts

<VirtualHost *:80><br><br><br>
   ServerName nomedoprojeto.local<br><br>

       <IfModule mpm_itk_module><br>
               AssignUserId jefferson jefferson<br>
       </IfModule><br>

    <Directory "/var/www/html/nomedoprojeto/app/"><br>
        AllowOverride All<br>
    </Directory><br>

        ServerAdmin seu email<br>
        DocumentRoot /var/www/html/nomedoprojeto/app/<br>

        ErrorLog /home/nomedoseuusuario/errors_apache/error.log<br>
        CustomLog ${APACHE_LOG_DIR}/access.log combined<br>
</VirtualHost><br>

<b>salve e feche</b> 

Agora no terminal digite os seguintes comandos:
sudo a2ensite && a2enmod rewrite && sudo /etc/init.d/apache2 restart

### CONFIGURAR HOST LOCAL ###
sudo nano /etc/hosts
127.0.0.1       nomedoprojeto.local

<h2>EXTRAS (NÃO É NECESSARIO MAIS SE PRECISAR) SE BAIXAR O BANCO DE PRODUÇÃO OU DE ALGUM OUTRO LUGAR ESPECIFICO<h2><br><br>
##### REPLACE BANCO DE DADOS COM WP-CLI ########

wp --allow-root search-replace 'https://nomedoprojeto.com.br' 'http://nomedoprojeto.local' --recurse-objects --skip-columns=guid --skip-tables=wp_users<br>

sudo chmod +x wp-cli.phar && sudo mv wp-cli.phar /usr/local/bin/wp

<b>AGORA É SO CONTINUAR A INSTALAÇÃO NORMAL DO WORDPRESS E LEMBRE-SE PARA ATUALIZAR OS PLUGINS É TUDO VIA COMPOSER</b>
