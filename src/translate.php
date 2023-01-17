<?php

bindtextdomain('main', __DIR__ . '/../locale/');
bind_textdomain_codeset('main', 'UTF-8');
textdomain('main');

setlocale(LC_ALL, $_COOKIE['locale'] ?? 'en_GB' . '.UTF-8');
