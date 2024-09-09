<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 Lionwiki

[![集成程度](https://dash.yunohost.org/integration/lionwiki-t2t.svg)](https://ci-apps.yunohost.org/ci/apps/lionwiki-t2t/) ![工作状态](https://ci-apps.yunohost.org/ci/badges/lionwiki-t2t.status.svg) ![维护状态](https://ci-apps.yunohost.org/ci/badges/lionwiki-t2t.maintain.svg)

[![使用 YunoHost 安装 Lionwiki](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=lionwiki-t2t)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 Lionwiki。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

LionWiki-t2t is a minimalist Wiki engine programmed in PHP. It is extensible, templatable, file based (it doesn't need database like MySQL) and requires just one file to function (30 kb). It is suitable for small websites, personal notebooks or journals. This version is using the lightweight markup language TXT2TAGS.


**分发版本：** 2024.09.03~ynh1

## 截图

![Lionwiki 的截图](./doc/screenshots/screenshot_lionwikit2t.png)

## 文档与资源

- 官方应用网站： <https://lionwiki-t2t.sourceforge.io/>
- 官方用户文档： <https://github.com/farvardin/whatistxt2tags>
- 官方管理文档： <https://lionwiki-t2t.sourceforge.io/>
- 上游应用代码库： <https://sourceforge.net/projects/lionwiki-t2t>
- YunoHost 商店： <https://apps.yunohost.org/app/lionwiki-t2t>
- 报告 bug： <https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing --debug
或
sudo yunohost app upgrade lionwiki-t2t -u https://github.com/YunoHost-Apps/lionwiki-t2t_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
