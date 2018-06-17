<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cameron Adams - Software Engineer</title>

        <!-- Styles -->
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    </head>
    <body class="site">
        <header id="top">
            <h1 id="bg-img"></h1>
        </header>

        <main id="content">
            <section id="profile">
                <div class="profile-wrapper">
                    <h2 class="header-title-color">Profile</h2>
                    <hr class="ruler-color">
                    <p class="profile-col-1">Lorem ipsum dolor sit amet.</p>
                    <img id="profile-pic" src="{{ asset('img/profile-pic-1.jpg') }}">
                    <p class="profile-col-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, sed.</p>
                </div>
            </section>

            <section id="career">
                <div class="career-wrapper">
                    <h2 class="header-title">Careers</h2>
                    <hr class="ruler">
                    <div id="career-1">
                        <h3 class="company-name">XeroCreative LLC</h3>
                        <p>February 2017 - July 2017</p>

                        <b class="job-title">Software Engineer</b>
                        <ul>
                            <li>Built a web application on the company’s e-commerce SaaS platform to enable item cross-posting on eBay, and Amazon. Using PHP, HTML, CSS, and JavaScript.</li>
                            <li>300% increase in item posting speed by helping develop an internal REST API with Laravel to cross-post items to eBay</li>
                            <li>Centralized all shipping and handling logistics under one application by synchronizing orders made on eBay with the e-commerce platform's order system</li>
                            <li>Re-engineered a client’s outdated DNS system into a custom BIND DNS application deployed on AWS, resulting in reduced operating costs and increased uptime</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="projects">
                <div class="project-wrapper">
                    <h2 class="header-title-color">Projects</h2>
                    <hr class="ruler-color">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laboriosam laudantium porro qui quis repellat sit totam? Alias autem fuga fugiat nobis officia, perspiciatis quae sapiente tempora unde voluptate. Asperiores at cumque dolorum earum ex exercitationem illo itaque, nam obcaecati quas quidem repellat sapiente. Aut eligendi expedita labore minus optio?</p>
                </div>
            </section>
        </main>

        <footer id="footer">
            <div class="footer-wrapper">
                <h2 class="header-title">Let's Talk</h2>
                <hr class="ruler">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, eum.</p>
            </div>
        </footer>
    </body>
</html>