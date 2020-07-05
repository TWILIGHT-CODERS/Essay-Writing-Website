const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.js('resources/js/app.js', 'public/js')
//mix.sass('resources/sass/app.scss', 'public/css');

//**************** CSS ******************** 
//css
//mix.copy('resources/vendors/pace-progress/css/pace.min.css', 'public/css');
mix.copy('node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css', 'public/css');
mix.copy('node_modules/cropperjs/dist/cropper.css', 'public/css');
//main css
mix.sass('resources/sass/style.scss', 'public/css');

//web css
mix.copy('resources/sass/web/bootstrap.css', 'public/css/web');
mix.copy('resources/sass/web/font-awesome.min.css', 'public/css/web');
mix.copy('resources/sass/web/materialize.css', 'public/css/web');
mix.copy('resources/sass/web/style.css', 'public/css/web');
mix.copy('resources/sass/web/style-mob.css', 'public/css/web');

//************** SCRIPTS ****************** 
// general scripts
mix.copy('node_modules/@coreui/utils/dist/coreui-utils.js', 'public/js');
mix.copy('node_modules/axios/dist/axios.min.js', 'public/js'); 
//mix.copy('node_modules/pace-progress/pace.min.js', 'public/js');  
mix.copy('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/js'); 
// views scripts
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js'); 
mix.copy('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.bundle.js', 'public/js');

mix.copy('node_modules/cropperjs/dist/cropper.js', 'public/js');

// web scripts
mix.copy('resources/js/web/bootstrap.min.js', 'public/js/web');
mix.copy('resources/js/web/custom.js', 'public/js/web');
mix.copy('resources/js/web/main.min.js', 'public/js/web');
mix.copy('resources/js/web/materialize.min.js', 'public/js/web');


// details scripts
mix.copy('resources/js/coreui/main.js', 'public/js');
mix.copy('resources/js/coreui/colors.js', 'public/js');
mix.copy('resources/js/coreui/charts.js', 'public/js');
mix.copy('resources/js/coreui/widgets.js', 'public/js');
mix.copy('resources/js/coreui/popovers.js', 'public/js');
mix.copy('resources/js/coreui/tooltips.js', 'public/js');
// details scripts admin-panel
mix.js('resources/js/coreui/menu-create.js', 'public/js');
mix.js('resources/js/coreui/menu-edit.js', 'public/js');
mix.js('resources/js/coreui/media.js', 'public/js');
mix.js('resources/js/coreui/media-cropp.js', 'public/js');
//*************** OTHER ****************** 
//fonts
mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
//icons
mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/css/brand.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/css/flag.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/svg/flag', 'public/svg/flag');

mix.copy('node_modules/@coreui/icons/sprites/', 'public/icons/sprites');
//images
mix.copy('resources/assets', 'public/assets');
mix.copy('resources/assets/img/avatars/DefaultProfileImage.jpeg', 'storage/app/public/profile');
mix.copy('resources/assets/img/blog', 'storage/app/public/blog');
