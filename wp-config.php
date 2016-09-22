<?php
    /**
     * Il file base di configurazione di WordPress.
     *
     * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
     * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
     * E' possibile trovare ultetriori informazioni visitando la pagina: del
     * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
     * Editing wp-config.php}. E' possibile ottenere le impostazioni per
     * MySQL dal proprio fornitore di hosting.
     *
     * Questo file viene utilizzato, durante l'installazione, dallo script
     * rimepire i valori corretti.
     *
     * @package WordPress
     */
    
    // ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
    // ** dal proprio fornitore di hosting ** //
    /** Il nome del database di WordPress */
    define('DB_NAME', 'isola');
    
    /** Nome utente del database MySQL */
    define('DB_USER', 'root');
    
    /** Password del database MySQL */
    define('DB_PASSWORD', '123456');
    
    /** Hostname MySQL  */
    define('DB_HOST', 'localhost');
    
    /** Charset del Database da utilizare nella creazione delle tabelle. */
    define('DB_CHARSET', 'utf8mb4');
    
    /** Il tipo di Collazione del Database. Da non modificare se non si ha
     idea di cosa sia. */
    define('DB_COLLATE', '');
    
    /**#@+
     * Chiavi Univoche di Autenticazione e di Salatura.
     *
     * Modificarle con frasi univoche differenti!
     * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
     *
     * @since 2.6.0
     */
    define('AUTH_KEY',         '>4%Auu+tDEn@$i+?zuw{-1GS(lJ],7{B`W^luvOzWdi=rlPoZ7|0fMR*UAi|n`_>');
    define('SECURE_AUTH_KEY',  'lBG/@kR}WyRp8#A>v>MJ8sCLN]?!,5+6o7-SuCxk5|&n|!-gYK<U;%:2|tHv-}Mm');
    define('LOGGED_IN_KEY',    '[|{HliE3=koD_j_cHsN4v4,;9S@>Cy.?`|>=#7 *8GXL!F-iwKK|p{^L-DQ63$2Q');
    define('NONCE_KEY',        'BE!jA&-M*aBq(i0v!q?ZcP^dKoYGX$`hB$R<@B3w+ ME)hs/B-2KM&&9#afY#z~o');
    define('AUTH_SALT',        'n[V8*.!fu5<[uJ1A<R6f^U,k26N$cN9`{29z=Na--D9C=iry-J-eU(+<q-z-h$Uu');
    define('SECURE_AUTH_SALT', 'NuX2bOL$G ,<Cw?r!MB7X*-#jV/j[):Icj`^cBFel3obaPea/xHKYgB+He)ae*%f');
    define('LOGGED_IN_SALT',   'H#KQ,KrDgcrG+B,[`yu;kq3qH!~a>-UR,`E]|!8k#bC3ml/~+T_nKbNHwbrp>9Qy');
    define('NONCE_SALT',       'S]Es*T|Fc0.MQc]X,|J]qFUtIZKM)mrYSF Gu#h}@HO?}oc#fN|i]x#qs>DFcHYt');
    
    /**#@-*/
    
    /**
     * Prefisso Tabella del Database WordPress .
     *
     * E' possibile avere installazioni multiple su di un unico database if you give each a unique
     * fornendo a ciascuna installazione un prefisso univoco.
     * Solo numeri, lettere e sottolineatura!
     */
    $table_prefix  = 'wpisl_';
    
    /**
     *
     * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
     * durante lo sviluppo.
     * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
     * WP_DEBUG all'interno dei loro ambienti di sviluppo.
     */
    define('WP_DEBUG', false);
    
    /* Finito, interrompere le modifiche! Buon blogging. */
    
    /** Path assoluto alla directory di WordPress. */
    if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
    
    /** Imposta lle variabili di WordPress ed include i file. */
    require_once(ABSPATH . 'wp-settings.php');
    
