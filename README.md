# An Amazing Essay Writing Website App 

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Essay Writing is an amazing website that is meant to help clients get professional academic help from us is easy by customizing their written paper done for you in simple steps and with high rated content written by professional writers!

## Table of Contents

* [Installation](#installation)
* [Usage](#Usage)
* [Features](#Features)
* [Creators](#creators)
* [License](#license)


## Installation

``` bash
# clone the repo
$ git clone https://github.com/TWILIGHT-CODERS/Essay-Writing-Website.git my-project

# go into app's directory
$ cd my-project

# install app's dependencies
$ composer install

# install app's dependencies
$ npm install

```

### If you choice to use SQLite

``` bash

# create database
$ touch database/database.sqlite
```
Copy file ".env.example", and change its name to ".env".
Then in file ".env" replace this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=laravel
* DB_USERNAME=root
* DB_PASSWORD=

To this:

* DB_CONNECTION=sqlite
* DB_DATABASE=/path_to_your_project/database/database.sqlite

### If you choice to use PostgreSQL

1. Install PostgreSQL

2. Create user
``` bash
$ sudo -u postgres createuser --interactive
enter name of role to add: laravel
shall the new role be a superuser (y/n) n
shall the new role be allowed to create database (y/n) n
shall the new role be allowed to create more new roles (y/n) n
```
3. Set user password
``` bash
$ sudo -u postgres psql
postgres= ALTER USER laravel WITH ENCRYPTED PASSWORD 'password';
postgres= \q
```
4. Create database
``` bash
$ sudo -u postgres createdb laravel
```
5. Copy file ".env.example", and change its name to ".env".
Then in file ".env" replace this database configuration:

* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=laravel
* DB_USERNAME=root
* DB_PASSWORD=

To this:

* DB_CONNECTION=pgsql
* DB_HOST=127.0.0.1
* DB_PORT=5432
* DB_DATABASE=laravel
* DB_USERNAME=laravel
* DB_PASSWORD=password

### If you choice to use MySQL

Copy file ".env.example", and change its name to ".env".
Then in file ".env" complete this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=laravel
* DB_USERNAME=root
* DB_PASSWORD=

### Set APP_URL

> If your project url looks like: example.com/sub-folder 
Then go to `my-project/.env`
And modify this line:

* APP_URL = 

To make it look like this:

* APP_URL = http://127.0.0.1:8000


### Next step

``` bash
# in your app directory
# generate laravel APP_KEY
$ php artisan key:generate

# run database migration and seed
$ php artisan migrate:refresh --seed

# generate mixing
$ npm run dev

# and repeat generate mixing
$ npm run dev
```

## Usage

``` bash
# start local server
$ php artisan serve

# test
$ php vendor/bin/phpunit
```

Open your browser with address: [localhost:8000](localhost:8000)  
Click "Notes" on topbar menu and log in with credentials:

* E-mail: _johnsonmatoke@gmail.com_
* Password: _password_

This user has roles: _user_ and _admin_
* Role _user_ is required for **make orders** management.
* Role _admin_ is required for **take/assign orders** management.

--- 

### How to add a link to the sidebar:

> Instructions for CoreUI Free Laravel admin template only. _Pro and Vue.js versions have separate instructions._

#### To add a __link__ to the sidebar - modify seeds file:  
`my-project/database/seeds/MenusTableSeeder.php`

In `run()` function - add `insertLink()`:
```php
$id = $this->insertLink( $rolesString, $visibleName, $href, $iconString);
```
* `$rolesString` - a string with list of user roles this menu element will be available, ex. `"guest,user,admin"`
* `$visibleName` - a string caption visible in sidebar
* `$href` - a href, ex. `/homepage` or `http://example.com`
* `$iconString` - a string containing valid CoreUI Icon name (kebab-case), ex. `cui-speedometer` or `cui-star`

To add a __title__ to the sidebar - use function `insertTitle()`:
```php
$id = $this->insertTitle( $rolesString, $title );
```
* `$rolesString` - a string with list of user roles this menu element will be available, ex. `"guest,user,admin"`
* `$title` - a string caption visible in sidebar

To add a __dropdown__ menu to the sidebar - use function `beginDropdown()`:
```php
$id = $this->beginDropdown( $rolesString, $visibleName, $iconString);
```
* `$rolesString` - a string with list of user roles this menu element will be available, ex. `"guest,user,admin"`
* `$visibleName` - a string caption visible in sidebar
* `$iconString` - a string containing valid CoreUI icon name (kebab-case). For example: `cui-speedometer` or `cui-star`

To end dropdown section - use function `endDropdown()`. 

To add __link__ to __dropdown__ call function `insertLink()` between function calls `beginDropdown()` and `endDropdown()`. 
Example:
```php
$id = $this->beginDropdown('guest,user,admin', 'Some dropdown', 'cui-puzzle');
$id = $this->insertLink('guest,user,admin', 'Dropdown name', 'http://example.com');
$this->endDropdown();
```

__IMPORTANT__ - At the end of `run()` function, call `joinAllByTransaction()` function:
```php
$this->joinAllByTransaction();
```

Once done with seeds file edit, __run__:
``` bash 
$ php artisan migrate:refresh --seed
# This command also rollbacks database and migrates it again.
```

## Features

### Table of contents:
* [Notes](#notes)
* [Users](#users)
* [Management of menus](#menu-management)
* [Manage menu items](#Manage-menu-items)
* [Role management](#Role-management)
* [Management of the media](#Manage-media)
* [BREAD](#BREAD-system)
* [Email Templates](#E-mail-Templates)

#### Notes
It is an example of data presentation in a pagination table, and CRUD functionality.

#### Users
It is a simple example of how to manage registered users.

#### Menu management 
It is a system that allows you to create a new menu and edit existing menus. To place a new menu named "new" in any view use this code:
```php
        <?php
            use the App\MenuBuilder\FreelyPositionedMenus;
            if(isset($appMenus['new'])){
                FreelyPositionedMenus::render( $appMenus['new'] , '', 'your-css-class-of-ul-element');
            }
        ?>  
```
#### Manage menu items
Allows you to add, edit and delete menu items.
To add a new menu item to the menu you must:
* specify to which menu you are adding the item,
* specify the roles of users for whom the item will be visible
* name the item
* type ( to choice: link, title and dropdown)
* Href, the address to which the item is to refer,
* Parent (To nest the item inside dropdown)
* CORUI icons

#### Role management
Allows you to create, edit, delete and reorder user roles.
When a user has more than one role, the highest hierarchical role is used to create a menu for him.

#### Manage media
It allows to:
* Create virtual media folders.
* Send media to applications.
* Move media between folders,
* Cut images,

#### BREAD system
BREAD stands for: browse, read, edit, add, delete.
Our BREAD system allows you to easily and quickly generate for any table, from the database, a simple BREAD.
To create a new BREAD just enter a table name from the database.  Then enter a name for the form. Enter the number of rows in the browse table. Choose if you want the browse table to contain buttons: "show", "edit", "add", "delete".
Assign roles for users who will be able to use the ready BREAD.
Then complete each column of the table separately:
* the column name visible to the user,
* the input type for the column,
The last step is to select the appropriate checkboxes:
* browse (allows to display the column in the data table),
* read (allows you to display the column in the show view,)
* edit (enables column editing)
* add (allows you to complete the column data when adding a record. Required if the column is not nullable).
It is also possible to handle relationships with another table.
If the column is a foreign key, it should be specified: in the field "Optional relation table name" - table name to which the foreign key refers, in the "Optional column name in relation table - to print" field - the name of the column that is in the relation table to be displayed. Finally, select one of the two "field types" that relate to the relation: 'relation select' or 'relation radio'.

#### E-mail Templates
It is an example of managing e-mail templates. Allows you to create, edit and delete templates. It also allows you to send an E-mail to a selected address.


## Creators

**Johnson Matoke**

* <https://twitter.com/johnsonnyabayo>
* <https://github.com/johniez254>

**Laban Menza**

* <https://github.com/LABAN-CODER>


## Copyright and license

copyright 2020 TWILIGHT CODERS Johnson Matoke/Laban Menza. Code released under [the MIT license](https://opensource.org/licenses/MIT).
There is only one limitation you can't can’t re-distribute the Essay Writing as stock.

As of now I am exploring the possibility of working on CoreUI fulltime - if you are a business that is building core products using CoreUI, I am also open to conversations regarding custom sponsorship / consulting arrangements. Get in touch on [Twitter](https://twitter.com/johnsonnyabayo).
