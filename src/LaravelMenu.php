<?php

namespace Meetjet\LaravelMenu;

use Illuminate\Support\Collection;

class LaravelMenu
{
    /**
     * The menus collection.
     *
     * @var Collection
     */
    protected Collection $menus;

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->menus = collect();
    }

    /**
     * Magic method to manipulate menus Collection with ease.
     *
     * @param string $method_name
     * @param array $args
     * @return false|mixed|void
     */
    public function __call(string $method_name, array $args)
    {
        if (! method_exists($this, $method_name)) {
            return call_user_func_array([$this->menus, $method_name], $args);
        }
    }

    /**
     * Get all menus as array.
     */
    public function all(): array
    {
        return $this->menus->toArray();
    }

    /**
     * Register a menu or get the existing one.
     *
     * @param string $name
     * @return Menu
     */
    public function register(string $name): Menu
    {
        if (! $menu = $this->get($name)) {
            $menu = new Menu($name);
            $this->menus->put($name, $menu);
        }

        return $menu;
    }
}
