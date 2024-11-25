<!--
Важно: этот README был автоматически сгенерирован <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Он НЕ ДОЛЖЕН редактироваться вручную.
-->

# Lionwiki для YunoHost

[![Уровень интеграции](https://dash.yunohost.org/integration/lionwiki-t2t.svg)](https://ci-apps.yunohost.org/ci/apps/lionwiki-t2t/) ![Состояние работы](https://ci-apps.yunohost.org/ci/badges/lionwiki-t2t.status.svg) ![Состояние сопровождения](https://ci-apps.yunohost.org/ci/badges/lionwiki-t2t.maintain.svg)


[![Установите Lionwiki с YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=lionwiki-t2t)

*[Прочтите этот README на других языках.](./ALL_README.md)*

> *Этот пакет позволяет Вам установить Lionwiki быстро и просто на YunoHost-сервер.*  
> *Если у Вас нет YunoHost, пожалуйста, посмотрите [инструкцию](https://yunohost.org/install), чтобы узнать, как установить его.*

## Обзор

LionWiki-t2t is a minimalist Wiki engine programmed in PHP. It is extensible, templatable, file based (it doesn't need database like MySQL) and requires just one file to function (30 kb). It is suitable for small websites, personal notebooks or journals. This version is using the lightweight markup language TXT2TAGS.


**Поставляемая версия:** 2024.09.27~ynh1

## Снимки экрана

![Снимок экрана Lionwiki](./doc/screenshots/screenshot_lionwikit2t.png)

## Документация и ресурсы

- Официальный веб-сайт приложения: <https://lionwiki-t2t.sourceforge.io/>
- Официальная документация пользователя: <https://github.com/farvardin/whatistxt2tags>
- Официальная документация администратора: <https://lionwiki-t2t.sourceforge.io/>
- Репозиторий кода главной ветки приложения: <https://sourceforge.net/projects/lionwiki-t2t>
- Магазин YunoHost: <https://apps.yunohost.org/app/lionwiki-t2t>
- Сообщите об ошибке: <https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/issues>

## Информация для разработчиков

Пришлите Ваш запрос на слияние в [ветку `testing`](https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing).

Чтобы попробовать ветку `testing`, пожалуйста, сделайте что-то вроде этого:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing --debug
или
sudo yunohost app upgrade lionwiki-t2t -u https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing --debug
```

**Больше информации о пакетировании приложений:** <https://yunohost.org/packaging_apps>
