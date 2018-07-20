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
                    <h1 id="header-name">Cameron Adams</h1>
                    <hr id="ruler-header">
                    <h2 id="header-sub">Software Engineer</h2>

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
                    <h2 class="header-title">Careers</h2>
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

            <section id="skills">
                <div id="skills-wrapper">
                    <h2 class="header-title-color">Skills</h2>
                    <hr class="ruler-color">

                    <!-- Forgive the inline styling, it's just much more practical this way. -->
                    <div id="skills-content">
                        <div id="skills-col-1">
                            <div class="skill-item">
                                <h3 class="skill-title">Java</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:85%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <h3 class="skill-title">PHP/Laravel</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:90%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <h3 class="skill-title">HTML</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:95%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <h3 class="skill-title">CSS/SCSS</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:70%"></div>
                                </div>
                            </div>
                        </div>
                        <div id="skills-col-2">
                            <div class="skill-item">
                                <h3 class="skill-title">JavaScript</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:60%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <h3 class="skill-title">SQL</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:70%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <h3 class="skill-title">Agile</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:80%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <h3 class="skill-title">AWS</h3>
                                <div class="progress-container">
                                    <div class="progressbar" style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="education">
                <div id="education-wrapper">
                    <h2 class="header-title">Education</h2>
                    <hr class="ruler">
                    <h3>The Ohio State University</h3>
                    <p>Bachelor of Science - Computer Science & Engineering</p>
                    <p>2016</p>
                </div>
            </section>

            <section id="projects">
                <div id="project-wrapper">
                    <h2 class="header-title-color">Projects</h2>
                    <hr class="ruler-color">
                    <div id="projects-container">
                        <div id="project-1">
                            <a href="https://google.com" target="_blank">
                                <img class="project-pic" src="{{ asset('img/google-screenshot.png') }}">
                            </a>
                            <a href="https://google.com" target="_blank" class="project-name"><b>Long Ears</b></a>
                            <div class="tags">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>JavaScript</span>
                                <span>PHP</span>
                            </div>
                        </div>
                        <div id="project-2">
                            <a href="https://google.com" target="_blank">
                                <img class="project-pic" src="{{ asset('img/google-screenshot.png') }}">
                            </a>
                            <div class="tag-container">
                                <a href="https://google.com" target="_blank" class="project-name"><b>google.com</b></a>
                                <div class="tags">
                                    <span>HTML</span>
                                    <span>CSS</span>
                                    <span>PHP</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">
            <div id="footer-wrapper">
                <h2 class="header-title">Let's Talk</h2>
                <hr class="ruler">
                <div id="contact-wrapper">
                    <a href="mailto:cameronadams@protonmail.com" id="email" tabindex="0"><span id="icon-email"></span>cameronadams@protonmail.com</a>
                    <a href="https://linkedin.com/in/camadams/" id="linkedin" tabindex="0" target="_blank"><span id="icon-linkedin"></span>https://linkedin.com/in/camadams/</a>
                    <a href="https://github.com/cjadams13/" id="github" tabindex="0" target="_blank"><span id="icon-github"></span>https://github.com/cjadams13/</a>
                </div>
            </div>
        </footer>
    </body>
</html>