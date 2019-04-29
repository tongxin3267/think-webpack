# think-webpack
在 ThinkPHP6中使用 webpack

使用了 `symfony` 的 encore, 更多使用请参考

https://symfony.com/doc/current/frontend/encore/installation.html

https://symfony.com/doc/current/frontend.html

## 环境需求

- php >= 7.1
- thinkphp >= 6

## 安装

执行命令`composer require kuange/think-webpack`

依赖于 `@symfony/webpack-encore`, 安装 `yarn add @symfony/webpack-encore --dev`

复制文件到项目根目录 `cp -r vendor/kuange/think-webpack/copy_files/* ./`

复制之后, 将会在根目录下生成以下文件:

```
|____webpack.config.js
|____assets
| |____css
| | |____app.css
| |____js
| | |____app.js
```

## 使用

### yarn encore

```bash
# 开发环境
yarn encore dev
# 实时编译, 刷新浏览器即可查看最新变更
yarn encore dev --watch
# 生产环境
yarn encore production
```

以上命令将会在 `pubic` 下生成 `build` 目录, 目录中是编译好的文件

```
|____build
| |____entrypoints.json
| |____runtime.js
| |____app.css
| |____manifest.json
| |____app.js
```

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>think-webpack</title>
    {:encore_link_tags('app')}
</head>
<body>
    <h1>think-webpack</h1>
    {:encore_script_tags('app')}
</body>
</html>
```