# PHPStorm meta

## Setup
- Clone this repo and open it in PhpStorm.
- Rename `.phpstorm.meta.php*` files. There are old file version. And new folder version. Also these files are in project root directory and in subdirectory called `sub` — to check that one file extends another.
- Run PhpStorm action: `Invalidate Caches / Restart`, then click `Invalidate and Restart`.

## My observations about `.phpstorm.meta.php`
- Autocompletion is broken when root format is not the same with subfolder format (for example, file `/.phpstorm.meta.php` and folder `/sub/.phpstorm.meta.php/` with `locators.php` and vice versa).
- When format is the same then configurations extend each other. So definitions from root `/.phpstorm.meta.php` will sum up with `/sub/.phpstorm.meta.php`.
