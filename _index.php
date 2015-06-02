<?php

$domain = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'';
echo("<H1>$domain</H1>");