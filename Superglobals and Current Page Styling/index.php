<?php

$heading = 'home';
// Include the view file (template)

require "Functions.php";
//echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300';

require "views/index.view.php";