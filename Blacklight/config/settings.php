<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Copy this file to settings.php and edit the options. //////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// Scroll down to the bottom for a change log. //////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**********************************************************************************************************************/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////// MISC //////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * When we update settings.example.php, we will raise this version, you will get a message saying your settings.php
 * is out of date, you will need to update it and change the version number.
 *
 * @note    Developers: When updating settings.example.php, up this version
 *                   and $current_settings_file_version in nntmux\config\Configure.php
 * @version 7
 */
define('NN_SETTINGS_FILE_VERSION', 8);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////// Web Settings //////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * How many releases to show per page in list view.
 *
 * @default '50'
 */
define('ITEMS_PER_PAGE', '50');

/*
 * How many releases to show per page in cover view.
 *
 * @default '20'
 */
define('ITEMS_PER_COVER_PAGE', '20');

/*
 * How many releases maximum to display in total on browse/search/etc.
 * If you have ITEMS_PER_PAGE set to 50, and NN_MAX_PAGER_RESULTS set to 125000, you would get a maximum of
 * 2,500 pages of results in searches/browse.
 *
 * @note    This setting can speed up browsing releases tremendously if you have millions of releases and you keep it
 * a relatively low value.
 *
 * @default '125000'
 */
define('NN_MAX_PAGER_RESULTS', '125000');

/*
 * Whether to check if a person is trying to send too many requests in a given amount of time,
 * lock out the person of the site for a amount of time.
 *
 * @default false
 */
define('NN_FLOOD_CHECK', false);

/*
 * How many seconds should the person be locked out of the site.
 *
 * @default 5
 */
define('NN_FLOOD_WAIT_TIME', 5);

/*
 * How many requests in a second can a person send to the site max before being locked out for
 * NN_FLOOD_WAIT_TIME seconds.
 *
 * @default 5
 */
define('NN_FLOOD_MAX_REQUESTS_PER_SECOND', 5);

/*
 * The type of search system to use on the site.
 *
 * 0 = The default system, which uses fulltext indexing (very fast but search results can be unexpected).
 * 1 = The old search system from newznab classic (much slower but produces better search results).
 * 2 = Search using sphinx real time index, see misc/sphinxsearch/README.md for installation details.
 *
 * @default 0
 */
define('NN_RELEASE_SEARCH_TYPE', 2);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////// Sphinx Settings ////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
 * This is the hostname to use when connecting to the SphinxQL server,
 *
 * @note    Using localhost / 127.0.0.1 has caused me issues and only 0 worked on my local server.
 * @note    See misc/sphinxsearch/README.md for installation details.
 * @default '0'
 */
define('NN_SPHINXQL_HOST_NAME', '0');

/*
 * This is the port to the SphinxQL server.
 *
 * @default 9306
 */
define('NN_SPHINXQL_PORT', 9306);

/*
 * This is the (optional) location to the SphinxQL server socket file, if you set the "listen" setting to a sock file.
 *
 * @default ''
 */
define('NN_SPHINXQL_SOCK_FILE', '');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////// CLI Settings //////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * Display text to console(terminal) output.
 *
 * @default true
 */
define('NN_ECHOCLI', true);

/*
 * Rename releases using PAR2 files (if they match on PRE titles)?
 *
 * @default true
 */
define('NN_RENAME_PAR2', true);

/*
 * Rename music releases using media info from the MP3/FLAC/etc tags (names are created using info found in the tags)?
 *
 * @default true
 */
define('NN_RENAME_MUSIC_MEDIAINFO', true);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////// Cache Settings /////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * Type of cache server(s) to use:
 * 0 - disabled   ; No cache server(s) will be used.
 * 1 - memcached  ; Memcached server(s) will be used for caching.
 * 2 - redis      ; Redis server(s) will be used for caching.
 * 3 - apc/apcu   ; APC or APCu will be used for caching.
 *
 * @see        https://github.com/NN/NN_Misc/blob/master/Guides/Various/Cache/Guide.md
 * @note       Memcahed: The Memcached PHP extension must be installed.
 * @note       Redis:    We use the Redis PHP extension by nicolasff. https://github.com/nicolasff/phpredis
 * @note       APC:      The APC or APCu PHP extension must be installed.
 * @note       APC:      Ignore these settings: NN_CACHE_HOSTS / NN_CACHE_SOCKET_FILE / NN_CACHE_TIMEOUT
 * @default    0
 * @version    3
 */
define('NN_CACHE_TYPE', 0);

/*
 * List of redis or memcached servers to connect to. Separate them by comma.
 * Host:   (string)  Address for the cache server. '127.0.0.1' for a local server.
 * Port:   (integer) Default for memcached is 11211, Default for redis is 6379
 * Weight: (integer) On redis, this is unused, set it to 0.
 *                   On memcached if you have 1 memcached server, you set this to 100.
 *                   If you have more than 1 memcached server, see the memcached documentation for more info:
 *                   http://php.net/manual/en/memcached.addserver.php
 */
define('NN_CACHE_HOSTS', serialize(
    [
        'Server1' => [
            'host'   => '127.0.0.1',
            'port'   => 11211,
            'weight' => 0,
        ],
    ]
));

/*
 * Optional path to unix socket file, leave '' if to not use.
 * If using a unix socket file, the server list is overridden.
 * This should be faster than using the host/port if your cache server is local.
 *
 * @example '/var/run/redis/redis.sock'
 * @note    By default, redis and memcached do not have a socket file, you must configure them.
 * @note    Read and write access is required to the socket file.
 * @default ''
 */
define('NN_CACHE_SOCKET_FILE', '');

/*
 * Timeout for connecting to cache server(s).
 *
 * @default 10
 */
define('NN_CACHE_TIMEOUT', 10);

/*
 * Memcached allows to compress the data, saving RAM at the expense of CPU time.
 *
 * @note    Does nothing on redis.
 * @default false
 */
define('NN_CACHE_COMPRESSION', false);

/*
 * Serialization is a way of converting data in PHP into strings of text which can be stored on the cache server.
 *
 * 0 - Use the PHP serializer. Recommended for most people.
 * 1 - [Requires igbinary] Use igbinary serializer which is faster and uses less memory, works
 *                         on Memcached / Redis / APC, read the notes below.
 * 2 - [Redis Only] Use no serializer.
 *
 * @note       igbinary must be compiled and enabled in php.ini
 * @note       APC/APCu: This setting is ignored, set this in php.ini with apc.serializer
 * @note       Memcached/Redis must be compiled with igbinary support as well to use igbinary.
 * @note       Read the igbinary page how to compile / enable.
 * @see        https://github.com/phadej/igbinary
 * @default    0
 * @version    3
 */
define('NN_CACHE_SERIALIZER', 0);

/*
 * Amount of time in seconds to expire data from the cache server.
 * The developers of NN decide what should be set as short/medium/long, depending on the type of data.
 *
 * @defaults 300/600/900
 */
define('NN_CACHE_EXPIRY_SHORT', 300);
define('NN_CACHE_EXPIRY_MEDIUM', 600);
define('NN_CACHE_EXPIRY_LONG', 900);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////// SQL Settings //////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * Strip white space (space, carriage return, new line, tab, etc) from queries before sending to MySQL.
 * This is useful if you use the MySQL slow query log.
 *
 * @note    This slows down query processing, leave it false unless you turn on the MySQL slow query log.
 * @default false
 */
define('NN_QUERY_STRIP_WHITESPACE', false);

/*
 * Use transactions when doing certain SQL jobs.
 * This has advantages and disadvantages.
 * If there's a problem during a transaction, MySQL can revert the row inserts which is beneficial.
 * Transactions can cause deadlocks however if you are trying to insert into the same table from another process.
 *
 * @note    If all your tables are MyISAM you can set this to false, as MyISAM does not support transactions.
 * @default true
 */
define('NN_USE_SQL_TRANSACTIONS', true);

/*
 * Allows the use of LOW_PRIORITY in certain DELETE queries.
 * This prevents table locks by deleting only when no SELECT queries are active on the table.
 * This works on MyISAM/ARIA, not INNODB.
 *
 * @note    Does not cause any errors or warnings if enabled on INNODB.
 * @link    https://dev.mysql.com/doc/refman/5.7/en/delete.html
 * @default false
 * @version 1
 */
define('NN_SQL_DELETE_LOW_PRIORITY', false);

/*
 * Allows the use QUICK in certain DELETE queries.
 * This makes DELETE queries faster on MyISAM/ARIA tables by not merging index leaves.
 * Only supported on MyISAM/ARIA
 *
 * @note    Does not cause any errors or warnings if enabled on INNODB.
 * @link    https://dev.mysql.com/doc/refman/5.7/en/delete.html
 * @default false
 * @version 1
 */
define('NN_SQL_DELETE_QUICK', false);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////// PHP Xdebug Settings //////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (extension_loaded('xdebug')) {

    /*
     * Display colors on xdebug CLI output?
     * 0 - off, 1 - on only if on a TTY with ansi support, 2 - on regardless of TTY or ansi support.
     * @default 0
     * @version 4
     */
    ini_set('xdebug.cli_color', '0');

    /*
     * Replace PHP's var_dump with xdebug's own?
     * @default '1'
     * @version 4
     */
    ini_set('xdebug.overload_var_dump', '1');

    /*
     * How many items in a array or object to display on var_dump.
     * @note    Set to '-1' for no limit.
     * @default '128'
     * @version 4
     */
    ini_set('xdebug.var_display_max_children', '128');

    /*
     * Maximum string length on var_dump. (anything over is truncated)
     * @note    Set to '-1' for no limit.
     * @default '512'
     * @version 4
     */
    ini_set('xdebug.var_display_max_data', '512');

    /*
     * How many nested arrays / objects deep to display on var_dump.
     * @note    Set to '-1' for no limit.
     * @note    Maximum value is '1023'
     * @default '3'
     * @version 4
     */
    ini_set('xdebug.var_display_max_depth', '3');
}

/***********************************************************************************************************************
 * ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * //////////////////////////////////////////////// Change log ////////////////////////////////////////////////////////////
 * ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 *
 * 2017-12-21       v7  Remove custom logging settings, Laravel is handling errors now
 * 2017-10-11       v6  Remove settings for PHP web/CLI SAPI's as these are now handled by Laravel
 * 2015-08-26       v4  Add settings for PHP web/CLI SAPI's.
 *                        Add settings for Xdebug.
 *                        All new settings start from the "PHP CLI Settings" up to the "Change log", lines ~544 to ~768
 *
 * 2015-06-11       v3  Add support for APC or APCu extensions for caching data. Search for @version 3 for the changes.
 *
 * 2015-05-10       v2  Update path to find_password_hash_cost.php in comments. Search for @version 2 for the changes.
 *
 * 2015-05-03       v1  Track settings.php.example changes.
 *                        Add support for quick and low_priority on MySQL DELETE queries.
 *                        Search for @version 1 in this file to quickly find these additions.
 *
 * //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/