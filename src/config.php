<?php

namespace douggonsouza\benchmarck;

use douggonsouza\benchmarck\identify;

//Adiciona configurações identificadas benchmarck

$identify = new identify();

$identify::add('defaultLayout', null, '/layouts/default.phtml');
$identify::add('dashboard', null, '/layouts/dashboard.phtml');
$identify::add('dashboard1', null, '/layouts/dashboard1.phtml');
$identify::add('dashboard2', null, '/layouts/dashboard2.phtml');
$identify::add('dashboard3', null, '/layouts/dashboard3.phtml');
$identify::add('login', null, '/blocks/login/loginFrame.phtml');

return $identify;
?>