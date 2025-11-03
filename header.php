<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="logo-aurora">mbsTECH.dk</span>
                <?php endif; ?>
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-middle"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu' => 'Main',
                    'container' => false,
                    'menu_class' => 'navbar-nav ms-auto',
                    'walker' => new Bootstrap_Nav_Walker(),
                    'fallback_cb' => function() {
                        echo '<ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">Home</a></li>
                        </ul>';
                    }
                ));
                ?>

				<div class="d-flex ms-3 dark-bg">
                    <?php if (is_user_logged_in()) : ?>
                        <a href="<?php echo esc_url(admin_url()); ?>" class="btn btn-secondary btn-custom-color btn-sm me-2">Dashboard</a>
                        <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>" class="btn btn-primary btn-sm">Logout</a>
                    <?php else : ?>
						<a href="#" id="connect-link" class="btn btn-secondary btn-custom-color btn-sm me-2" rel="nofollow" aria-describedby="connect-popover" role="button">Connect</a>
                        <a href="https://mbstech.dk/Skills/" class="btn btn-primary btn-sm">View my Skills</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var connectLink = document.getElementById('connect-link');
	if (!connectLink || typeof window.bootstrap === 'undefined' || !window.bootstrap.Popover) {
		return;
	}

	var emailLocalPart = 'michael';
	var emailDomain = 'mbstech.dk';
	var emailAddress = emailLocalPart + '@' + emailDomain;

	var popover = new window.bootstrap.Popover(connectLink, {
		trigger: 'click',
		placement: 'bottom',
		container: 'body',
		customClass: 'connect-popover',
		html: true,
		sanitize: false,
		content: '<div class="d-flex align-items-center gap-2" id="connect-popover">' +
			'<code class="px-1">' + emailAddress + '</code>' +
			'<button type="button" class="btn btn-sm btn-primary" id="copy-email-btn" aria-label="Copy email">Copy</button>' +
		'</div>'
	});

	connectLink.addEventListener('click', function (e) {
		e.preventDefault();
	});

	connectLink.addEventListener('shown.bs.popover', function () {
		var copyBtn = document.getElementById('copy-email-btn');
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
</header>

<main id="main" class="site-main">
