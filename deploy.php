<?php
namespace Deployer;

require 'recipe/laravel.php';

set('application', 'ProyectoTodo');

set('git_tty', true);

// Config

set('repository', 'https://github.com/PRG-EscobarCarrilloPedro1/todo.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('18.235.108.46')
    ->set('remote_user', 'sa04-deployer')
    ->set('identity_file', '~/.ssh/id_rsa')
    ->set('deploy_path', '/var/www/es-cipfpbatoi-deployer/html');

// Hooks

task('artisan:migrate', function () {
   
});

task('build', function () {
    run('cd {{release_path}} && build');
   });

after('deploy:failed', 'deploy:unlock');

