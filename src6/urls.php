<?php
return array(
    // ************************************************************* Shop Agency
    array(
        'regex' => '#^/agency/find$#',
        'model' => 'Pluf_Views',
        'method' => 'findObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Mall_Agency',
            'sql' => 'deleted=false',
            'listFilters' => array(
                'id',
                'title',
                'province',
                'city',
                'address',
                'phone'
            ),
            'listDisplay' => array(
                'title' => 'title',
                'province' => 'province',
                'city' => 'city',
                'address' => 'address',
                'phone' => 'phone',
                'description' => 'description'
            ),
            'searchFields' => array(
                'title',
                'province',
                'city',
                'address',
                'phone',
                'description'
            ),
            'sortFields' => array(
                'id',
                'title',
                'province',
                'city',
                'phone',
                'point',
                'creation_date',
                'modif_dtime'
            )
        )
    ),
//     array(
//         'regex' => '#^/agency/new$#',
//         'model' => 'Pluf_Views',
//         'method' => 'createObject',
//         'http-method' => 'POST',
//         'precond' => array(
//             'User_Precondition::ownerRequired'
//         ),
//         'params' => array(
//             'model' => 'Shop_Agency'
//         )
//     ),
    array(
        'regex' => '#^/agency/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'getObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Mall_Agency'
        )
    ),
//     array(
//         'regex' => '#^/agency/(?P<modelId>\d+)$#',
//         'model' => 'Pluf_Views',
//         'method' => 'deleteObject',
//         'http-method' => 'DELETE',
//         'precond' => array(
//             'User_Precondition::ownerRequired'
//         ),
//         'params' => array(
//             'model' => 'Shop_Agency',
//             'permanently' => false
//         )
//     ),
//     array(
//         'regex' => '#^/agency/(?P<modelId>\d+)$#',
//         'model' => 'Pluf_Views',
//         'method' => 'updateObject',
//         'http-method' => 'POST',
//         'precond' => array(
//             'User_Precondition::ownerRequired'
//         ),
//         'params' => array(
//             'model' => 'Shop_Agency'
//         )
//     ),
    // ************************************************************* Product
    array( // Find
        'regex' => '#^/product/find$#',
        'model' => 'Pluf_Views',
        'method' => 'findObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Mall_Product',
            'listFilters' => array(
                'id',
                'title',
                'price',
                'off',
                'manufacturer',
                'brand',
                'model'
            ),
            'searchFields' => array(
                'title',
                'description',
                'manufacturer',
                'brand',
                'model'
            ),
            'sortFields' => array(
                'id',
                'title',
                'price',
                'off',
                'manufacturer',
                'brand',
                'model'
            )
        )
    ),
//     array( // Create
//         'regex' => '#^/product/new$#',
//         'model' => 'Pluf_Views',
//         'method' => 'createObject',
//         'http-method' => 'POST',
//         'params' => array(
//             'model' => 'Shop_Product'
//         ),
//         'precond' => array(
//             'User_Precondition::loginRequired',
//             'User_Precondition::memberRequired'
//         )
//     ),
    array( // Get info
        'regex' => '#^/product/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'getObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Mall_Product'
        )
    ),
//     array( // Delete
//         'regex' => '#^/product/(?P<modelId>\d+)$#',
//         'model' => 'Pluf_Views',
//         'method' => 'deleteObject',
//         'http-method' => 'DELETE',
//         'params' => array(
//             'model' => 'Shop_Product',
//             'permanently' => true
//         ),
//         'precond' => array(
//             'User_Precondition::loginRequired',
//             'User_Precondition::memberRequired'
//         )
//     ),
//     array( // Update
//         'regex' => '#^/product/(?P<modelId>\d+)$#',
//         'model' => 'Pluf_Views',
//         'method' => 'updateObject',
//         'http-method' => 'POST',
//         'params' => array(
//             'model' => 'Shop_Product'
//         ),
//         'precond' => array(
//             'User_Precondition::loginRequired',
//             'User_Precondition::memberRequired'
//         )
//     ),
    // ************************************************************* Service
    array( // Find
        'regex' => '#^/service/find$#',
        'model' => 'Pluf_Views',
        'method' => 'findObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Mall_Service',
            'listFilters' => array(
                'id',
                'title',
                'price',
                'off'
            ),
            'searchFields' => array(
                'title',
                'description'
            ),
            'sortFields' => array(
                'id',
                'title',
                'price',
                'off'
            )
        )
    ),
//     array( // Create
//         'regex' => '#^/service/new$#',
//         'model' => 'Pluf_Views',
//         'method' => 'createObject',
//         'http-method' => 'POST',
//         'params' => array(
//             'model' => 'Shop_Service'
//         ),
//         'precond' => array(
//             'User_Precondition::loginRequired',
//             'User_Precondition::memberRequired'
//         )
//     ),
    array( // Get info
        'regex' => '#^/service/(?P<modelId>\d+)$#',
        'model' => 'Pluf_Views',
        'method' => 'getObject',
        'http-method' => 'GET',
        'params' => array(
            'model' => 'Mall_Service'
        )
    ),
//     array( // Delete
//         'regex' => '#^/service/(?P<modelId>\d+)$#',
//         'model' => 'Pluf_Views',
//         'method' => 'deleteObject',
//         'http-method' => 'DELETE',
//         'params' => array(
//             'model' => 'Shop_Service',
//             'permanently' => true
//         ),
//         'precond' => array(
//             'User_Precondition::loginRequired',
//             'User_Precondition::memberRequired'
//         )
//     ),
//     array( // Update
//         'regex' => '#^/service/(?P<modelId>\d+)$#',
//         'model' => 'Pluf_Views',
//         'method' => 'updateObject',
//         'http-method' => 'POST',
//         'params' => array(
//             'model' => 'Shop_Service'
//         ),
//         'precond' => array(
//             'User_Precondition::loginRequired',
//             'User_Precondition::memberRequired'
//         )
//     ),
);