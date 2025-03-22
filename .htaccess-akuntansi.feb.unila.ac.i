ErrorDocument 404 https://akuntansi.feb.unila.ac.id/

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . https://akuntansi.feb.unila.ac.id/ [L,R=302]
