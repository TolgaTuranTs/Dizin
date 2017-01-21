<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// Site Anasayfası - librais My Routerdan gelen
$route['default_controller'] = 'Site';
$route['404_override'] = '';
// Admin Sayfası
$route['Cms'] = 'Cms/Panel';
// Admin Oturum Sonlandırma
$route['Cms/cikis'] = 'Cms/Login/cikis';
// Admin Şifre Değiştirme Sayfası
$route['Cms/sifre'] = 'Cms/Profil/sifre';
// Kategoriye Ait Dizin İçerik Sayfası
$route['dizin/(:any)'] = 'Dizin/index/$1';
// Site Ekleme Sayfası
$route['site-ekle'] = 'Ekle';
// Sayfa İçeriği
$route['sayfa/(:any)'] = 'sayfa/index/$1';
// Arama Sayfası
$route['ara'] = 'Ara/index';
// İletişim Sayfası
$route['iletisim'] = 'Contact';
$route['translate_uri_dashes'] = FALSE;
