<?php

    $db_host = 'localhost';
    $db_user = 'user';
    $db_password = 'password';
    $db_name = 'dbname';

    $phpcas_path = '/path/to/phpCAS/';

    $user_roles = array('ROLE_ADMIN', 'ROLE_MANAGER', 'ROLE_USER');

    $default_admin_username = "adminuid"; //set the first ldap uid used to login on this web site.

    ///////////////////////////////////////
    // Basic Config of the phpCAS client //
    ///////////////////////////////////////

    // Full Hostname of your CAS Server
    $cas_host = 'cas.univ.fr';

    // Context of the CAS Server
    $cas_context = '/';

    // Port of your CAS server. Normally for a https server it's 443
    $cas_port = 443;

    // Set an UTF-8 encoding header for internation characters (User attributes)
    header('Content-Type: text/html; charset=utf-8');

/***  script JS de protection de kibana *** à insérer dans "kibana/src/public/index.html"
    <script>
    var regex = new RegExp("\/\#\/(visualize|dashboard)\/(.*)\?embed\&(.*)");
    var port = location.port ? location.port: 80;
    if(port==80 && !regex.test(location.href)) {
        //alert("vous n'avez pas accès à cette ressource "+location.href);

        if(self==top) {
            window.location = "/index.html";
        } else {
            //alert('home.html is in iframe');
            //check regex with parent iframe src
            window.location = "/index.html";
        }
        //window.location = "/index.html";
    }
    </script>
***/

?>
