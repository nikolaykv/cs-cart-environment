<?php

if ($mode == 'manage') {
    $data = 2;

    Tygh::$app['view']->assign('all_data', $data);

    fn_print_r(1);
}