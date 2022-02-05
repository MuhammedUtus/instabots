<?php
    return array(

        //Project Variables
        "project"  => array(
            "cookiePath"        => "./app/Cookies/",
            "licenseKey"        => "LICENSE_KEY",
            "cronJobToken"      => "CRON_JOB-TOKEN",
            "onlyHttps"         => FALSE,
            "adminPrefix"       => "/admin",
            "resellerPrefix"    => "/bayi",
            "memberLoginPrefix" => "/member"
        ),

        //App Variables
        "app"      => array(
            "theme"                 => "default",
            "layout"                => "layout/default",
            "language"              => "en",
            "base_url"              => NULL,
            "handle_errors"         => TRUE,
            "log_errors"            => FALSE,
            "router_case_sensitive" => TRUE
        ),


        //Database Variables
        "database" => array(
            "DefaultConnection" => array(
                //mysql, sqlsrv, pgsql are tested connections and work perfect.
                "driver"   => "mysql",
                "host"     => "sql112.byethost8.com",
                "port"     => "3306",
                "name"     => "b8_28035527_admin",
                "user"     => "b8_28035527",
                "password" => "Video123"
            )
        )
    );