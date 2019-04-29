# think-webpack
在 ThinkPHP6中使用 webpack

## 环境需求

- php >= 7.1
- thinkphp >= 6

## 安装

```
composer require kuange/think-webpack
```
依赖于 `@symfony/webpack-encore`, 将会自动安装, 并在项目根目录生成以下文件

```
|____
|____webpack.config.js
|____assets
| |____css
| | |____app.css
| |____js
| | |____app.js
```

## 使用

```
# 载入 css 文件
{:encore_link_tags('app')}

# 载入 js 文件
{:encore_script_tags('app')}
```

## 参考链接

https://symfony.com/doc/current/frontend/encore/installation.html
https://symfony.com/doc/current/frontend.html