<?php
return array(

    'driver' => 'smtp',

    'host' => 'smtp.gmail.com',

    'port' => 587,

    'from' => array('address' => 'noreply@casteldomainmanager.be', 'name' => 'Castel Domain Manager'),

    'encryption' => 'tls',

    'username' => 'dekennes',

    'password' => 'snahnb8p',

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,

);