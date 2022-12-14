<!DOCTYPE HTML>
<html>

<head>
    <base href="<?= base_url('static/green/'); ?>/" />
    <title><?= $detail->title ?? '技术学习页（Learn）' ?></title>
    <meta name="keyword" content="<?= $detail->seo_keywords ?? 'RUST;PHP;XUbuntu' ?>">
    <meta name="description" content="<?= $detail->summary ?? 'elapse.date站点主要是RUST、PHP、LINUX(XUbuntu)技术分享记录' ?>">
    <meta name="author" content="<?= $detail->username ?? '临来笑笑生' ?>">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7474776931549266"
     crossorigin="anonymous"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>

<body>

    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1 id="logo"><a href="<?= site_url() ?>">Elapse.date 【消逝年華】</a></h1>
            <!-- <h1 id="logo"><a href="javascript:void(0)">流逝年华 【Elapse.date】</a></h1> -->
            <nav id="nav">
                <ul>
                    <li><a href="<?= site_url() ?>">Home</a></li>
                    <li>
                        <a href="javascript:;">服务器</a>
                        <ul>
                            <li><a href="javascript:;">Windows</a></li>
                            <li>
                                <a href="<?= site_url('article/index') ?>">Linux</a>
                                <ul>
                                    <li><a href="javascript:;">Debian</a></li>
                                    <li><a href="javascript:;">Ubuntu</a></li>
                                    <li><a href="javascript:;">CentOS</a></li>
                                    <li><a href="javascript:;">Warp</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('article/index') ?>" class="button">Rust</a></li>
                    <li><a href="javascript:;">PHP</a></li>
                    <li><a href="javascript:;">登錄</a></li>
                </ul>
            </nav>
        </header>