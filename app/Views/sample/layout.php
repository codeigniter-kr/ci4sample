<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?= $title ?> - Codeignit4 Sample</title>
    <!-- CSS files -->
    <link href="/assets/tabler/css/tabler.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/demo.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2RSRH300EL"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-2RSRH300EL');
    </script>
  </head>
  <body class="antialiased">
    <div class="wrapper">
        <header class="navbar navbar-expand-md navbar-light d-print-none" style="display:block;">
          <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
              <a href="/">
                <img src="/assets/static/ci-logo-big.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                Codeigniter4 sample
              </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
              <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                  <script async src="https://cse.google.com/cse.js?cx=bc31bcc32f9b16530"></script>
                  <div class="gcse-search"></div>
                </div>
              </div>
              <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                  <a href="https://github.com/hoksi/ci4sample" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                    Source code
                  </a>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <span class="avatar avatar-sm" style="background-image: url(/assets/static/hoksi.jpg)"></span>
                  <div class="d-none d-xl-block ps-2">
                    <div>hoksi</div>
                    <div class="mt-1 small text-muted">Framework Designer</div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="display:none">
                  <a href="#" class="dropdown-item">Set status</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Settings</a>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="navbar-expand-md">
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
              <div class="container-xl">
                <ul class="navbar-nav">
                  <li class="nav-item <?= ($location == 'home' ? 'active' : '') ?>">
                    <a class="nav-link" href="/" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Home
                      </span>
                    </a>
                  </li>
                  <!-- Tutorial -->
                  <?= view('sample/topmenu/tutorial') ?>
                  <!-- 컨트롤러와 라우팅 -->
                  <?= view('sample/topmenu/controller') ?>
                  <!-- 응답(Response) 만들기 -->
                  <?= view('sample/topmenu/response') ?>
                  <!-- 데이터베이스 -->
                  <?= view('sample/topmenu/database') ?>
                  <!-- 모델 -->
                  <?= view('sample/topmenu/model') ?>
                  <!-- 라이브러리 -->
                  <?= view('sample/topmenu/library') ?>
                  <!-- 헬퍼 -->
                  <?= view('sample/topmenu/helper') ?>
                  <!-- 메뉴얼 -->
                  <li class="nav-item">
                      <a class="nav-link" href="http://ci4doc.cikorea.net" target="_blank">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                      </span>
                      <span class="nav-link-title">
                        메뉴얼
                      </span>
                    </a>
                  </li>
                  <!-- 헬퍼 -->
                  <?= view('sample/topmenu/ci4lab') ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <?= $this->renderSection('content') ?>
      
        <footer class="footer footer-transparent d-print-none">
          <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2021
                    <a href="https://github.com/tabler/tabler" class="link-secondary" target="_blank">Tabler</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    v1.0.0-beta3
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/assets/tabler/js/tabler.min.js"></script>
  </body>
</html>