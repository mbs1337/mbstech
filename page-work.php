<?php
/**
 * Template Name: Work Page
 * Template for displaying work and portfolio
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="work-page py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

            <!-- Work Description -->
            <div class="skills-intro text-center mb-5 py-4">
                <h1 class="skills-intro-title mb-4">25+ Years of Digital Expertise <span class="highlight-gradient">Work</span></h1>
                <p class="skills-intro-text">Below you'll find what I do, and if you're curious, a selection of clients. Most of what I've created over the years remains confidential, but these clients demonstrate the breadth of my capabilities.
                <br /><br />From the days of 56k modems to today's cutting-edge technologies, I've been building digital solutions for over a quarter century.</p>
            </div>

            <!-- Featured Projects Section -->
            <section class="projects-section mt-5">
                <h2 class="mb-4 text-center">What I Do</h2>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                            <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                <g transform="scale(0.1662)">
                                    <path d="M48.122,0C21.587,0,0.001,21.585,0.001,48.118c0,26.535,21.587,48.122,48.12,48.122c26.532,0,48.117-21.587,48.117-48.122 C96.239,21.586,74.654,0,48.122,0z M4.857,48.118c0-6.271,1.345-12.227,3.746-17.606l20.638,56.544 C14.81,80.042,4.857,65.243,4.857,48.118z M48.122,91.385c-4.247,0-8.346-0.623-12.222-1.763L48.88,51.903l13.301,36.433 c0.086,0.215,0.191,0.411,0.308,0.596C57.992,90.514,53.16,91.385,48.122,91.385z M54.083,27.834 c2.604-0.137,4.953-0.412,4.953-0.412c2.33-0.276,2.057-3.701-0.277-3.564c0,0-7.007,0.549-11.532,0.549 c-4.25,0-11.396-0.549-11.396-0.549c-2.332-0.137-2.604,3.427-0.273,3.564c0,0,2.208,0.275,4.537,0.412l6.74,18.469l-9.468,28.395 L21.615,27.835c2.608-0.136,4.952-0.412,4.952-0.412c2.33-0.275,2.055-3.702-0.278-3.562c0,0-7.004,0.549-11.53,0.549 c-0.813,0-1.77-0.021-2.784-0.052C19.709,12.611,33.008,4.856,48.122,4.856c11.265,0,21.519,4.306,29.215,11.357 c-0.187-0.01-0.368-0.035-0.562-0.035c-4.248,0-7.264,3.702-7.264,7.679c0,3.564,2.055,6.582,4.248,10.146 c1.647,2.882,3.567,6.585,3.567,11.932c0,3.704-1.422,8-3.293,13.986l-4.315,14.421L54.083,27.834z M69.871,85.516l13.215-38.208 c2.471-6.171,3.29-11.106,3.29-15.497c0-1.591-0.104-3.07-0.292-4.449c3.38,6.163,5.303,13.236,5.301,20.758 C91.384,64.08,82.732,78.016,69.871,85.516z"></path>
                                </g>
                            </svg>
                            </div>
                            <h3 class="h5">WordPress Development</h3>
                            <p class="text-muted">Open-source WordPress solutions with custom themes and plugins.</p>
                            <ul class="list-unstyled text-muted small">
                                <li>✓ Custom theme development</li>
                                <li>✓ Plugin customization</li>
                                <li>✓ WooCommerce integration</li>
                                <li>✓ Community-driven ecosystem</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Web Application Development</h3>
                            <p class="text-muted">Modern web applications with clean code and responsive design.</p>
                            <ul class="list-unstyled text-muted small">
                                <li>✓ Responsive web design</li>
                                <li>✓ API integration</li>
                                <li>✓ Database design</li>
                                <li>✓ Security implementation</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M8 1a6 6 0 0 0-6 6v3a2 2 0 0 0 2 2h1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3V7a5 5 0 0 1 10 0v1h-2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h1a2 2 0 0 0 2-2V7a6 6 0 0 0-6-6z"/>
                                    <path d="M5 12.5a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 .5.5v.5A1.5 1.5 0 0 1 6 14.5H5a.5.5 0 0 1 0-1h1a.5.5 0 0 0 .5-.5v-.5H5.5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Consulting & Support</h3>
                            <p class="text-muted">Technical consulting and ongoing support for web projects.</p>
                            <ul class="list-unstyled text-muted small">
                                <li>✓ Technical consulting</li>
                                <li>✓ Code review</li>
                                <li>✓ Performance audit</li>
                                <li>✓ Troubleshooting</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v8A1.5 1.5 0 0 1 14.5 11H1.5A1.5 1.5 0 0 1 0 9.5v-8zm1.5-.5a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-13z"/>
                                    <path d="M0 12.5h16V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1.5z"/>
                                </svg>
                            </div>
                            <h3 class="h5">E-commerce development</h3>
                            <p class="text-muted">Proprietary closed-source eShop.dk with full security control and performance.</p>
                            <ul class="list-unstyled text-muted small">
                                <li>✓ Closed-source architecture</li>
                                <li>✓ Custom modules & extensions</li>
                                <li>✓ Complete security control</li>
                                <li>✓ Optimized performance engine</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                                </svg>
                            </div>
                            <h3 class="h5">AI Integration Services</h3>
                            <p class="text-muted">Implementing AI and language models to enhance your applications.</p>
                            <ul class="list-unstyled text-muted small">
                                <li>✓ Language model integration (LLMs)</li>
                                <li>✓ RAG & MCP implementation</li>
                                <li>✓ Intelligent automation</li>
                                <li>✓ Custom API development</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="post-card">
                            <div class="project-icon mb-3">
                                <svg width="60" height="60" fill="var(--primary-green)" viewBox="0 0 16 16">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                            </div>
                            <h3 class="h5">Mobile Apps</h3>
                            <p class="text-muted">Cross-platform mobile applications for iOS and Android.</p>
                            <ul class="list-unstyled text-muted small">
                                <li>✓ Progressive web apps</li>
                                <li>✓ Responsive mobile design</li>
                                <li>✓ App optimization</li>
                                <li>✓ Backend integration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Technologies Section -->
            <section class="technologies-section mt-5 pt-5">
                <h2 class="text-center mb-4 pb-3">Technologies I Work With</h2>
                <div class="row text-center">
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">WordPress</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">WooCommerce</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Linux</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Docker</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">Bootstrap</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">PHP</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">MySQL</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="tech-item">
                            <p class="text-muted my-0">JavaScript</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section mt-5 pt-5 pb-3 text-center">
                <div class="post-card">
                    <h2 class="mb-4">Ready to Build Something Great?</h2>
                    <p class="lead text-muted mb-4">
                        Let's discuss your project. 25+ years building web solutions that work.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                        Get In Touch
                    </a>
                        <a href="<?php echo esc_url(home_url('/home/')); ?>" class="btn btn-secondary">Go back Home</a>
                    </div>
                </div>
            </section>

  <!-- Portfolio Filter Section -->
  <section class="portfolio-filter-section mt-5 pt-5">
                <h2 id="portfolio" class="text-center mb-4">Client Portfolio</h2>

                <!-- Filter Tabs -->
                <div class="filter-tabs mb-5">
                    <div class="d-flex justify-content-center gap-2 flex-wrap position-relative">
                        <button class="filter-btn" data-filter="all">All</button>
                        <button class="filter-btn" data-filter="homepage">Homepages</button>
                        <button class="filter-btn" data-filter="webshop">Webshops</button>
                        <button class="filter-btn" data-filter="mixed">Mixed</button>
                        <button class="filter-btn" data-filter="2019">2019-2024</button>
                        <button class="filter-btn" data-filter="2012">2012-2018</button>
                        <button class="filter-btn-none" data-filter="none" title="Clear filter">×</button>
                    </div>
                </div>

                <!-- Empty State Message -->
                <div class="portfolio-empty-state" id="emptyState">
                    <div class="empty-state-content">
                        <p>Select a category above to view projects</p>
                    </div>
                </div>

                <!-- Portfolio Items -->
                <div class="portfolio-grid" style="display: none;">
                    <!-- 2019-202x Homepages -->
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>GuidingStarOrchestra.com</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Arsenal.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Medikom.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Skovlink.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Automize.com</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Hydralab.com</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>TimeToChange.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Growbrain.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Fysio7500.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>Fysio7430.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>BasicStrength.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>tnha.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>farumskovboernehave.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>vangagergaard.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>smagkarrebaeksminde.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>konkursafvikling.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>hestevognsferie.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>efgartnergaarden.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>a6plast.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>aku-skalborg.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>holstentandbedre.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>ankonsult.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>cleanblast.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>arkitektmoebler.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>autoglasmanden.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>airportcoordination.com</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>vmv-teknik.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>pointerklub.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>faaborgcamping.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>totaltruck.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>aeroebrandfonden.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>pernillebretton-meyer.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>orenaes.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>tn-viborg.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>bbnnordic.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>bakkelund-ryslinge.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>tygesen-energi.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>gisselfeld.com</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>mental-coach.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>skolenfor.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>webberiet.com</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>key.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>eskildsmoebelpolstring.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2019">
                        <div class="portfolio-card">
                            <h5>pl-montage.dk</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>

                    <!-- 2019-202x Webshops -->
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Raskeplanter.com</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Raskeplader.com</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Steppas.com</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>Framework-artprint.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>givetojcenter.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>dns.services</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>e-trading.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>e-studio.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>atznet.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>muskuloskeletal.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>lilylouisa.com</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>th-aps.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>fiskersreklame.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>bv-isolering.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>gittecarlend.com</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>godesenge.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>wacore.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>norresobykod.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>save-money.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>magaprint.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>shop.bio-circle.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>chateau-holm.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>ricdenmark.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>mabellastyle.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>totaltruck.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>drueklubben.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>vagabondtours.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>rvinbar.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>boomboom.gg</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2019">
                        <div class="portfolio-card">
                            <h5>krogsoee.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>

                    <!-- 2019-202x Mixed -->
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>KFI.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>BJS-ren.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>sibast-furniture.com</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>pernillebretton-meyer.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>Faaborg Camping</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>AH Maler</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>Eques.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>boligsalgudland.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>byflygare.com</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>indkrydsning.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>nicesmile.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>curaeos.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>etand.sikkerhenvisning.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>totalarrangementer.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>greencut.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>landbrugsvikarsyd.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2019">
                        <div class="portfolio-card">
                            <h5>circlemfarm.dk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-info">2019-2024</span>
                        </div>
                    </div>

                    <!-- 2012-2018 Homepages -->
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>BanksMC</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>AGF Håndbold</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>AGF Cup</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Ravn København</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Letvægten</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Carta Autofinans</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Fuzhou Restaurant</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Holstebro Boldklub</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Ulbjerg Fodboldgolf</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Fodboldgolfviborg</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Murerfirmaet Tandrup</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Danteam Dækservice</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Gøgl og Galla</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Quickpolering</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Trabjerggaard</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Jensen Solfilm</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Tjensen</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Rojana</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Robothockey</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Naturliginspiration</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Lagunen Holstebro</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Skave EL Forretning</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>EL Compagniet</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="homepage 2012">
                        <div class="portfolio-card">
                            <h5>Livstrappen</h5>
                            <span class="badge bg-secondary">Homepage</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>

                    <!-- 2012-2018 Webshops -->
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Ausumlille.dk</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Marselis Vine</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>EL Shoppen</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>TK Maskiner</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Powercube</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Barncasting</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Boyzhood</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Kidsprint</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>Tatanka</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="webshop 2012">
                        <div class="portfolio-card">
                            <h5>JyskAutoglas</h5>
                            <span class="badge bg-success">Webshop</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>

                    <!-- 2012-2018 Mixed -->
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>VIA Holstebro</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Holstebro Kommune</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Ceramic Speed</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Servicefirmaet</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>FairHuussalg</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Thrane Teknik</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Birger Larsen Viborg</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Kabelx</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Designgodter</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Ejsing Fodboldgolf</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Tornvig & Co</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Gøed Efterskole</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Hardsyssel Efterskole</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Holstebro Fadøl</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Midtvestbyg</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Støberiet i Holstebro</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Danbolig v/Johs Pedersen</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Fox and Hounds Holstebro og Herning</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Slagtergrillen Holstebro</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Indiagate Amager</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Dværgfisk</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Byg Bro Holstebro</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Dansk Sommerhus Service</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Dansk Fodboldgolf Union</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Himmerland Fodboldgolf</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>LejCocktailBartender</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Foreningskaffe</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Gaver fra hjerte til hjerte</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Companyaid</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Miami Pizza Holstebro</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Trust Camping</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Vilsgaard Vision</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Workmomentum Struer</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>PS begravelsesforretning</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Lejbilligst</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Fabiola Christiensen</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Onlinefabrikken</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Billig Hygiejne</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Phonetrade</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Oplev Vækst</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Blåbjerg Trampolin & Legeservice ApS</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>First mover Magazine</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Damkjær Inspire</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                    <div class="portfolio-item" data-category="mixed 2012">
                        <div class="portfolio-card">
                            <h5>Rudis kokkeservice</h5>
                            <span class="badge bg-warning text-dark">Mixed</span>
                            <span class="badge bg-primary">2012-2018</span>
                        </div>
                    </div>
                </div>

                <style>
                    .filter-tabs {
                        margin-bottom: 2rem;
                    }

                    .filter-btn {
                        background: transparent;
                        border: 1px solid var(--border-color);
                        color: var(--text-color);
                        padding: 0.5rem 1.25rem;
                        border-radius: 6px;
                        cursor: pointer;
                        transition: all 0.2s;
                        font-size: 0.9rem;
                    }

                    .filter-btn:hover {
                        border-color: var(--primary-green);
                        color: var(--primary-green);
                    }

                    .filter-btn.active {
                        background: var(--primary-green);
                        color: white;
                        border-color: var(--primary-green);
                    }

                    .portfolio-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                        gap: 1.5rem;
                    }

                    .portfolio-item {
                        opacity: 1;
                        transform: scale(1);
                        transition: all 0.3s;
                    }

                    .portfolio-item.hidden {
                        display: none;
                    }

                    .portfolio-card {
                        background: var(--card-bg);
                        border: 1px solid var(--border-color);
                        border-radius: 8px;
                        padding: 1.5rem;
                        height: 100%;
                        transition: all 0.2s;
                    }

                    .portfolio-card:hover {
                        border-color: var(--primary-green);
                        transform: translateY(-2px);
                        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                    }

                    .portfolio-card h5 {
                        margin-bottom: 0.75rem;
                        font-size: 1rem;
                        font-weight: 600;
                    }

                    .portfolio-card .badge {
                        font-size: 0.75rem;
                        margin-right: 0.5rem;
                    }

                    /* Custom badge colors */
                    .badge.bg-primary {
                        background-color: #ffc107 !important;
                        color: #000 !important;
                    }

                    .badge.bg-info {
                        background-color: #8b0000 !important;
                        color: #fff !important;
                    }

                    .badge.bg-secondary {
                        background-color: #6c757d !important;
                        color: #fff !important;
                    }

                    .badge.bg-success {
                        background-color: #1a1a1a !important;
                        color: #fff !important;
                    }

                    .badge.bg-warning {
                        background-color: #fff !important;
                        color: #000 !important;
                        border: 1px solid #dee2e6;
                    }

                    /* Empty State */
                    .portfolio-empty-state {
                        text-align: center;
                        padding: 0;
                        min-height: 100px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .empty-state-content {
                        max-width: 400px;
                    }

                    .empty-state-content p {
                        font-size: 1.1rem;
                        color: grey;
                        margin: 0;
                    }

                    /* None button styling */
                    .filter-btn-none {
                        position: absolute;
                        top: -30px;
                        right: 0;
                        background: transparent;
                        border: none;
                        color: rgba(108, 117, 125, 0.3);
                        font-size: 1.2rem;
                        line-height: 1;
                        padding: 0.25rem 0.5rem;
                        cursor: pointer;
                        transition: all 0.2s;
                    }

                    .filter-btn-none:hover {
                        color: rgba(108, 117, 125, 0.5);
                    }

                    .filter-btn-none.active {
                        color: rgba(108, 117, 125, 0.7);
                    }
                </style>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const filterBtns = document.querySelectorAll('.filter-btn');
                    const noneBtn = document.querySelector('.filter-btn-none');
                    const portfolioItems = document.querySelectorAll('.portfolio-item');
                    const portfolioGrid = document.querySelector('.portfolio-grid');
                    const emptyState = document.getElementById('emptyState');

                    // Handle regular filter buttons
                    filterBtns.forEach(btn => {
                        btn.addEventListener('click', function() {
                            const filter = this.getAttribute('data-filter');

                            // Update active button
                            filterBtns.forEach(b => b.classList.remove('active'));
                            noneBtn.classList.remove('active');
                            this.classList.add('active');

                            // Hide empty state and show grid
                            emptyState.style.display = 'none';
                            portfolioGrid.style.display = 'grid';

                            // Filter items
                            portfolioItems.forEach(item => {
                                if (filter === 'all') {
                                    item.classList.remove('hidden');
                                } else {
                                    const categories = item.getAttribute('data-category').split(' ');
                                    if (categories.includes(filter)) {
                                        item.classList.remove('hidden');
                                    } else {
                                        item.classList.add('hidden');
                                    }
                                }
                            });
                        });
                    });

                    // Handle none button
                    noneBtn.addEventListener('click', function() {
                        // Remove active from all filter buttons
                        filterBtns.forEach(b => b.classList.remove('active'));
                        noneBtn.classList.add('active');

                        // Show empty state, hide grid
                        emptyState.style.display = 'flex';
                        portfolioGrid.style.display = 'none';
                    });
                });
                </script>
            </section>

        <?php endwhile; ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var getInTouchLink = document.getElementById('get-in-touch-link');
	if (!getInTouchLink || typeof window.bootstrap === 'undefined' || !window.bootstrap.Popover) {
		return;
	}

	var emailLocalPart = 'michael';
	var emailDomain = 'mbstech.dk';
	var emailAddress = emailLocalPart + '@' + emailDomain;

	var popover = new window.bootstrap.Popover(getInTouchLink, {
		trigger: 'click',
		placement: 'bottom',
		container: 'body',
		customClass: 'connect-popover',
		html: true,
		sanitize: false,
		content: '<div class="d-flex align-items-center gap-2" id="get-in-touch-popover">' +
			'<code class="px-1">' + emailAddress + '</code>' +
			'<button type="button" class="btn btn-sm btn-primary" id="copy-email-btn-cta" aria-label="Copy email">Copy</button>' +
		'</div>'
	});

	getInTouchLink.addEventListener('click', function (e) {
		e.preventDefault();
	});

	getInTouchLink.addEventListener('shown.bs.popover', function () {
		var copyBtn = document.getElementById('copy-email-btn-cta');
		if (!copyBtn) return;
		copyBtn.addEventListener('click', function () {
			var restoreText = function (text) {
				setTimeout(function () { copyBtn.textContent = text; }, 1500);
			};
			if (navigator.clipboard && navigator.clipboard.writeText) {
				navigator.clipboard.writeText(emailAddress).then(function () {
					var oldText = copyBtn.textContent;
					copyBtn.textContent = 'Copied';
					restoreText(oldText);
				}).catch(function () {
					var oldText = copyBtn.textContent;
					copyBtn.textContent = 'Error';
					restoreText(oldText);
				});
			} else {
				// Fallback: create a temporary input for older browsers
				var temp = document.createElement('input');
				temp.value = emailAddress;
				document.body.appendChild(temp);
				temp.select();
				try { document.execCommand('copy'); } catch (err) {}
				document.body.removeChild(temp);
				var oldText = copyBtn.textContent;
				copyBtn.textContent = 'Copied';
				setTimeout(function () { copyBtn.textContent = oldText; }, 1500);
			}
		});
	});
});
</script>

<style>
.popover.connect-popover { background-color:#212529; color:#f8f9fa; border-color:#343a40; }
.popover.connect-popover .popover-body { padding: .5rem .75rem; }
.popover.connect-popover .popover-arrow::after { border-bottom-color:#212529; }
.popover.connect-popover code { color:white; background:transparent; }
.popover.connect-popover .btn.btn-primary { background-color:#6f42c1; border-color:#6f42c1; }
.popover.connect-popover .btn.btn-primary:focus,.popover.connect-popover .btn.btn-primary:hover { background-color:#5a38a2; border-color:#5a38a2; }
</style>

<?php get_footer(); ?>
