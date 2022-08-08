<?php

namespace douggonsouza\benchmarck;

use douggonsouza\benchmarck\identify;

//Adiciona configurações identificadas benchmarck

$identify = new identify();

$identify::add('defaultLayout', '/layouts/default.phtml');
$identify::add('dashboard', '/layouts/dashboard.phtml');
$identify::add('dashboard1', '/layouts/dashboard1.phtml');
$identify::add('dashboard2', '/layouts/dashboard2.phtml');
$identify::add('dashboard3', '/layouts/dashboard3.phtml');
$identify::add('dashboardCssBlock', '/blocks/dashboardCssBlock.phtml');
$identify::add('dashboardHeaderMobileBlock', '/blocks/dashboardCssBlock.phtml');
$identify::add('dashboardJsBlock', '/blocks/dashboardCssBlock.phtml');
$identify::add('dashboardMenuSidebarBlock', '/blocks/dashboardCssBlock.phtml');
$identify::add('dashboardPageContainerBlock', '/blocks/dashboardPageContainerBlock.phtml');
$identify::add('dashboardPageContainerdMainContentBlock', '/blocks/dashboardPageContainerdMainContentBlock.phtml');
$identify::add('dashboardPageContainerHeaderDesktopBlock', '/blocks/dashboardPageContainerHeaderDesktopBlock.phtml');
$identify::add('dashboard1CssBlock', '/blocks/ashboard1CssBlock.phtml');
$identify::add('dashboard1PageContainerBlock', '/blocks/ddashboard1PageContainerBlock.phtml');
$identify::add('dashboard1PageContainerBlock', '/blocks/ddashboard1PageContainerBlock.phtml');
$identify::add('dashboard1PageContainerBlock', '/blocks/ddashboard1PageContainerBlock.phtml');
$identify::add('dashboard1PageContainerBlock', '/blocks/ddashboard1PageContainerBlock.phtml');
$identify::add('dashboard1JsBlock', '/blocks/dashboard1JsBlock.phtml');
$identify::add('dashboard1MenuSidebarBlock', '/blocks/dashboard1MenuSidebarBlock.phtml');
$identify::add('login', '/blocks/login/loginFrame.phtml');


return $identify;
?>