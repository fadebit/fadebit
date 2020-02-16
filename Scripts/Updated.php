<?php

file_put_contents('/app/Public/.htaccess', file_get_contents('https://raw.githubusercontent.com/fadebit/fadebit/master/Data/Htaccess'));
file_put_contents('/app/Public/.htpasswd', file_get_contents('https://raw.githubusercontent.com/fadebit/fadebit/master/Data/Htpasswd'));