# Mini CRM
## Companies and Employees

#### Install Laravel 
```
laravel new mini-crm
```
#### Setup Virtual host (optional)
```
C:\Windows\System32\drivers\etc\hosts(file)
ADD 
127.0.0.1 mini-crm.test

C:\xampp\apache\conf\extra\httpd-vhosts.conf
ADD 
<VirtualHost *:80>
DocumentRoot "c:/xampp/htdocs/mini-crm/public"
ServerName mini-crm.test
<Directory "c:/xampp/htdocs/mini-crm/public">
</Directory>
</VirtualHost>
```

#### Configure DB
```
in .env file
```

#### Upload on github (optional) 
```
git init
git commit -m "Laravel Installation"
git branch -M main
git remote add origin https://github.com/yousoftme/mini-crm.git
git push -u origin main
```