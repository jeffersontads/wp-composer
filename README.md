Projeto wordpress com o gerenciador de pacotes composer!

<h2>Repositório para testes usando composer para gerenciar plugins e temas do wordpress</h2>

Apos clonar o repositorio, na pasta raiz de um composer install
como as pastas do WP foram alteradas você precisa configurar o VHOSTS do apache de sua máquina (APACHE)
<b>no windows:</b>
 
 ![image](https://user-images.githubusercontent.com/35350879/134098181-f9e96c3c-6298-4cb0-bd4d-80539cd47881.png)


<h2>host local no windows</h2>

127.0.0.1 nomedoprojeto.local<br><br>
::1 nomedoprojeto.local<br>
agora é so acessar do seu navegador http://nomedoprojeto.local<br>

  <h2>NO LINUX: </h2>

###### CONFIGURAR VHOST ##########
sudo nano /etc/apache2/http-vhosts
inserir dados do vhosts
<pre>
<VirtualHost *:80>
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
</pre>
<b>salve e feche</b> 

Agora no terminal digite os seguintes comandos:
sudo a2ensite && a2enmod rewrite && sudo /etc/init.d/apache2 restart

### CONFIGURAR HOST LOCAL ###
sudo nano /etc/hosts
127.0.0.1       nomedoprojeto.local

<h3>EXTRAS (NÃO É NECESSARIO MAIS SE PRECISAR) SE BAIXAR O BANCO DE PRODUÇÃO OU DE ALGUM OUTRO LUGAR ESPECIFICO</h3>
##### REPLACE BANCO DE DADOS COM WP-CLI ########

wp --allow-root search-replace 'https://nomedoprojeto.com.br' 'http://nomedoprojeto.local' --recurse-objects --skip-columns=guid --skip-tables=wp_users<br>

sudo chmod +x wp-cli.phar && sudo mv wp-cli.phar /usr/local/bin/wp

<b>AGORA É SO CONTINUAR A INSTALAÇÃO NORMAL DO WORDPRESS E LEMBRE-SE PARA ATUALIZAR OS PLUGINS É TUDO VIA COMPOSER</b>
