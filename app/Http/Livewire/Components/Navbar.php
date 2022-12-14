<?php

namespace App\Http\Livewire\Components;

// use App\Models\{
//     Event,
//     Share
// };
use Livewire\Component;

class Navbar extends Component
{

    protected $listeners = ['$refresh'];

    public function render()
    {

        // $this->payments = Event::sum('received_price');
        // $this->total = Share::where('state', true)->sum('share') * 2000;
        // $this->current_price = $this->total - $this->payments;

        $menu = new Menu([
            [
                'id' => 1,
                'name' => 'الرئيسية',
                'route' => 'home',
                'icon' => 'home',
                

            ],
            [   'id' => 1,
                'name' => 'السيارات',
                'route' => 'car',
                'icon' => 'hand-holding-heart',
                
            ],
            [   'id' => 2,
                'name' => 'تأجير السيارات',
                'route' => 'rental',
                'icon' => 'circle-info',
                'permissions' => 2,
            ],
            [
                'id' => 3,
                'name' => 'المعرض',
                'route' => 'about',
                'icon' => 'circle-info',
                

            ],
            [
                'id' => 3,
                'name' => 'تواصل معنا ',
                'route' => 'contact',
                'icon' => 'circle-info',
            ],
            [   'id' => 3,
                'name' => 'الاداريين',
                'route' => 'admins',
                'icon' => 'circle-info',
                'permissions' => 4,
            ],


        ]);

        $leftMenu = new Menu([
            [
                'name' => 'انضمام',
                'route' => 'register',
                'permissions' => 1,
            ],
            [
                'name' => ' تسجيل الدخول',
                'route' => 'login',
                'permissions' => 1,
            ],


        ]);

        return view('livewire.components.navbar', [
            'menu' => $menu,
            'leftMenu' => $leftMenu,
        ]);
    }
}


class Menu
{
    public $items;

    function __construct($items = [])
    {
        // Menu Generation
        foreach ($items as $item) $this->items[] = new MenuItem($item);

        $this->filter();
    }

    function filter()
    {
        $this->items = collect($this->items)->filter(function ($item) {

            return $item->show;
        })->all();
    }
}

class MenuItem
{
    public $id;
    public $name;
    public $submenu;
    public $route;
    public $icon;
    public $active;

    public $permissions;
    public $show = true;
    // 0 => General
    // 1 => Only guests
    // 2 => users (users & admins)
    // 3 => only users
    // 4 => only admins

    public function __construct($data)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'];
        $this->route = $data['route'];
        $this->permissions = $data['permissions'] ?? 0;


        $this->active = request()->routeIs($this->route);

        if ($this->permissions == 1) {
            // Only guests
            if (auth()->check()) {
                $this->show = false;
            }
        } elseif ($this->permissions == 2) {
            // users (users & admins)
            if (!auth()->check()) {
                $this->show = false;
            }
        } elseif ($this->permissions == 3) {
            // only users
            if (!auth()->check() || auth()->user()->is_admin == true) {
                $this->show = false;
            }
        } elseif ($this->permissions == 4) {
            // only admins
            if (!auth()->check() || auth()->user()->is_admin == false || auth()->user()->id != 1) {
                $this->show = false;
            }
        }
    }
}