<?php
/**
 * Template Name: Life Page
 * Template for displaying personal life and interests
 *
 * @package mbsTECH
 */

get_header();
?>

<div class="life-page py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>

            <!-- Life Description -->
            <div class="skills-intro text-center mb-5 py-4">
                <h1 class="skills-intro-title mb-4">Agree in <span class="highlight-gradient">Life</span> With Stallman.org</h1>
                <p class="skills-intro-text">Used to have a Twitter profile writing "important" stuff, same with Facebook. <br /><br />These days I just agree with Stallman.org and honestly, I don't like where society is heading. But there's much more to it than that—so let's just focus on building good things and enjoying life while we're at it.</p>
            </div>

            <!-- Interests Section -->
            <section class="interests-section mt-5">
                <h2 class="mb-4 text-center">Interests & Passions</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🔬</span>
                                Science & Technology
                            </h3>
                            <p class="text-muted">
                                Fascinated by the latest developments in technology, science, and innovation.
                                Always exploring new tools and methodologies to improve development workflows.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🌐</span>
                                Web3 & Blockchain
                            </h3>
                            <p class="text-muted">
                                Interested in decentralized applications and the future of the web.
                                Following crypto developments since 2016 and exploring Web3 technologies.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🧘</span>
                                Spirituality & Philosophy
                            </h3>
                            <p class="text-muted">
                                Exploring consciousness, mindfulness, and the deeper questions of existence.
                                Balancing technical work with personal growth and self-reflection.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🎵</span>
                                Music & Creativity
                            </h3>
                            <p class="text-muted">
                                Enjoying various music genres and appreciating creative expression.
                                Finding inspiration in art, design, and creative problem-solving.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">📚</span>
                                Continuous Learning
                            </h3>
                            <p class="text-muted">
                                Committed to lifelong learning and self-improvement.
                                Currently exploring AI, machine learning, and Solidity for smart contracts.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <h3 class="h5 mb-3">
                                <span style="font-size: 2rem; margin-right: 10px;">🌍</span>
                                Open Source
                            </h3>
                            <p class="text-muted">
                                Strong believer in open source philosophy and collaborative development.
                                Contributing to the community through code sharing and knowledge transfer.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

  <!-- CTA Section -->
  <section class="cta-section mt-5 pt-5 text-center">
                <div class="post-card">
                    <h2 class="mb-4">Let's Create Something Meaningful</h2>
                    <p class="lead text-muted mb-4">
                        Building ethical tech solutions that respect users and empower communities.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                    <a href="#" id="get-in-touch-link" class="btn btn-primary" rel="nofollow" aria-describedby="get-in-touch-popover" role="button">
                        Get In Touch
                    </a>
                        <a href="<?php echo esc_url(home_url('/skills/')); ?>" class="btn btn-secondary">View my Skills</a>
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

<!-- Timeline Section -->
<section class="timeline-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">My Journey</h2>
            <p class="section-subtitle">Projects and milestones throughout the years</p>
        </div>

        <div class="timeline">
            <!-- 1999-2002 -->
            <div class="timeline-item">
                <div class="timeline-marker">1999 to 2002</div>
                <div class="timeline-content">
                    <h4>The Beginning</h4>
                    <ul class="mb-0">
                        <li>OneSite.dk</li>
                        <li>Inflator.org</li>
                        <li>Fairhost.dk</li>
                        <li>E-studio.dk</li>
                        <li>Cool-case.dk</li>
                        <li>Uptimer.org</li>
                        <li>Vinderup-Skole</li>
                    </ul>
                </div>
            </div>

            <!-- 2002-2007 -->
            <div class="timeline-item">
                <div class="timeline-marker">2002 to 2007</div>
                <div class="timeline-content">
                    <h4>Design Evolution</h4>
                    <div class="timeline-projects">
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/mr-fister.png" alt="Mr-fister.dk">
                            <div>
                                <a href="https://mbstech.dk/my-early-designs/" target="_blank" rel="noopener">Mr-fister.dk</a>
                                <small class="d-block text-muted">2002-2007</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/pages-online.png" alt="Pages-online.dk">
                            <div>
                                <a href="https://mbstech.dk/my-early-designs/" target="_blank" rel="noopener">Pages-online.dk</a>
                                <small class="d-block text-muted">2003-2005</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2007-2014 PARTY HARD -->
            <div class="timeline-item timeline-item-party">
                <div class="timeline-marker">2007 to 2014</div>
                <div class="timeline-content">
                    <h4>Life Experiences</h4>
                    <p class="mb-0" style="color: var(--primary-green); font-weight: 600;">PARTY HARD, Y'ALL!!!</p>
                </div>
            </div>

            <!-- 2014-2023 -->
            <div class="timeline-item">
                <div class="timeline-marker">2014 to 2023</div>
                <div class="timeline-content">
                    <h4>Professional Growth</h4>
                    <div class="timeline-projects">
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/powercube.dk.png" alt="Powercube.dk">
                            <div>
                                <a href="https://powercube.dk/" target="_blank" rel="noopener">Powercube.dk</a>
                                <small class="d-block text-muted">2014-2020</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/vestas.png" alt="Vestas.dk">
                            <div>
                                <a href="https://vestas.dk/" target="_blank" rel="noopener">Vestas.dk</a>
                                <small class="d-block text-muted">2014-2015</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/ceramicspeed.png" alt="CeramicSpeed.com">
                            <div>
                                <a href="https://ceramicspeed.com/" target="_blank" rel="noopener">CeramicSpeed.com</a>
                                <small class="d-block text-muted">2016-2017</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/frivilligholstebro.dk.png" alt="FrivilligHolstebro.dk">
                            <div>
                                <a href="https://frivilligholstebro.dk/" target="_blank" rel="noopener">FrivilligHolstebro.dk</a>
                                <small class="d-block text-muted">2016-2023</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/zitcom.png" alt="Zitcom.dk">
                            <div>
                                <a href="https://zitcom.dk/" target="_blank" rel="noopener">Zitcom.dk</a>
                                <small class="d-block text-muted">2017-2018</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2011-202x -->
            <div class="timeline-item timeline-item-current">
                <div class="timeline-marker">2011 to 202x</div>
                <div class="timeline-content">
                    <h4>Current & Ongoing</h4>
                    <div class="timeline-projects">
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/big-e-small.png" alt="E-studio.dk">
                            <div>
                                <a href="https://e-studio.dk/" target="_blank" rel="noopener">E-studio.dk</a>
                                <small class="d-block text-muted">2019-202x</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/big-e-small.png" alt="E-shop.dk">
                            <div>
                                <a href="https://e-shop.dk/" target="_blank" rel="noopener">E-shop.dk</a>
                                <small class="d-block text-muted">2025-202x</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/sikkermailkryptering.png" alt="SikkermailKryptering.dk">
                            <div>
                                <a href="https://sikkermailkryptering.dk/" target="_blank" rel="noopener">SikkermailKryptering.dk</a>
                                <small class="d-block text-muted">2019-202x</small>
                            </div>
                        </div>
                        <div class="timeline-project">
                            <img src="https://mbstech.dk/wp-content/themes/mbstech/assets/img/surfsmart.dk.png" alt="SurfSmart.dk">
                            <div>
                                <a href="https://www.surfsmart.dk/" target="_blank" rel="noopener">SurfSmart.dk</a>
                                <small class="d-block text-muted">2011-202x</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Additional styles for timeline projects on Life page */
    .timeline-projects {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
    }

    .timeline-project {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: rgba(46, 152, 27, 0.05);
        border-radius: 8px;
        border: 1px solid transparent;
        transition: all 0.2s ease;
    }

    .timeline-project:hover {
        background: rgba(46, 152, 27, 0.1);
        border-color: var(--primary-green);
    }

    .timeline-project img {
        border-radius: 8px;
        padding: 5px;
        height: 80px;
        width: auto;
        flex-shrink: 0;
    }

    .timeline-project a {
        color: var(--primary-green);
        text-decoration: none;
        font-weight: 600;
    }

    .timeline-project a:hover {
        text-decoration: underline;
    }

    .timeline-item-party .timeline-content {
        text-align: center;
        background: linear-gradient(135deg, var(--card-bg) 0%, rgba(46, 152, 27) 100%);
    }

    .timeline-content ul {
        padding-left: 1.5rem;
        color: var(--light-text);
    }

    .timeline-content ul li {
        padding: 0.25rem 0;
    }

    @media (max-width: 768px) {
        .timeline-project {
            gap: 0.55rem;
            padding: 0.55rem;
        }

        .timeline-project img {
            height: 40px;
        }
    }
</style>

<!-- Quote Section -->
<div class="life-page py-5">
    <div class="container">
        <section class="quote-section mt-5 pt-4 pb-5 text-center">
            <div class="post-card">
                <blockquote class="blockquote mb-0">
                    <p class="h4 mb-4">"Life is sharing and helping!"</p>
                    <footer class="blockquote-footer text-muted">
                        Michael Bay Sørensen
                    </footer>
                </blockquote>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
