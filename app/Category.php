<?php

namespace App;

use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;
//use NeoEloquent;
use Vinelab\NeoEloquent\Eloquent\SoftDeletes;

class Category extends NeoEloquent
{
    use SoftDeletes;
    protected $label = 'Category';

}
