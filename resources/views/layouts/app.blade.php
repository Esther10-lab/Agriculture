<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AgriConnect HUB') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        :root {
            --color-primary: #2A5D3C;
            --color-primary-light: #3A7D4C;
            --color-primary-dark: #1A3D2C;
            --color-secondary: #8B5A2B;
            --color-accent: #F2C94C;
            --color-accent-hover: #E5BB3F;
            --color-success: #4CAF50;
            --color-warning: #FF9800;
            --color-error: #F44336;
            --color-text-dark: #333333;
            --color-text-light: #FFFFFF;
            --color-text-muted: #6C757D;
            --color-bg-light: #F8F9FA;
            --font-family: 'Inter', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family);
            color: var(--color-text-dark);
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header Styles */
        .header {
            width: 100%;
            background-color: #FFFFFF;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-primary);
        }

        .logo svg {
            margin-right: 0.5rem;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            margin: 0 1rem;
            position: relative;
        }

        .nav-link {
            color: var(--color-text-dark);
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--color-primary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: var(--color-primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }

        .nav-right {
            display: flex;
            align-items: center;
        }

        .search-cart {
            display: flex;
            align-items: center;
            margin-right: 1.5rem;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            margin-left: 1rem;
            transition: transform 0.3s ease;
        }

        .icon-btn:hover {
            transform: translateY(-2px);
        }

        .contact-btn {
            display: flex;
            align-items: center;
            background-color: var(--color-accent);
            color: var(--color-text-dark);
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .contact-btn:hover {
            background-color: var(--color-accent-hover);
            transform: translateY(-2px);
        }

        .contact-btn svg {
            margin-right: 0.5rem;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.pexels.com/photos/440731/pexels-photo-440731.jpeg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 5rem;
        }

        .hero-content {
            color: var(--color-text-light);
            max-width: 700px;
        }

        .hero-subtitle {
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            line-height: 1.1;
            position: relative;
        }

        .hero-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: var(--color-accent);
            bottom: -0.75rem;
            left: 0;
        }

        .hero-description {
            font-size: 1.125rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            font-weight: 300;
        }

        .cta-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .cta-btn {
            padding: 0.875rem 2rem;
            border-radius: 4px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .cta-btn.primary {
            background-color: var(--color-accent);
            color: var(--color-text-dark);
        }

        .cta-btn.secondary {
            background-color: transparent;
            color: var(--color-text-light);
            border: 2px solid var(--color-accent);
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-btn.primary:hover {
            background-color: var(--color-accent-hover);
        }

        .cta-btn.secondary:hover {
            background-color: rgba(242, 201, 76, 0.1);
        }

        /* Decorative elements */
        .hero-decoration {
            position: absolute;
            top: 50%;
            right: 15%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .decoration-item {
            width: 30px;
            height: 30px;
            margin: 5px 0;
            background-color: var(--color-accent);
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            transform: rotate(45deg);
            opacity: 0.8;
            animation: float 4s ease-in-out infinite;
        }

        .decoration-item:nth-child(1) {
            animation-delay: 0.5s;
        }

        .decoration-item:nth-child(2) {
            animation-delay: 1s;
            width: 40px;
            height: 40px;
        }

        .decoration-item:nth-child(3) {
            animation-delay: 1.5s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(45deg);
            }
            50% {
                transform: translateY(-15px) rotate(45deg);
            }
            100% {
                transform: translateY(0) rotate(45deg);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .nav-menu {
                position: fixed;
                top: 5rem;
                left: -100%;
                flex-direction: column;
                background-color: #FFFFFF;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
                padding: 2rem 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-item {
                margin: 1.5rem 0;
            }

            .hamburger {
                display: block;
                cursor: pointer;
            }

            .hero-decoration {
                display: none;
            }
        }

        @media (min-width: 769px) {
            .hamburger {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L4.5 9.5V16.5L7.5 19.5H16.5L19.5 16.5V9.5L12 2Z" fill="#2A5D3C"/>
                        <path d="M12 5L8 9V14L10 16H14L16 14V9L12 5Z" fill="#F2C94C"/>
                    </svg>
                    AgriConnect HUB
                </a>
                
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/products" class="nav-link {{ request()->is('products') ? 'active' : '' }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="/projects" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">Projects</a>
                    </li>
                </ul>
                
                <div class="nav-right">
                    <div class="search-cart">
                        <button class="icon-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 21L16.65 16.65" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="icon-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    
                    <a href="tel:5430645469" class="contact-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9845 21.5573 21.2136 21.3521 21.4019C21.1468 21.5902 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0974 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77383 17.3147 6.72534 15.2662 5.19002 12.85C3.49998 10.2412 2.44824 7.27099 2.12002 4.18C2.09499 3.90347 2.12743 3.62476 2.21586 3.36163C2.30428 3.09849 2.44635 2.85669 2.63386 2.65163C2.82138 2.44656 3.04953 2.28271 3.30372 2.17052C3.55791 2.05833 3.83279 2.00026 4.11002 2H7.11002C7.59494 1.99522 8.06721 2.16708 8.43961 2.48353C8.81201 2.79999 9.06209 3.23945 9.14002 3.72C9.28474 4.68007 9.54293 5.62273 9.91002 6.53C10.0484 6.88792 10.0811 7.27691 10.0046 7.65088C9.92813 8.02485 9.74607 8.36811 9.48002 8.64L8.22002 9.9C9.6663 12.4136 11.7264 14.4737 14.24 15.92L15.5 14.66C15.7719 14.3939 16.1152 14.2119 16.4891 14.1354C16.8631 14.0589 17.2521 14.0916 17.61 14.23C18.5173 14.597 19.4599 14.8552 20.42 15C20.9055 15.0779 21.3449 15.328 21.6614 15.7004C21.9778 16.0728 22.1497 16.545 22.15 17.03L22 16.92Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Call Anytime
                        <span class="phone-number">5430645469</span>
                    </a>
                    
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="/" class="logo">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L4.5 9.5V16.5L7.5 19.5H16.5L19.5 16.5V9.5L12 2Z" fill="#2A5D3C"/>
                            <path d="M12 5L8 9V14L10 16H14L16 14V9L12 5Z" fill="#F2C94C"/>
                        </svg>
                        AgriConnect HUB
                    </a>
                    <p>Empowering Rural Dreams, Nurturing Agricultural Growth</p>
                </div>
                
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/products">Products</a></li>
                            <li><a href="/projects">Projects</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Contact</h3>
                        <p>123 Farming Lane,<br>Rural District, RD 5430<br>info@agriconnect.com</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 9H2V21H6V9Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 11.37C16.1234 12.2022 15.9813 13.0522 15.5938 13.799C15.2063 14.5458 14.5931 15.1514 13.8416 15.5297C13.0901 15.9079 12.2384 16.0396 11.4078 15.9059C10.5771 15.7723 9.80976 15.3801 9.21484 14.7852C8.61991 14.1902 8.22773 13.4229 8.09406 12.5922C7.9604 11.7615 8.09206 10.9099 8.47032 10.1584C8.84858 9.40685 9.45418 8.79374 10.201 8.40624C10.9478 8.01874 11.7978 7.87658 12.63 8C13.4789 8.12588 14.2648 8.52146 14.8717 9.12831C15.4785 9.73515 15.8741 10.5211 16 11.37Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.5 6.5H17.51" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 AgriConnect HUB. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Navigation Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            
            hamburger?.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });
            
            // Close mobile menu when clicking on a link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    navMenu.classList.remove('active');
                });
            });
            
            // Header scroll effect
            const header = document.querySelector('.header');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
                } else {
                    header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
                }
            });
        });
    </script>
    <style>
        /* Additional styles for footer */
        .footer {
            background-color: var(--color-primary);
            color: var(--color-text-light);
            padding: 4rem 0 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 3rem;
        }

        .footer-logo {
            flex: 0 0 100%;
            max-width: 350px;
            margin-bottom: 2rem;
        }

        .footer-logo p {
            margin-top: 1rem;
            font-weight: 300;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            flex: 1;
            gap: 2rem;
        }

        .footer-column {
            flex: 0 0 calc(33.333% - 2rem);
            min-width: 200px;
        }

        .footer-column h3 {
            margin-bottom: 1.5rem;
            font-size: 1.25rem;
            position: relative;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 3px;
            background-color: var(--color-accent);
            bottom: -0.5rem;
            left: 0;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.75rem;
        }

        .footer-column ul li a {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .footer-column ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            background-color: var(--color-accent);
            bottom: -2px;
            left: 0;
            transition: width 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: var(--color-accent);
        }

        .footer-column ul li a:hover::after {
            width: 100%;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background-color: var(--color-accent);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            text-align: center;
            font-weight: 300;
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
            }

            .footer-links {
                flex-direction: column;
            }

            .footer-column {
                margin-bottom: 2rem;
            }
        }
    </style>
</body>
</html>