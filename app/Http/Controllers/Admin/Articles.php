<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Articles extends Base
{
    /*
     * Example settings
     */
    protected $title = 'News';

    protected $description = 'News yo!';

    protected $columns = [
        'Title' => 'getAdminTitleHtmlAttribute',
        'Status' => 'getAdminFeaturedAttribute',
        'Date' => 'created_at',
    ];
    protected $search = [
        'title',
        'featured' => [
            'type' => 'select',
            'label' => 'featured status',
            'options' => [
                1 => 'featured',
                0 => 'not featured',
            ]
        ],
//        'category' => [
//            'type' => 'select',
//            'options' => 'Article::$categories',
//        ],
        'date' => 'date',
    ];
}
