@servers(['web' => '127.0.0.1', 'server' => 'ssh-smi.alwaysdata.net'])
{{-- @servers(['server' => 'ssh-smi.alwaysdata.net']) --}}

@setup
    // Execute php tasks first
    $server = 'https://github.com/desmond8500/Yk-Invoices-Web.git';

@endsetup

{{-- Cloner un repo --}}
@story('install', ['on' => 'web'])
    init
    env
@endstory

{{-- Configurer la base de donnée locale --}}
@task('env', ['on' => 'web'])
    cp .env.example .env
    php artisan key:generate
    touch database/database.sqlite
@endtask

{{-- Mettre à jour le server --}}
@task('pull', ['on' => 'web'])
    git pull {{ $server }}
@endtask

{{-- Initialiser un projet --}}
@task('init', ['on' => 'web'])
    git clone {{ $server }}
    cd taabour-server
    composer install
@endtask

{{-- Connexion au serveur distant --}}
@task('ssh', ['on' => 'web'])
    ssh smi@ssh-smi.alwaysdata.net
@endtask
