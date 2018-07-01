<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Cameron Adams - Software Engineer</title>

        <!-- Styles -->
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    </head>
    <body id="site">
        <header id="top">
            <div id="bg-img">
                <div id="header-main">
                    <h1>Cameron Adams</h1>
                    <hr id="ruler-header">
                    <h2>Software Engineer</h2>

                </div>
            </div>
        </header>

        <main id="main">
            <section id="profile">
                <div id="profile-wrapper">
                    <h2 class="header-title-color">About Me</h2>
                    <hr class="ruler-color">
                    <div id="profile-content">
                        <img id="profile-pic" src="{{ asset('img/profile-pic-1.jpg') }}">
                        <div id="profile-text">
                            <h3>Hi,</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, pariatur perspiciatis porro provident quae quibusdam temporibus tenetur ullam. Ad consequatur cumque ducimus facilis libero minima, neque nulla placeat possimus quod sapiente voluptate voluptatibus? Atque cum hic illo magnam nisi numquam odit placeat, vel! Debitis doloribus eligendi nesciunt reiciendis saepe velit.</p>
                        </div>
                    </div>

                </div>
            </section>

            <section id="career">
                <div id="career-wrapper">
                    <h2 class="header-title">Experiences</h2>
                    <hr class="ruler">
                    <div id="career-1">
                        <h3 class="company-name">Vertafore</h3>
                        <p>February 2018 - Present</p>

                        <b class="job-title">Software Engineer</b>
                        <ul>
                            <li>Built a web application on the company’s e-commerce SaaS platform to enable item cross-posting on eBay, and Amazon. Using PHP, HTML, CSS, and JavaScript.</li>
                            <li>300% increase in item posting speed by helping develop an internal REST API with Laravel to cross-post items to eBay</li>
                            <li>Centralized all shipping and handling logistics under one application by synchronizing orders made on eBay with the e-commerce platform's order system</li>
                            <li>Re-engineered a client’s outdated DNS system into a custom BIND DNS application deployed on AWS, resulting in reduced operating costs and increased uptime</li>
                        </ul>
                    </div>

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
                <div id="project-wrapper">
                    <h2 class="header-title-color">Projects</h2>
                    <hr class="ruler-color">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laboriosam laudantium porro qui quis repellat sit totam? Alias autem fuga fugiat nobis officia, perspiciatis quae sapiente tempora unde voluptate. Asperiores at cumque dolorum earum ex exercitationem illo itaque, nam obcaecati quas quidem repellat sapiente. Aut eligendi expedita labore minus optio?</p>
                </div>
            </section>
        </main>

        <footer id="footer">
            <div id="footer-wrapper">
                <h2 class="header-title">Let's Talk</h2>
                <hr class="ruler">
                <div id="contact-wrapper">
                    <a href="mailto:cameronadams@protonmail.com" id="email"><span class="icon icon-email"></span>cameronadams@protonmail.com</a>
                    <a href="https://linkedin.com/in/camadams/" id="linkedin" target="_blank"><span class="icon icon-linkedin"></span>https://linkedin.com/in/camadams/</a>
                </div>
            </div>
        </footer>
    </body>
</html>