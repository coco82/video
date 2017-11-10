<?php
// Logic for our views
$app->get('/profile{username}', function ($request, $response, $args) {
    // Pass something
    return $this->view->render($response, 'home.twig', 
            ['name' => $args['username'],
                ]); 
});

// Root
$app->get('/profile/{username}', function ($request, $response, $args) {
    echo $args['username'];
    })->SetName('user.profile');