--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/anandaloke.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/anandaloke.com-bytes_log
documentroot: /home/anandaloke/public_html
group: anandaloke
hascgi: 1
homedir: /home/anandaloke
ip: 216.245.220.158
owner: root
phpopenbasedirprotect: 1
phpversion: ea-php74
port: 80
scriptalias: 
  - 
    path: /home/anandaloke/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@anandaloke.com
serveralias: mail.anandaloke.com www.anandaloke.com
servername: anandaloke.com
usecanonicalname: 'Off'
user: anandaloke
