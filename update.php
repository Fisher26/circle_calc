<?php
exec('cd public_html/circle && git pull origin master >/dev/null 2>&1')
header('location:index.html');
exit();