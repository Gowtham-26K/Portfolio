document.addEventListener('DOMContentLoaded', () => {
    // 1. Selector Caching
    const navbar = document.querySelector('.navbar');
    const progressBar = document.querySelector('.scroll-progress-bar');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');
    const themeToggleBtn = document.getElementById('theme-toggle');
    const menuToggle = document.getElementById('navbarNav');

    // 2. Theme Management
    const initTheme = () => {
        const savedTheme = localStorage.getItem('theme') || 'light';
        if (savedTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            const icon = themeToggleBtn?.querySelector('i');
            if (icon) icon.className = 'fas fa-sun';
        }
    };
    initTheme();

    // 3. Scroll Reveal System (Enhanced)
    const revealItems = document.querySelectorAll('.reveal');
    
    // Fallback: If elements are in view on page load, reveal them immediately
    const checkInViewOnLoad = () => {
        revealItems.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
                el.classList.add('active');
            }
        });
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { 
        threshold: 0.05, 
        rootMargin: "0px 0px -20px 0px"
    });

    revealItems.forEach(el => revealObserver.observe(el));
    
    // Run load-time check after a tiny delay to ensure layout is ready
    setTimeout(checkInViewOnLoad, 100);

    // 4. Optimized Unified Scroll Listener
    const handleScroll = () => {
        const scroll = window.scrollY;

        // Navbar Shadow
        if (navbar) navbar.classList.toggle('shadow-sm', scroll > 20);

        // Progress Bar
        if (progressBar) {
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            progressBar.style.width = `${(scroll / height) * 100}%`;
        }

        // ScrollSpy (Active nav highlighting)
        let activeId = 'home';
        sections.forEach(sec => {
            if (scroll >= sec.offsetTop - 250) activeId = sec.getAttribute('id');
        });
        
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === `#${activeId}`);
        });
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // 5. Smooth Scroll & Mobile Menu fix
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
                
                // Hide mobile menu
                if (menuToggle?.classList.contains('show')) {
                    const inst = bootstrap.Collapse.getInstance(menuToggle) || new bootstrap.Collapse(menuToggle);
                    inst.hide();
                }
            }
        });
    });

    // 6. Theme Toggle Logic
    themeToggleBtn?.addEventListener('click', () => {
        const isDark = document.documentElement.hasAttribute('data-theme');
        const icon = themeToggleBtn.querySelector('i');
        
        if (isDark) {
            document.documentElement.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
            if (icon) icon.className = 'fas fa-moon';
        } else {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            if (icon) icon.className = 'fas fa-sun';
        }
    });
});
