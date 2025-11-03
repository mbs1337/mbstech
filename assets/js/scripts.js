/**
 * mbsTECH Theme JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Initialize Tab functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanes = document.querySelectorAll('.tab-pane');

    if (tabButtons.length && tabPanes.length) {
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetTab = this.getAttribute('data-tab');

                // Remove active class from all buttons and panes
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanes.forEach(pane => pane.classList.remove('active'));

                // Add active class to clicked button and corresponding pane
                this.classList.add('active');
                const targetPane = document.getElementById(targetTab);
                if (targetPane) {
                    targetPane.classList.add('active');
                }
            });
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href*="#"]:not([href="#"])').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = document.querySelector(this.hash);
                if (target) {
                    e.preventDefault();
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.site-header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
    });

    // Staggered animation for mobile menu
    document.addEventListener('show.bs.collapse', function(e) {
        if (e.target.classList.contains('navbar-collapse')) {
            // Reset nav items and buttons to hidden state before menu opens
            const navItems = e.target.querySelectorAll('.navbar-nav > .nav-item');
            const buttons = e.target.querySelectorAll('.d-flex .btn');

            navItems.forEach((item) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(-15px)';
            });

            buttons.forEach((btn) => {
                btn.style.opacity = '0';
                btn.style.transform = 'translateY(-15px)';
            });
        }
    });

    document.addEventListener('shown.bs.collapse', function(e) {
        if (e.target.classList.contains('navbar-collapse')) {
            // Trigger staggered animation after menu is fully shown
            const navItems = e.target.querySelectorAll('.navbar-nav > .nav-item');
            const buttons = e.target.querySelectorAll('.d-flex .btn');

            // Animate nav items first
            navItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 60 + (index * 40));
            });

            // Animate buttons after nav items
            const navItemsCount = navItems.length;
            buttons.forEach((btn, index) => {
                setTimeout(() => {
                    btn.style.opacity = '1';
                    btn.style.transform = 'translateY(0)';
                }, 60 + (navItemsCount * 40) + (index * 40));
            });
        }
    });

    // Add animation classes on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.post-card, .skill-item').forEach(el => {
        observer.observe(el);
    });

    // Close mobile menu on non-dropdown link click
    document.querySelectorAll('.navbar-nav a:not(.dropdown-toggle)').forEach(function(link) {
        link.addEventListener('click', function() {
            if (window.innerWidth < 992) {
                var navCollapse = document.querySelector('.navbar-collapse');
                if (navCollapse && navCollapse.classList.contains('show')) {
                    var bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            }
        });
    });

    // Mobile dropdown toggle - prevent default and toggle dropdown
    document.querySelectorAll('.navbar-nav .dropdown-toggle').forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                e.stopPropagation();

                var parent = this.closest('.nav-item');
                var wasOpen = parent.classList.contains('show');

                // Close all other dropdowns
                document.querySelectorAll('.navbar-nav .nav-item.dropdown').forEach(function(item) {
                    item.classList.remove('show');
                });

                // Toggle current dropdown
                if (!wasOpen) {
                    parent.classList.add('show');
                }
            }
        });
    });

    // Tech Swiper functionality with touch support
    const techSwiper = document.querySelector('.tech-swiper');
    if (techSwiper) {
        const slides = techSwiper.querySelectorAll('.swiper-slide');
        const dotsContainer = document.querySelector('.swiper-dots');
        const prevBtn = document.querySelector('.swiper-prev');
        const nextBtn = document.querySelector('.swiper-next');
        let currentSlide = 0;
        let touchStartX = 0;
        let touchEndX = 0;

        // Create dots if container exists
        if (dotsContainer) {
            slides.forEach((_, index) => {
                const dot = document.createElement('div');
                dot.className = 'swiper-dot' + (index === 0 ? ' active' : '');
                dot.addEventListener('click', () => showSlide(index));
                dotsContainer.appendChild(dot);
            });
        }

        const dots = document.querySelectorAll('.swiper-dot');

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].classList.add('active');
            if (dots[index]) {
                dots[index].classList.add('active');
            }
            currentSlide = index;
        }

        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }

        // Button navigation (if buttons exist)
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }
        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }

        // Touch/swipe support
        techSwiper.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        techSwiper.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swiped left - go to next
                    nextSlide();
                } else {
                    // Swiped right - go to previous
                    prevSlide();
                }
            }
        }

        // Auto-advance slides every 5 seconds
        let autoplayInterval = setInterval(nextSlide, 5000);

        // Stop autoplay on user interaction
        const swiperContainer = document.querySelector('.tech-swiper-container');
        if (swiperContainer) {
            swiperContainer.addEventListener('mouseenter', () => {
                clearInterval(autoplayInterval);
            });

            swiperContainer.addEventListener('mouseleave', () => {
                autoplayInterval = setInterval(nextSlide, 5000);
            });
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });
    }

    // Blog Posts Mobile Swiper (only on mobile)
    function initBlogSwiper() {
        if (window.innerWidth > 768) return; // Only on mobile

        const container = document.querySelector('.blog-posts-container');
        const row = document.querySelector('.blog-posts-row');
        const slides = document.querySelectorAll('.blog-post-slide');
        const dotsContainer = document.querySelector('.blog-swiper-dots');

        if (!container || !row || slides.length === 0) return;

        let currentSlide = 0;
        let touchStartX = 0;
        let touchEndX = 0;

        // Create dots
        dotsContainer.innerHTML = '';
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.className = 'blog-swiper-dot' + (index === 0 ? ' active' : '');
            dot.addEventListener('click', () => showSlide(index));
            dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll('.blog-swiper-dot');

        function showSlide(index) {
            const slideWidth = slides[0].offsetWidth;
            row.style.transform = `translateX(-${index * slideWidth}px)`;

            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');

            currentSlide = index;
        }

        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }

        // Touch/swipe support
        row.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        row.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        }

        // Recalculate on resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth > 768) {
                    row.style.transform = '';
                    dotsContainer.innerHTML = '';
                } else {
                    showSlide(currentSlide);
                }
            }, 250);
        });
    }

    initBlogSwiper();

});
