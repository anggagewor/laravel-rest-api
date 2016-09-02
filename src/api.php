<?php

return [

    /**
     * Default number of records to return when no limit is specified
     */
    "defaultLimit" => 10,

    /**
     * Maximum number of records to return in single request. This limit is used
     * when user enters large number in limit parameter of the request
     */
    "maxLimit" => 1000,

    /*
     * Add allow cross origin headers. It is recommended by APIs to allow cross origin
     * requests. But, you can disable it.
     */
    "cors" => true
];