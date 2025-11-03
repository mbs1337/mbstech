<?php
/**
 * Template Name: Skills Page
 * Template for displaying skills and expertise
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="skills-page py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

            <!-- Professional Description -->
            <div class="skills-intro mb-5 text-center py-4">
                <h1 class="skills-intro-title mb-4">My <span class="highlight-gradient">Skills</span> on The Internet Since 1999</h1>
                <p class="skills-intro-text">Engaged in web development and IT since 1999. Throughout my career, I have accumulated extensive expertise across multiple domains including web development, content management systems, system administration, and digital optimization in total. <br /><br />Below you'll find my technical skills and areas of interest, showcasing the breadth of my experience in this ever-evolving landscape.</p>
            </div>

            <!-- Skills Grid Section -->

            <!-- Web Development -->
            <section class="skills-section mt-5 mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-code-slash"></i> Web Development</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/rwd-icon.png" alt="RWD">
                        </div>
                        <h3 class="h6 mt-3">RWD</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/html5-icon.png" alt="HTML5">
                        </div>
                        <h3 class="h6 mt-3">HTML5</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/css3-icon.png" alt="CSS3">
                        </div>
                        <h3 class="h6 mt-3">CSS3</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/javascript-icon.png" alt="JavaScript">
                        </div>
                        <h3 class="h6 mt-3">JavaScript</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/jquery-icon.png" alt="jQuery">
                        </div>
                        <h3 class="h6 mt-3">jQuery</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/php-icon.png" alt="PHP">
                        </div>
                        <h3 class="h6 mt-3">PHP</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/mariadb-icon.png" alt="MariaDB">
                        </div>
                        <h3 class="h6 mt-3">MariaDB</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/mysql-icon.png" alt="MySQL">
                        </div>
                        <h3 class="h6 mt-3">MySQL</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/smarty-icon.png" alt="Smarty">
                        </div>
                        <h3 class="h6 mt-3">Smarty</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/python-icon.png" alt="Python">
                        </div>
                        <h3 class="h6 mt-3">Python</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/node-icon.png" alt="Node.js">
                        </div>
                        <h3 class="h6 mt-3">Node.js</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/laravel-icon.png" alt="Laravel">
                        </div>
                        <h3 class="h6 mt-3">Laravel</h3>
                        <p class="skill-rating">★☆☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- CMS & E-commerce -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-shop"></i> CMS & E-commerce</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/wp-icon.png" alt="WordPress">
                        </div>
                        <h3 class="h6 mt-3">WordPress</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/e-studio-e-icon.png" alt="e-shop.dk">
                        </div>
                        <h3 class="h6 mt-3">e-shop.dk</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/wc-icon.png" alt="WooCommerce">
                        </div>
                        <h3 class="h6 mt-3">WooCommerce</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/seo-icon.png" alt="SEO">
                        </div>
                        <h3 class="h6 mt-3">SEO</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/prestashop-icon.png" alt="Prestashop">
                        </div>
                        <h3 class="h6 mt-3">Prestashop</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/wannafind-icon.png" alt="Wannafind">
                        </div>
                        <h3 class="h6 mt-3">Wannafind</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/dandomain-icon.png" alt="Dandomain">
                        </div>
                        <h3 class="h6 mt-3">Dandomain</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/smartweb-icon.png" alt="Smartweb">
                        </div>
                        <h3 class="h6 mt-3">Smartweb</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/drupal-icon.png" alt="Drupal">
                        </div>
                        <h3 class="h6 mt-3">Drupal</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/magento-icon.png" alt="Magento">
                        </div>
                        <h3 class="h6 mt-3">Magento</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/shopify-icon.png" alt="Shopify">
                        </div>
                        <h3 class="h6 mt-3">Shopify</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Design & Creative Tools -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-palette"></i> Design & Creative Tools</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/gimp-icon.png" alt="Gimp">
                        </div>
                        <h3 class="h6 mt-3">Gimp</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/penpot-icon.png" alt="Penpot">
                        </div>
                        <h3 class="h6 mt-3">Penpot</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/excalidraw-icon.png" alt="Excalidraw">
                        </div>
                        <h3 class="h6 mt-3">Excalidraw</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/figma-icon.png" alt="Figma">
                        </div>
                        <h3 class="h6 mt-3">Figma</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/photoshop-icon.png" alt="Photoshop">
                        </div>
                        <h3 class="h6 mt-3">Photoshop</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/indesign-icon.png" alt="InDesign">
                        </div>
                        <h3 class="h6 mt-3">InDesign</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/illustrator-icon.png" alt="Illustrator">
                        </div>
                        <h3 class="h6 mt-3">Illustrator</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Development Tools -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-tools"></i> Development Tools</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/notepad-icon.png" alt="Notepad++">
                        </div>
                        <h3 class="h6 mt-3">Notepad++</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/filezilla-icon.png" alt="FileZilla">
                        </div>
                        <h3 class="h6 mt-3">FileZilla</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/cursor-icon.png" alt="Cursor">
                        </div>
                        <h3 class="h6 mt-3">Cursor</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/vscode-icon.png" alt="VS Code">
                        </div>
                        <h3 class="h6 mt-3">VS Code</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/rest-api-icon.png" alt="REST APIs">
                        </div>
                        <h3 class="h6 mt-3">REST APIs</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/github-icon.png" alt="Git/GitHub">
                        </div>
                        <h3 class="h6 mt-3">Git/GitHub</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/npm-icon.png" alt="npm/Composer">
                        </div>
                        <h3 class="h6 mt-3">npm/Composer</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                </div>
            </section>

             <!-- LLM Tools -->
             <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-tools"></i> Large Language Models</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/ollama-icon.png" alt="Ollama">
                        </div>
                        <h3 class="h6 mt-3">Ollama</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/langchain-icon.png" alt="LangChain">
                        </div>
                        <h3 class="h6 mt-3">LangChain</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/claude-icon.png" alt="Claude Code">
                        </div>
                        <h3 class="h6 mt-3">Claude Code</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/mcp-icon.png" alt="MCP">
                        </div>
                        <h3 class="h6 mt-3">MCP</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/lechat-icon.png" alt="LeChat Mistral">
                        </div>
                        <h3 class="h6 mt-3">Mistral</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/chatgpt-icon.png" alt="ChatGPT">
                        </div>
                        <h3 class="h6 mt-3">ChatGPT</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                </div>
            </section>

            <!-- System & Infrastructure -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-server"></i> System & Infrastructure</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/linux-icon.png" alt="Linux">
                        </div>
                        <h3 class="h6 mt-3">Linux</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/windows-icon.png" alt="Windows">
                        </div>
                        <h3 class="h6 mt-3">Windows</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/hosting-icon.png" alt="Hosting/Cloud">
                        </div>
                        <h3 class="h6 mt-3">Hosting/Cloud</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/bash-icon.png" alt="Bash">
                        </div>
                        <h3 class="h6 mt-3">Bash</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/docker-icon.png" alt="Docker">
                        </div>
                        <h3 class="h6 mt-3">Docker</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/network-icon.png" alt="Network">
                        </div>
                        <h3 class="h6 mt-3">Network</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/hardware-icon.png" alt="Hardware">
                        </div>
                        <h3 class="h6 mt-3">Hardware</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/software-icon.png" alt="Software">
                        </div>
                        <h3 class="h6 mt-3">Software</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Optimization & Performance -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-speedometer2"></i> Optimization & Performance</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/hastighedoptimering-icon.png" alt="Speed Optimization">
                        </div>
                        <h3 class="h6 mt-3">Speed Optimization</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/sikkerhed-icon.png" alt="Security">
                        </div>
                        <h3 class="h6 mt-3">Security</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/fejlsogning-icon.png" alt="Troubleshooting">
                        </div>
                        <h3 class="h6 mt-3">Troubleshooting</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/analyse-icon.png" alt="Analysis">
                        </div>
                        <h3 class="h6 mt-3">Analysis</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>
                </div>
            </section>

            <!-- Platforms & Applications -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-laptop"></i> Platforms & Applications</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/chrome-icon.png" alt="Chrome">
                        </div>
                        <h3 class="h6 mt-3">Chrome</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/firefox-icon.png" alt="Firefox">
                        </div>
                        <h3 class="h6 mt-3">Firefox</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/brave-icon.png" alt="Brave">
                        </div>
                        <h3 class="h6 mt-3">Brave</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/android-icon.png" alt="Android">
                        </div>
                        <h3 class="h6 mt-3">Android</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/sailfish-icon.png" alt="Sailfish OS">
                        </div>
                        <h3 class="h6 mt-3">Sailfish OS</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/office365-icon.png" alt="Office 365">
                        </div>
                        <h3 class="h6 mt-3">Office 365</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/thunderbird-icon.png" alt="Thunderbird">
                        </div>
                        <h3 class="h6 mt-3">Thunderbird</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/apple-icon.png" alt="Apple">
                        </div>
                        <h3 class="h6 mt-3">Apple</h3>
                        <p class="skill-rating">☆☆☆☆☆</p>
                    </div>
                </div>
            </section>

            <!-- Knowledge & Interests -->
            <section class="skills-section mb-5">
                <h2 class="mb-4 text-center"><i class="bi bi-book"></i> Knowledge & Interests</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/videnskab-icon.png" alt="Science">
                        </div>
                        <h3 class="h6 mt-3">Science</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/teknologi-icon.png" alt="Technology">
                        </div>
                        <h3 class="h6 mt-3">Technology</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/spiritualitet-icon.png" alt="Spirituality">
                        </div>
                        <h3 class="h6 mt-3">Spirituality</h3>
                        <p class="skill-rating">★★★★☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/historie-icon.png" alt="History">
                        </div>
                        <h3 class="h6 mt-3">History</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/bitcoin-icon.png" alt="Bitcoin">
                        </div>
                        <h3 class="h6 mt-3">Bitcoin</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/musik-icon.png" alt="Music">
                        </div>
                        <h3 class="h6 mt-3">Music</h3>
                        <p class="skill-rating">★★★☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/politik-icon.png" alt="Politics">
                        </div>
                        <h3 class="h6 mt-3">Politics</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/religion-icon.png" alt="Religion">
                        </div>
                        <h3 class="h6 mt-3">Religion</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>

                    <div class="skill-item">
                        <div class="skill-icon-box">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/psykologi-icon.png" alt="Psychology">
                        </div>
                        <h3 class="h6 mt-3">Psychology</h3>
                        <p class="skill-rating">★★☆☆☆</p>
                    </div>
                </div>
            </section>


            <!-- CTA Section -->
            <section class="cta-section mt-5 pt-5 text-center">
                <div class="post-card mt-5">
                    <h2 class="mb-4">Need Technical Expertise?</h2>
                    <p class="lead text-muted mb-4">
                        Technical proficiency meets creative problem-solving. 25+ years, always learning.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                        Get In Touch
                    </a>
                        <a href="<?php echo esc_url(home_url('/life/')); ?>" class="btn btn-secondary">Lookup my Passions</a>
                    </div>
                </div>
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
