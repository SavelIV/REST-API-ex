<?php

namespace api\controllers;

use api\resources\Product;

/**
 * Class ProductController
 *
 * @package api\controllers
 */
class ProductController extends ActiveController
{
    /* @var string */
    public $modelClass = Product::class;
}