<?php

namespace Dadopl\Wpth\Provider;

use Dadopl\Wpth\Model\PostType;
use Dadopl\Wpth\Model\Sidebar;

/**
 * Class ConfigThemeProvider
 * @package Dadopl\Wpth\Provider
 * @author Daniel Gołąbek <golabek.daniel@gmail.com>
 */
class ConfigThemeProvider
{
    /**
     * @var Sidebar|[]
     */
    protected $sidebars;

    /**
     * @var PostType|[]
     */
    protected $postTypes;

    /**
     * ConfigThemeProvider constructor.
     */
    public function __construct()
    {

    }

    /**
     *
     */
    public function themeInitialize()
    {

    }
}