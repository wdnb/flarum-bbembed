# Bilibili Embed for Flarum

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Flarum](https://img.shields.io/badge/flarum-extension-orange.svg)

这是一个为 Flarum 论坛设计的轻量级哔哩哔哩（Bilibili）视频嵌入插件。它通过扩展 `s9e/TextFormatter`，让用户只需粘贴 B 站链接即可自动生成播放器。

## ✨ 功能特性

* **多格式支持**：支持识别 B 站标准视频链接及 `b23.tv` 短链接。
* **双 ID 兼容**：完美解析经典的 `av` 号和主流的 `BV` 号。
* **分 P 识别**：支持链接中的 `?p=n` 参数，自动定位到对应的视频分页。
* **高清体验**：播放器默认请求高清流并开启宽屏模式。
* **响应式布局**：默认以 600x400 分辨率渲染，并支持全屏切换。

## 🔧 安装

在你的 Flarum 根目录执行以下命令：

```bash
composer require wdnb/flarum-bbembed
