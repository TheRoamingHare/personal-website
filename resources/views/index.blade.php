<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cameron Adams - Software Engineer</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <section id="top">
        <div class="wrapper-bg-img">
            <div class="wrapper-nav">
                <nav class="main-nav">
                    <div class="nav-column-1">
                        <a href="#profile">Profile</a>
                    </div>
                    <div class="nav-column-2">
                        <a href="#">Work</a>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <section id="profile">
        <div class="wrapper-main">
            <h2 class="header-title">Profile</h2>
            <div class="wrapper-profile">
                <p class="profile-col-1">Lorem ipsum dolor sit amet.</p>
                <img id="profile-pic" src="{{ asset('img/profile-pic-1.jpg') }}">
                <p class="profile-col-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, sed.</p>
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="wrapper-main">
            <h2 class="header-title">Experience</h2>

            <div class="wrapper-experience">
                <div class="job-header">
                    <h1 class="company-name">XeroCreative LLC</h1>
                    <p>February 2017 - July 2017</p>
                </div>
                <div class="job-desc">
                    <b class="job-title">Software Engineer</b>

                    <li>Built a web application on the company’s e-commerce SaaS platform to enable item cross-posting on eBay, and Amazon. Using PHP, HTML, CSS, and JavaScript.</li>
                    <li>300% increase in item posting speed by helping develop an internal REST API with Laravel to cross-post items to eBay</li>
                    <li>Centralized all shipping and handling logistics under one application by synchronizing orders made on eBay with the e-commerce platform's order system</li>
                    <li>Re-engineered a client’s outdated DNS system into a custom BIND DNS application deployed on AWS, resulting in reduced operating costs and increased uptime</li>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="wrapper-projects">
            <h1 class="header-title">Projects</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laboriosam laudantium porro qui quis repellat sit totam? Alias autem fuga fugiat nobis officia, perspiciatis quae sapiente tempora unde voluptate. Asperiores at cumque dolorum earum ex exercitationem illo itaque, nam obcaecati quas quidem repellat sapiente. Aut eligendi expedita labore minus optio?</p>
        </div>
    </section>

    <sections id="footer">
        <div class="wrapper-footer">
            <h1 class="header-title">Contact</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, eum.</p>
        </div>
    </sections>
    </body>
</html>