<?php
exec('git pull origin master');
header('location:index.html');
exit();