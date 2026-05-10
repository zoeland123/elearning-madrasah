<style>
    /* Navbar Styling */
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transition: all 0.3s ease;
        padding: 0;
    }
    
    .header.scrolled {
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
    }
    
    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        max-width: 1320px;
        margin: 0 auto;
    }
    
    .logo-navbar {
        display: flex;
        align-items: center;
        text-decoration: none;
        gap: 12px;
        flex-shrink: 0;
        margin-right: 40px;
    }
    
    .logo-navbar img {
        width: 55px;
        height: 55px;
        object-fit: contain;
    }
    
    .logo-text {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
        white-space: nowrap;
    }
    
    .logo-title {
        font-size: 20px;
        font-weight: 800;
        color: #2d5016;
        margin: 0;
        white-space: nowrap;
    }
    
    .logo-subtitle {
        font-size: 11px;
        color: #5a8c2e;
        font-weight: 600;
        margin: 0;
        white-space: nowrap;
    }
    
    .navbar {
        display: flex;
        align-items: center;
        flex: 1;
        justify-content: center;
        margin: 0 30px;
    }
    
    .navbar-list {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 8px;
        align-items: center;
    }
    
    .navbar-item {
        margin: 0;
    }
    
    .navbar-link {
        display: block;
        padding: 10px 18px;
        color: #333;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        border-radius: 50px;
        transition: all 0.3s ease;
        position: relative;
        white-space: nowrap;
    }
    
    .navbar-link:hover,
    .navbar-link.active {
        color: #2d5016;
        background: rgba(45, 80, 22, 0.08);
    }
    
    .navbar-link::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: #ffd700;
        border-radius: 10px;
        transition: width 0.3s ease;
    }
    
    .navbar-link:hover::after,
    .navbar-link.active::after {
        width: 50%;
    }
    
    .header-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-shrink: 0;
    }
    
    .btn-login {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 24px;
        background: linear-gradient(135deg, #2d5016, #5a8c2e);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        white-space: nowrap;
    }
    
    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(45, 80, 22, 0.3);
        color: white;
    }
    
    .btn-login ion-icon {
        font-size: 18px;
    }
    
    .user-dropdown {
        position: relative;
    }
    
    .user-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 9px 18px;
        background: #f8f9fa;
        border: 2px solid #e0e0e0;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        color: #333;
        font-size: 14px;
        white-space: nowrap;
    }
    
    .user-btn:hover {
        border-color: #2d5016;
        background: rgba(45, 80, 22, 0.05);
    }
    
    .user-btn ion-icon {
        font-size: 22px;
        color: #2d5016;
    }
    
    .user-btn span {
        max-width: 120px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .dropdown-menu-custom {
        position: absolute;
        top: calc(100% + 10px);
        right: 0;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        min-width: 200px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    
    .user-dropdown:hover .dropdown-menu-custom {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .dropdown-item-custom {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 18px;
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 600;
        font-size: 14px;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .dropdown-item-custom:last-child {
        border-bottom: none;
    }
    
    .dropdown-item-custom:hover {
        background: rgba(45, 80, 22, 0.05);
        color: #2d5016;
        padding-left: 23px;
    }
    
    .dropdown-item-custom ion-icon {
        font-size: 20px;
        color: #2d5016;
    }
    
    .nav-toggle {
        display: none;
        background: none;
        border: none;
        font-size: 28px;
        color: #2d5016;
        cursor: pointer;
        padding: 5px;
    }
    
    .nav-close {
        display: none;
    }
    
    /* Mobile Menu */
    @media (max-width: 992px) {
        .navbar {
            position: fixed;
            top: 0;
            right: -100%;
            width: 300px;
            height: 100vh;
            background: white;
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.2);
            padding: 80px 30px 30px;
            transition: right 0.4s ease;
            flex-direction: column;
            align-items: flex-start;
            overflow-y: auto;
            margin: 0;
            justify-content: flex-start;
        }
        
        .navbar.active {
            right: 0;
        }
        
        .navbar-list {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }
        
        .navbar-link {
            width: 100%;
            padding: 15px 20px;
        }
        
        .nav-toggle {
            display: block;
        }
        
        .nav-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 32px;
            color: #2d5016;
            cursor: pointer;
            display: block;
        }
        
        .overlay-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }
        
        .overlay-nav.active {
            opacity: 1;
            visibility: visible;
        }
        
        .logo-title {
            font-size: 18px;
        }
        
        .logo-subtitle {
            font-size: 10px;
        }
        
        .logo-navbar img {
            width: 45px;
            height: 45px;
        }
    }
    
    @media (max-width: 768px) {
        .logo-text {
            display: none;
        }
        
        .user-btn span {
            display: none;
        }
        
        .btn-login span {
            display: none;
        }
        
        .btn-login {
            padding: 11px 16px;
        }
        
        .user-btn {
            padding: 9px 12px;
        }
    }
    
    @media (max-width: 576px) {
        .navbar-container {
            padding: 12px 0;
        }
        
        .header-actions {
            gap: 8px;
        }
    }
</style>

<div class="container">
    <div class="navbar-container">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo-navbar">
            <img src="{{ asset('images/logo-madrasah.svg') }}" alt="Logo MA Ikhlas Beramal">
            <div class="logo-text">
                <h1 class="logo-title">MA Ikhlas Beramal</h1>
                <p class="logo-subtitle">E-Learning System</p>
            </div>
        </a>

        <!-- Navigation Menu -->
        <nav class="navbar" id="navbar">
            <button class="nav-close" id="navClose">
                <ion-icon name="close-outline"></ion-icon>
            </button>
            
            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Beranda
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('about') }}" class="navbar-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        Tentang
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('course') }}" class="navbar-link {{ request()->routeIs('course') ? 'active' : '' }}">
                        Program
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('event') }}" class="navbar-link {{ request()->routeIs('event') ? 'active' : '' }}">
                        Kegiatan
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="{{ route('contact') }}" class="navbar-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Header Actions -->
        <div class="header-actions">
            @guest
                <a href="{{ route('login') }}" class="btn-login">
                    <ion-icon name="log-in-outline"></ion-icon>
                    <span>Login</span>
                </a>
            @else
                <div class="user-dropdown">
                    <button class="user-btn">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <span>{{ Str::limit(Auth::user()->name, 15) }}</span>
                    </button>
                    <div class="dropdown-menu-custom">
                        <a href="{{ url('/home') }}" class="dropdown-item-custom">
                            <ion-icon name="speedometer-outline"></ion-icon>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item-custom"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <ion-icon name="log-out-outline"></ion-icon>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest

            <button class="nav-toggle" id="navToggle">
                <ion-icon name="menu-outline"></ion-icon>
            </button>
        </div>
    </div>
</div>

<div class="overlay-nav" id="overlay"></div>

<script>
    // Mobile Menu Toggle
    const navToggle = document.getElementById('navToggle');
    const navClose = document.getElementById('navClose');
    const navbar = document.getElementById('navbar');
    const overlay = document.getElementById('overlay');
    
    navToggle?.addEventListener('click', () => {
        navbar.classList.add('active');
        overlay.classList.add('active');
    });
    
    navClose?.addEventListener('click', () => {
        navbar.classList.remove('active');
        overlay.classList.remove('active');
    });
    
    overlay?.addEventListener('click', () => {
        navbar.classList.remove('active');
        overlay.classList.remove('active');
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        if (window.scrollY > 50) {
            header?.classList.add('scrolled');
        } else {
            header?.classList.remove('scrolled');
        }
    });
</script>
