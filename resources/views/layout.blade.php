<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts Montserrat 400, Open Sans 400, Poppins 100-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:wght@400&family=Poppins:wght@100&display=swap"
          rel="stylesheet">
    <!-- -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
<header class="flex-header">
    <div class="flex-header-left-side">
        <label for="toggle-side" id="menu-icon"><img src="/img/menu-icon.png" width="30px" height="25px"></label>
        <h1>@yield('title')</h1>
    </div>
    <nav class="flex-nav">
        <ul>
            <li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{ Request::path() === 'profile' ? 'active' : ''}}"><a href="/profile">Profiel</a></li>
            <li class="{{ Request::path() === 'dashboard' ? 'active' : ''}}"><a href="/dashboard">Dashboard</a></li>
            <li class="{{ Request::path() === 'faq' ? 'active' : ''}}"><a href="/faq">FAQ</a></li>
            <li class="{{ Request::path() === 'articles' ? 'active' : ''}}"><a href="/articles">Articles</a></li>
        </ul>
    </nav>
</header>
<input type="checkbox" id="toggle-side" checked/>
<aside class="side-toggle">
    <li>
        <a
                href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
                target="_blank">HZ OER</a>
    </li>
    <li>
        <a
                href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten
        /OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf"
                target="_blank">IR HBO-ICT</a>
    </li>
    <li>
        <a
                href="https://glaze-donut-5a5.notion.site/Assignment-Specification-661c5ac5d7494328a58be61d00dd41e4"
                target="_blank">Learn</a>
    </li>
    <li>
        <a
                href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype
        /conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                target="_blank">Teams (NL)</a>
    </li>
    <li>
        <a href="https://hz.osiris-student.nl/#/voortgang/"
           target="_blank">Studie Voortgang</a>
    </li>
    <li>
        <a href="https://github.com/HZ-HBO-ICT "
           target="_blank">Github HBO-ICT</a>
    </li>
</aside>
    @yield ('content')
<footer>
    <div class="footer-text">
        <p>Door: Ricardo Leite Lopes</p>
        <p>September 2022</p>
    </div>
    <img src="/img/hz-logo.png" alt="HZ logo">
</footer>
</body>
</html>