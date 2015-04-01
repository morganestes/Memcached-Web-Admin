<?php
namespace MorganEstes\MemcacheWebAdmin;

require_once __DIR__ . '/vendor/autoload.php';

use Slim\Slim;

$app = new Slim();

$app->get('/stats(/:type)', function ($type = null) use ($app) {
if ( null === $type ) {
    // @todo display stats overview page
} else {
    // @todo return data for specific page
}
});
