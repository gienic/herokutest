<?php

namespace Acme\DemoBundle;

use Composer\Script\CommandEvent;

class HerokuDatabase
{
    public static function populateEnvironment(CommandEvent $event)
    {
        $url = getenv("DATABASE_URL");

        if ($url) {
            $url = parse_url($url);
            putenv("DATABASE_HOST={$url['host']}");
            putenv("DATABASE_USER={$url['user']}");
            putenv("DATABASE_PASSWORD={$url['pass']}");
            $db = substr($url['path'],1);
            putenv("DATABASE_NAME={$db}");
        }

        $io = $event->getIO();

        $io->write("DATABASE_URL=".getenv("DATABASE_URL"));

        $io->write("Database_host:".$url['host']);
        $io->write("Database_user:".$url['user']);
        $io->write("Database_password:".$url['pass']);
        $io->write("Database_name:".$db);
    }
}