# Lionwiki-t2t for YunoHost

[![Integration level](https://dash.yunohost.org/integration/lionwiki-t2t.svg)](https://dash.yunohost.org/appci/app/lionwiki-t2t) ![](https://ci-apps.yunohost.org/ci/badges/lionwiki-t2t.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/lionwiki-t2t.maintain.svg)  
[![Install Lionwiki-t2t with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=lionwiki-t2t)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allow you to install Lionwiki-t2t quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview

LionWiki-t2t is a minimalist Wiki engine programmed in PHP. It is extensible, templatable, file based (it doesn't need database like MySQL) and requires just one file to function (30 kb). It is suitable for small websites, personal notebooks or journals. This version is using the lightweight markup language TXT2TAGS.

**Shipped version:** 3.2.11b

## Screenshot

![](screenshot_lionwikit2t.png)

## Configuration

In the root folder of this app, there are two files: `config.php` and `config.t2t`

- `config.php` is for changing password, the template used, default page. You can also define an administrator password which has some more rights (it's possible to lock some pages and modify them only with the administrator password, add some IP address to a blacklist)

- `config.t2t` is for tweaking your wiki syntax. You can define more tags (using the txt2tags rules) for specific behaviors.

The `pheditor.php` tool at the root of the site allows you to edit all the necessary configuration files. You can remove or rename it from its interface. The password is the same as the one defined during installation.

## Documentation

 * Official documentation: https://lionwiki-t2t.sourceforge.io/
 * More about txt2tags: https://github.com/farvardin/whatistxt2tags
 
## YunoHost specific features

#### Multi-users support

This is only a single password for editing the wiki (it's not multi-user), and one other password for administration. Both are set to the same one defined in the lionwiki-t2t during the installation by YunoHost.

You can set the wiki to private (only readable when you are connected to YunoHost SSO) or public (readable by the whole internet).

You can install multiple instance of this app.

#### Supported architectures

* x86-64b - [![Build Status](https://ci-apps.yunohost.org/ci/logs/lionwikit2t%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/lionwikit2t/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/lionwikit2t%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/lionwikit2t/)

## Limitations

* No different user accounts. 

## Additional information

You must define a base color during the installation (in hexadecimal format). You can choose it using this online tool for example: https://www.w3schools.com/colors/colors_picker.asp

It will modify the `templates/minimaxing/minimaxing.less` file and compile it using the lessc command (from the node-less package).

After the installation, you can edit the base color found in `/var/www/lionwikit2t/templates/minimaxing/minimaxing.less` file.

Search for:

```
/* For YunoHost config */
@MainColor: #D17732;
```

Go inside your installation folder (adapt it to your case, if it's the second instance you've installed, it will be named /var/www/lionwikit2t__2/):

```
cd /var/www/lionwikit2t
```

Then compile it with:

```
lessc templates/minimaxing/minimaxing.less > templates/minimaxing/minimaxing.css
```

If something goes wrong, you can go back to the original default file:

```
cp templates/minimaxing/minimaxing_org.css templates/minimaxing/minimaxing.css
```

## Links

 * Report a bug: https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/issues
 * App website: https://lionwiki-t2t.sourceforge.io/
 * YunoHost website: https://yunohost.org/

---

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing --debug
or
sudo yunohost app upgrade lionwiki-t2t -u https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing --debug
```
