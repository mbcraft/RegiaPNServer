<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "/api/v1_0/notify/register_instance",
        "/api/v1_0/notify/error",
        "/api/v1_0/notify/instance_started",
        "/api/v1_0/notify/service_started",
        "/api/v1_0/notify/service_stopped",
        "/api/v1_0/notify/update_started",
        "/api/v1_0/notify/update_completed",

        "/api/v1_0/update/check",
        "/api/v1_0/update/request",
        "/api/v1_0/update/download",

        "/api/v1_0/access/get_ftp_login_tokens",

        "/api/v1_0/jobs/timed_scan_and_encode",
        
        "/admin/system_notifications/readed",
        "/admin/player_notifications/readed"
    ];
}
