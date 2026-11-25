<?php
// Build a public, read-only tour from the Laravel routes and a new seeded SQLite database.
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';
$db = tempnam(sys_get_temp_dir(), 'mahsoul-demo-');
register_shutdown_function(static fn() => unlink($db));
foreach (['APP_ENV' => 'testing', 'APP_DEBUG' => 'false', 'APP_KEY' => 'base64:'.base64_encode(random_bytes(32)), 'DB_CONNECTION' => 'sqlite', 'DB_DATABASE' => $db, 'SESSION_DRIVER' => 'array','CACHE_DRIVER' => 'array','QUEUE_CONNECTION' => 'sync','APP_URL' => 'http://demo.invalid'] as $key => $value) {
    putenv("$key=$value");
    $_ENV[$key] = $_SERVER[$key] = $value;
}
$app = require 'bootstrap/app.php';
if ($app->configurationIsCached()) throw new RuntimeException('Run from a checkout without cached configuration.');
$kernel = $app->make(Kernel::class);
$kernel->bootstrap();
if (config('database.default') !== 'sqlite' || config('database.connections.sqlite.database') !== $db) throw new RuntimeException('Expected isolated demo database.');
if (Artisan::call('migrate', ['--seed' => true, '--force' => true]) !== 0) throw new RuntimeException(Artisan::output());
$out = base_path('demo-dist');
File::ensureDirectoryExists($out);
$routes = ['/', '/about', '/faq', '/products', '/experts', '/formation'];
foreach ($routes as $route) {
    $request = Request::create('http://demo.invalid'.$route);
    $response = $kernel->handle($request);
    if ($response->getStatusCode() !== 200) throw new RuntimeException($route.' returned '.$response->getStatusCode());
    $doc = new DOMDocument();
    @$doc->loadHTML('<?xml encoding="UTF-8">'.$response->getContent());
    $xpath = new DOMXPath($doc);
    foreach ($xpath->query('//form | //meta[@name="csrf-token"]') as $node) $node->parentNode->removeChild($node);
    foreach ($xpath->query('//a[@href]') as $link) {
        $href = str_replace('http://demo.invalid', '', $link->getAttribute('href'));
        if (in_array($href, $routes, true) || str_starts_with($href,'#') || str_starts_with($href,'https://')) {
            $link->setAttribute('href', $href);
        } else {
            $link->removeAttribute('href');
        }
    }
    $banner = $doc->createElement('p','Visite en lecture seule · Données de démonstration');
    $banner->setAttribute('style','text-align:center;padding:.5rem;background:#edf5db;color:#193d24');
    $body = $doc->getElementsByTagName('body')->item(0);
    $body->insertBefore($banner, $body->firstChild);
    $file = $route === '/' ? 'index' : substr($route,1);
    file_put_contents("$out/$file.html",str_replace(['<?xml encoding="UTF-8">','http://demo.invalid/'],['','/'],$doc->saveHTML()));
    $kernel->terminate($request, $response);
}
foreach (['images','build','js'] as $dir) if (is_dir(public_path($dir))) File::copyDirectory(public_path($dir),"$out/$dir");
