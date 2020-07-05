<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class MenusTableSeeder extends Seeder
{
    private $menuId = null;
    private $dropdownId = array();
    private $dropdown = false;
    private $sequence = 1;
    private $joinData = array();
    private $adminRole = null;
    private $userRole = null;
    private $subFolder = '';

    public function join($roles, $menusId){
        $roles = explode(',', $roles);
        foreach($roles as $role){
            array_push($this->joinData, array('role_name' => $role, 'menus_id' => $menusId));
        }
    }

    /*
        Function assigns menu elements to roles
        Must by use on end of this seeder
    */
    public function joinAllByTransaction(){
        DB::beginTransaction();
        foreach($this->joinData as $data){
            DB::table('menu_role')->insert([
                'role_name' => $data['role_name'],
                'menus_id' => $data['menus_id'],
            ]);
        }
        DB::commit();
    }

    public function insertLink($roles, $name, $href, $icon = null){
        $href = $this->subFolder . $href;
        if($this->dropdown === false){
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_id' => $this->menuId,
                'sequence' => $this->sequence
            ]);
        }else{
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_id' => $this->menuId,
                'parent_id' => $this->dropdownId[count($this->dropdownId) - 1],
                'sequence' => $this->sequence
            ]);
        }
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        $permission = Permission::where('name', '=', $name)->get();
        if(empty($permission)){
            $permission = Permission::create(['name' => 'visit ' . $name]);
        }
        $roles = explode(',', $roles);
        if(in_array('user', $roles)){
            $this->userRole->givePermissionTo($permission);
        }
        if(in_array('admin', $roles)){
            $this->adminRole->givePermissionTo($permission);
        }
        return $lastId;
    }

    public function insertTitle($roles, $name){
        DB::table('menus')->insert([
            'slug' => 'title',
            'name' => $name,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence
        ]);
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function beginDropdown($roles, $name, $icon = ''){
        if(count($this->dropdownId)){
            $parentId = $this->dropdownId[count($this->dropdownId) - 1];
        }else{
            $parentId = null;
        }
        DB::table('menus')->insert([
            'slug' => 'dropdown',
            'name' => $name,
            'icon' => $icon,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence,
            'parent_id' => $parentId
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        array_push($this->dropdownId, $lastId);
        $this->dropdown = true;
        $this->sequence++;
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function endDropdown(){
        $this->dropdown = false;
        array_pop( $this->dropdownId );
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Get roles */
        $this->adminRole = Role::where('name' , '=' , 'admin' )->first();
        $this->userRole = Role::where('name', '=', 'user' )->first();
        /* Create Sidebar menu */
        DB::table('menulist')->insert([
            'name' => 'sidebar menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId
        $this->insertLink('guest,user,admin', 'Dashboard', '/dashboard', 'cil-speedometer');

        //only admin
        $this->insertTitle('admin', 'Orders');
        $this->insertLink('admin', 'Completed', '/completed', 'cil-check');
        $this->insertLink('admin', 'In Progress', '/progress', 'cil-pen-alt');
        $this->insertLink('admin', 'Overdue', '/overdue', 'cil-bell');
        $this->insertLink('admin', 'Charged Back', '/charged-back', 'cil-x-circle');
        $this->insertLink('admin', 'Disputes', '/disputes', 'cil-bell');
        $this->insertLink('admin', 'Cancelled', '/cancelled', 'cil-x-circle');

        //only user
        $this->insertLink('user', 'New Order', '/new-order', 'cil-plus');
        $this->insertLink('user', 'Orders', '/orders', 'cil-list-rich');
        $this->insertLink('user', 'Messages', '/messages', 'cil-envelope-closed');
        $this->insertLink('user', 'Settings', '/settings', 'cil-cog');
        $this->insertLink('user', 'Invite Friends', '/invite-friends', 'cil-people');
        $this->insertLink('user', 'My Wallet', '/my-wallet', 'cil-x-circle');

        $this->insertLink('guest', 'Login', '/login', 'cil-account-logout');
        $this->insertLink('guest', 'Register', '/register', 'cil-account-logout');
        
        $this->insertTitle('admin', 'Extras');
        $this->beginDropdown('admin', 'Pages', 'cil-star');
            $this->insertLink('admin', 'Blog',          '/blog_admin');
            // $this->insertLink('admin', 'Login',         '/login');
            // $this->insertLink('admin', 'Register',      '/register');
        $this->endDropdown();
        // $this->insertLink('guest,user,admin', 'Download CoreUI', 'https://coreui.io', 'cil-cloud-download');
        // $this->insertLink('guest,user,admin', 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cil-layers');


        /* Create top menu */
        DB::table('menulist')->insert([
            'name' => 'top menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId
        $this->beginDropdown('guest,user,admin', 'Quick Links');
            $id = $this->insertLink('user', 'New Order',    '/new-order');
            $id = $this->insertLink('user', 'Orders',    '/orders');
            $id = $this->insertLink('user', 'Messages',    '/messages');
            $id = $this->insertLink('user', 'Invite Friends',    '/invite-friends');
            $id = $this->insertLink('admin', 'Notes',              '/notes');
            $id = $this->insertLink('admin', 'Users',                   '/users');
            $id = $this->insertLink('admin', 'Blog',                   '/blog_admin');
        $this->endDropdown();

        // admin setting top links
        $id = $this->beginDropdown('admin', 'Settings');
            $id = $this->insertLink('admin', 'Notes',                   '/notes');
            $id = $this->insertLink('admin', 'Users',                   '/users');
            $id = $this->insertLink('admin', 'Edit menu',               '/menu/menu');
            $id = $this->insertLink('admin', 'Edit menu elements',      '/menu/element');
            $id = $this->insertLink('admin', 'Edit roles',              '/roles');
            $id = $this->insertLink('admin', 'Media',                   '/media');
            $id = $this->insertLink('admin', 'BREAD',                   '/bread');
            $id = $this->insertLink('admin', 'Email',                   '/mail');
        $this->endDropdown();
        //admin base top links
        $id = $this->beginDropdown('admin', 'Base');
            $id = $this->insertLink('admin', 'Breadcrumb',    '/base/breadcrumb');
            $id = $this->insertLink('admin', 'Cards',         '/base/cards');
            $id = $this->insertLink('admin', 'Carousel',      '/base/carousel');
            $id = $this->insertLink('admin', 'Collapse',      '/base/collapse');
            $id = $this->insertLink('admin', 'Forms',         '/base/forms');
            $id = $this->insertLink('admin', 'Jumbotron',     '/base/jumbotron');
            $id = $this->insertLink('admin', 'List group',    '/base/list-group');
            $id = $this->insertLink('admin', 'Navs',          '/base/navs');
            $id = $this->insertLink('admin', 'Pagination',    '/base/pagination');
            $id = $this->insertLink('admin', 'Popovers',      '/base/popovers');
            $id = $this->insertLink('admin', 'Progress',      '/base/progress');
            $id = $this->insertLink('admin', 'Scrollspy',     '/base/scrollspy');
            $id = $this->insertLink('admin', 'Switches',      '/base/switches');
            $id = $this->insertLink('admin', 'Tables',        '/base/tables');
            $id = $this->insertLink('admin', 'Tabs',          '/base/tabs');
            $id = $this->insertLink('admin', 'Tooltips',      '/base/tooltips');
        $this->endDropdown();

        //buttons links
        $id = $this->beginDropdown('admin', 'Buttons');
            $id = $this->insertLink('admin', 'Buttons',           '/buttons/buttons');
            $id = $this->insertLink('admin', 'Buttons Group',     '/buttons/button-group');
            $id = $this->insertLink('admin', 'Dropdowns',         '/buttons/dropdowns');
            $id = $this->insertLink('admin', 'Brand Buttons',     '/buttons/brand-buttons');
        $this->endDropdown();

        //icons links
        $id = $this->beginDropdown('admin', 'Icons');
            $id = $this->insertLink('admin', 'CoreUI Icons',      '/icon/coreui-icons');
            $id = $this->insertLink('admin', 'Flags',             '/icon/flags');
            $id = $this->insertLink('admin', 'Brands',            '/icon/brands');
        $this->endDropdown();

        //Notifications links
        $id = $this->beginDropdown('admin', 'Notifications');
            $id = $this->insertLink('admin', 'Alerts',     '/notifications/alerts');
            $id = $this->insertLink('admin', 'Badge',      '/notifications/badge');
            $id = $this->insertLink('admin', 'Modals',     '/notifications/modals');
        $this->endDropdown();

        //Themes links
        $id = $this->beginDropdown('admin', 'Theme');
            $id = $this->insertLink('admin', 'Colors', '/colors');
            $id = $this->insertLink('admin', 'Typography', '/typography');
            $id = $this->insertLink('admin', 'Widgets', '/widgets');
            $id = $this->insertLink('admin', 'Error 404',     '/404');
            $id = $this->insertLink('admin', 'Error 500',     '/500');
        $this->endDropdown();

        $this->joinAllByTransaction(); ///   <===== Must by use on end of this seeder
    }
}
