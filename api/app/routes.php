<?php

$user = new \App\Models\User();

$app->get('/test', $user->data());
