<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, string>
     * @phpstan-var array<string, class-string>
     */
    public array $aliases = [
        'csrf'          => \CodeIgniter\Filters\CSRF::class,
        'toolbar'       => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot'      => \CodeIgniter\Filters\Honeypot::class,
        'adminfilter'    => \App\Filters\AdminFilter::class,
        'userfilter'    => \App\Filters\UserFilter::class,
        'guestfilter'    => \App\Filters\GuestFilter::class,
    ];


    public $globals = [
        'before' => [
            'adminfilter' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                '/'
             ]] ,
             'userfilter' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                '/'
             ]],
             'guestfilter' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                '/'
             ]],


        ],
            // 'honeypot',
            // 'csrf',
        'after' => [
            'adminfilter' => ['except' => [
                
                'web', 'web/*',
                'menu', 'menu/*',
                'formtambahdata', 'formtambahdata/*',
                'formtambahuser', 'formtambahuser/*',
                'tabelpentest', 'tabelpentest/*',
                'tabeldatainstansi', 'tabeldatainstansi/*',
                'tabeldatapemohon', 'tabeldatapemohon/*',
                'tabeluser', 'tabeluser/*',
                'menureportpentest', 'menureportpentest/*',
                'menureportuser', 'menureportuser/*',
                'pdfupload', 'pdfupload/*'
                
                
                ]], 
                'userfilter' => ['except' => [
                
                'web', 'web/*',
                'menu', 'menu/*',

                'ajukanpentest', 'ajukanpentest/*',
                'tabelpentestuser', 'tabelpentestuser/*',
                'tabeldatainstansiuser', 'tabeldatainstansiuser/*',
                'tabeldatapemohonuser', 'tabeldatapemohonuser/*',
                'tabeluseruser', 'tabeluseruser/*',
                    
                ]], 
                    'guestfilter' => ['except' => [
                
                        'web', 'web/*',
                        'menu', 'menu/*',
                        'pemohonguest', 'pemohonguest/*',
                        'hasilguest', 'hasilguest/*',
                        'dataguest', 'dataguest/*',
                        
                        ]],        
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
