# Bilibili Embed for Flarum

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Flarum](https://img.shields.io/badge/flarum-extension-orange.svg)

这是一个为 Flarum 论坛设计的轻量级哔哩哔哩（Bilibili）视频嵌入插件。它通过扩展 `s9e/TextFormatter`，让用户只需粘贴 B 站链接即可自动生成播放器。

## ✨ 功能特性

* **多格式支持**：支持识别 B 站标准视频链接及 `b23.tv` 短链接。
* **双 ID 兼容**：完美解析经典的 `av` 号和主流的 `BV` 号。
* **响应式布局**：默认以 600x400 分辨率渲染，并支持全屏切换。

## 🔧 安装

在你的 Flarum 根目录执行以下命令：

```bash
composer require wdnb/flarum-bbembed
```

## 📖 使用说明
插件安装并开启后，无需任何特殊标签或语法。你只需要在发帖时，将 B 站的视频链接单独放置在一行（或直接粘贴在文本中），插件就会自动将其转换为视频播放窗口。

支持的链接示例：

链接类型	链接示例 (直接粘贴即可)

标准 BV 号	https://www.bilibili.com/video/BV1GJ411x7h7

传统 av 号	https://www.bilibili.com/video/av100051812

手机短链接	https://b23.tv/BV1GJ411x7h7