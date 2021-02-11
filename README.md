<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Crash Course 2020 - ("posty" course files)

* <a href="https://www.youtube.com/watch?v=MFh0Fd7BsjE&ab_channel=TraversyMedia">YouTube video</a>

### Notes for use on a shared host provider:

* alias composer command to get rid of ```proc_open error```  
  * put following in .bashrc ```alias composerr='php -d "disable_functions=" /opt/cpanel/composer/bin/composer' ```  
  * [see here for ref](https://github.com/composer/composer/issues/9253)
* [how to install node and npm on shared hosting](https://medium.com/@SimonEast/how-to-install-node-js-on-cpanel-shared-hosting-66b4ac3183cf)  
* After pushing files to new server (via git or other means)  
  * run ```composerr install```  
  * run ```npm install```  
* setup domain or sub domain via cpanel as usual
* if possible point domain (or sub) to the /public folder of laravel install  
  * or setup sym link e.g. ```ln -s ~/www/laravelsource/public/ ~/www/subdomain``` 


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
