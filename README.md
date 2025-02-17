## 适用于WP博客的追番页面

💖项目源地址-[https://github.com/TaylorLottner/bilibili](https://github.com/TaylorLottner/bilibili ) （已授权，感谢小姐姐的支持(￣▽￣)）


***仅适用于 Wordpress 博客系统***

<img src="https://github.com/icecliffs/bilibili_anime/blob/master/Images/one1.png" alt="one" style="zoom:33%;" />

> （效果图 : Kratos-pjax 带有页面编辑功能）

#### 特点

- 显示番剧
- 显示番剧进度（可选）
- 显示番剧基本信息

#### 使用方法

改了俩个不同的版本，Kratos-pjax主题版本可以编辑页面，大家可以提出 issue 我会根据主题写对应的版本，当然你也可以自写(￣▽￣)

> **默认：**

放置 wp-content/theme/你的主题/你的主题页面模板下

打开 page-bilibili.php 修改以下几个参数

```php
$bili=new bilibiliApiRequest("你的UID","你的bilibili Cookie");
```

![two](https://github.com/icecliffs/bilibili_anime/blob/master/Images/two.png)

**UID获取方法**

打开 [https://space.bilibili.com](https://space.bilibili.com)，后面跟着的就是你的 UID

![three](https://github.com/icecliffs/bilibili_anime/blob/master/Images/three.png)

**COOKIE获取方法**

*F12* **或** *右键审查元素*  点开 **dynamic** 往下拉找到请求，从 **_uuid** 开始复制到完，黏贴到上上图的 **SPACE COOKIE** 即可

<img src="https://github.com/icecliffs/bilibili_anime/blob/master/Images/four.png" alt="four" style="zoom:80%;" />

**（Cookie诚可贵，请保管好自己的 bilibili Cookie 防止被他人恶意调用）**

**回源问题**

设置完之后还有一个步骤，BILIBILI 番剧返回的链接是 https，而封面返回的是 http 这会导致我们的站点小绿锁消失，而且B站还有防盗链这么一个蛋疼的选项

解决方法，在page-bilibili.php get_header();> 后面加入：
```html
<meta name="referrer" content="never">
```
然后打开 bili_app.php 查找修改：
```php
array_push($this->image_url, str_replace('http://','//', $data['cover'])); //http
```

图片显示不了的话在Header.php文件夹下加入：
```html
<meta name="referrer" content="same-origin">
```
然后刷新页面即可(￣▽￣)

> **Kratos-pjax版**

kratos-Version: 放置 wp-content/theme/kratos-pjax/pages/ 按照上图方法做一遍即可(￣▽￣)
如果开启了AJAX需要把样式加入到Head头里边，否则加载不出来

#### 效果演示

> Kratos-pjax版

![eight](https://github.com/icecliffs/bilibili_anime/blob/master/Images/eight.png)


#### 数据来源

bilibili 对应的 API 接口，自己看代码去(*￣3￣)╭

#### 修改日志

2020 年 3 月 21 - 上传(￣▽￣)

#### 积极反馈

欢迎各位小伙伴们提出 issue 能解决的尽力解决，解决不了的自行解决(￣▽￣)
