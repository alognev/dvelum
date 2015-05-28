<?php
$docRoot = DVELUM_ROOT;

$len = strlen($docRoot);

// should be without last slash
if ($docRoot[$len - 1] == '/')
    $docRoot = substr($docRoot, 0, -1);

$wwwRoot = '/';
$wwwPath = $docRoot.'/www'.$wwwRoot;

$language = 'en';
return array(
    'docroot' => $docRoot,
    /*
     * Development mode
     * 0 - production
     * 1 - development
     * 2 - test (development mode + test DB)
     */
    'development' => 1,
    /*
     * Development version (used by use_orm_build_log)
     */
    'development_version' => '0.1',
    /*
     * Write SQL commands when updating Database structure.
     * It can help to determine if there have been performed any rename operations.
     * Please note that renaming operations in ORM interface causes loss of data
     * during server synchronization, so it's better to use SQL log.
     */
    'use_orm_build_log' => true,
    /*
     * ORM SQL logs path
     */
    'orm_log_path' => $docRoot . '/log/orm/',
    /*
     * Background tasks log path
     */
    'task_log_path' => $docRoot . '/log/task/',
    /*
     * ORM system object used as links storage
     */
    'orm_links_object' => 'Links',
    /*
     * ORM system object used as history storage
     */
    'orm_history_object' => 'Historylog',
    /*
     * File uploads path
     */
    'uploads' => $wwwPath . '/media/',
    /*
     * Admin panel URL
     * For safety reasons adminPath may be changed, however,
     * keep in mind that IDE builds full paths in the current version,
     * thus, they would have to be manually updated in the projects.
     */
    'adminPath' => 'adminarea',
    /*
     * Templates directory
     */
    'templates' => $docRoot . '/templates/',
    /*
     * Url paths delimiter  "_" , "-" or "/"
     */
    'urlDelimiter' => '/',
    'urlExtension' => '.html',
    /*
     * System language
     * Please note. Changing the language will switch ORM storage settings.
     */
    'language' => $language,
    'system' => $docRoot . '/system/',
    /**
     * Localization files path
     */
    'js_lang_path' => $wwwPath . 'js/lang/',
    'salt' => 'ThSc-9086',
    'timezone' => 'Europe/Moscow',

    'jsPath' => $wwwPath . 'js/',
    'jsCacheUrl' => 'js/cache/',
    'jsCachePath' => $wwwPath . 'js/cache/',

    'jsCacheSysUrl' => 'js/syscache/',
    'jsCacheSysPath' => $wwwPath . 'js/syscache/',
    /*
     * Сlear the object version history when deleting an object.
     * The recommended setting is “false”.  Thus, even though the object has been deleted,
     * it can be restored from the previous control system revision.
     * If set to "true", the object and its history will be  totally removed. However,
     * this allows you to get rid of redundant records in the database.
     */
    'vc_clear_on_delete' => false,
    /*
     * Main directory for config files
     */
    'configs' => '', // configs path $docRoot . '/config/',
    /*
    * ORM configs directory
    */
    'object_configs' => 'objects/',
    /*
     * Report configs directory
     */
    'report_configs' => 'reports/',
    /*
     * Modules directory
     */
    'modules' => 'modules/',
    /*
     * Backend modules config file
     */
    'backend_modules' => 'modules_backend.php',
    /*
     * Backend controllers path
     */
    'backend_controllers' => $docRoot . '/system/app/Backend/',
    /*
     * Frontend controllers path
     */
    'frontend_controllers' => $docRoot . '/system/app/Frontend/',
    /*
     * Frontend modules config file
     */
    'frontend_modules' => 'modules_frontend.php',
    /*
     * Application path
     */
    'application_path' => $docRoot . '/system/app/',
    /*
     * Blocks path
     */
    'blocks' => $docRoot . '/system/app/Block/',
    /*
     * Dictionary configs directory depending on localization
     */
    'dictionary' => 'dictionary/' . $language . '/',
    /*
     * Dictionary directory
     */
    'dictionary_folder' => 'dictionary/',

    'tmp' => $docRoot . '/tmp/',
    'mysqlExecPath' => 'mysql',
    'mysqlDumpExecPath' => 'mysqldump',
    /*
     * the type of frontend router with two possible values:
     * 'module' — using tree-like page structure  (‘Pages’ section of the administrative panel);
     * 'path' — the router based on the file structure of client controllers.
     */
    'frontend_router_type' => 'module', // 'module','path','config'
    /*
    * Use memcached
    */
    'use_cache' => false,
    /*
     * Hard caching time (without validation) for frondend , seconds
     */
    'frontend_hardcache' => 30,
    'themes' => $docRoot . '/templates/public/',
    'packages' => './system/packages/',
    // Autoloader config
    'autoloader' => array(
        // Paths for autoloading
        'paths' => array(
            './application',
            './system/app',
            './system/library',
            './vendor'
        ),
        /*
        * Use class map
        */
        'useMap' => true,
        /*
          *	Use precompiled code packages
          *	requires useMap property to be set to true
          */
        'usePackages' => false,
        // Use class map (Reduce IO load during autoload)
        // Class map file path (string / false)
        'map' => 'class_map.php',
        // Class map file path (with packages)
        'mapPackaged' => 'class_map_packaged.php',
        // Packages config path
        'packagesConfig' => 'packages.php'
    ),
    /*
     * Stop the site with message "Essential maintenance in progress. Please check back later."
     */
    'maintenance' => false,
    /*
     * Debug panel configuration (Development mode)
     */
    'debug_panel' => array(
        'enabled' => true,
        'options' =>array(
            // cache requests
            'cache' => true,
            // sql queries list
            'sql' => false,
            // list of autoloaded classes
            'autoloader' => false,
            // list of included configs
            'configs' =>false,
            // list of included files
            'includes' => false,
        )
    ),
    /*
     * HTML WYSIWYG Editor
     * default  - ckeditor
     */
    'html_editor' => 'ckeditor',
    /*
     * Use the console command to compile the file system map
     * (accelerates the compilation process; works only on Linux systems;
     * execution of the system function should be allowed).
     */
    'deploy_use_console' => false,
    /*
     *  Use hard cache expiration time defined in frontend_hardcache for caching blocks;
     *  allows to reduce the cache time of dynamic blocks;
     *  is used if there are not enough triggers for cache invalidation
     */
    'blockmanager_use_hardcache_time' => false,
    /*
     * Use foreign keys
     */
    'foreign_keys' => false,
    /*
     * www root
     */
    'wwwroot' => $wwwRoot,
    'wwwpath' => $wwwPath,
    /*
     * Log Db_Object errors
     */
    'db_object_error_log' => true,
    'db_object_error_log_path' => $docRoot . '/log/error/db_object.error.log',
    /*
     * Get real rows count for innodb tables (COUNT(*))
     * Set it "false" for large data volumes
     */
    'orm_innodb_real_rows_count' => false,
    /*
     * Directories for storing data base connection settings as per the system mode
     */
    'db_configs' => array(
        /* key as development mode code */
        0 => array(
            'title' => 'PRODUCTION',
            'dir' => 'db/prod/'
        ),
        1 => array(
            'title' => 'DEVELOPMENT',
            'dir' => 'db/dev/'
        ),
        2 => array(
            'title' => 'TEST',
            'dir' =>  'db/test/'
        )
    ),
    /*
     * Check modification time for template file. Invalidate cache
     */
    'template_check_mtime' => true,
    /*
     * ORM system object used as version storage
     */
    'orm_version_object' => 'Vc',
    /*
     * Db_Object for error log 
     */
    'erorr_log_object' => 'error_log'
);
