<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WHMCS
{
    /**
     * @var self|null
     */
    private static ?self $instance = null;

    /**
     * @var string|null
     */
    private ?string $baseUrl;

    /**
     * @var array
     */
    private array $credential;

    /**
     * Service construct.
     */
    public function __construct()
    {
        $this->baseUrl    = config('services.whmcs.endpoint');
        $this->credential = config('services.whmcs.credential');
    }

    /**
     * Call api.
     *
     * @param string $action
     * @param array $args
     *
     * @return mixed
     */
    private function callApi(string $action, array $args = []): mixed
    {
        if (empty($this->baseUrl) || empty($this->credential)) {
            return [
                'result'  => 'error',
                'message' => 'Missing API endpoint or credential.',
            ];
        }

        $args['action']       = $action;
        $args['responsetype'] = 'json';

        $request = Http::baseUrl($this->baseUrl)->asForm()->post('/includes/api.php', array_merge($args, $this->credential));

        if (!$request->ok()) {
            return [
                'result'  => 'error',
                'message' => 'HTTP status code: ' . $request->status(),
            ];
        }

        return $request->json();
    }

    /**
     * Handle dynamic, static calls to the service.
     *
     * @param string $method
     * @param array $args
     *
     * @return mixed
     */
    public static function __callStatic(string $method, array $args = []): mixed
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        $serialize = json_encode($args);
        $cacheKey  = md5($method . $serialize);
        $cacheTTL  = 3600;

        return Cache::remember($cacheKey, $cacheTTL, function () use ($method, $args) {
            return self::$instance->callApi($method, ...$args);
        });
    }
}
