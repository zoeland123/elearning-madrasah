<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<!--custom css link-->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

<!--google font link-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!--preload images-->
<link rel="preload" as="image" href="{{ asset('frontend/assets/images/hero-banner.png') }}">
<link rel="preload" as="image" href="{{ asset('frontend/assets/images/hero-abs-1.png') }}"
    media="min-width(768px)">
<link rel="preload" as="image" href="{{ asset('frontend/assets/images/hero-abs-2.png') }}"
    media="min-width(768px)">
<style>
    /* Reset & Base */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Urbanist', sans-serif;
        overflow-x: hidden;
    }
    
    /* style Dashboard dan logout frontend */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-menu .dropdown-item {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    /* end */

    /* Breadcrumbs Style */
    .breadcrumbs {
        background-color: #f9f9f9;
        padding: 15px 0;
        border-bottom: 1px solid #e1e1e1;
    }

    .breadcrumbs .container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
    }

    .breadcrumbs ol {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .breadcrumbs ol li {
        display: inline-block;
        font-size: 14px;
        color: #333;
    }

    .breadcrumbs ol li+li:before {
        content: "/";
        padding: 0 10px;
        color: #999;
    }

    .breadcrumbs ol li a {
        text-decoration: none;
        color: #0275d8;
    }

    .breadcrumbs ol li a:hover {
        color: #01447e;
    }

    .breadcrumbs h2 {
        font-size: 24px;
        margin: 0;
        color: #333;
    }

    @media (min-width: 768px) {
        .breadcrumbs .container {
            flex-direction: row;
            align-items: center;
        }

        .breadcrumbs ol {
            margin-bottom: 0;
        }
    }

    @media (max-width: 767px) {
        .breadcrumbs ol li {
            font-size: 12px;
        }

        .breadcrumbs h2 {
            font-size: 20px;
        }
    }

    /* end breadcrumbs */
    
    /* Footer Styling */
    footer {
        background: linear-gradient(135deg, #2d5016 0%, #1f3810 100%);
        color: #fff;
        padding: 60px 0 20px;
    }
    
    .footer-top {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .footer-brand .logo {
        display: flex;
        align-items: center;
        text-decoration: none;
        margin-bottom: 20px;
    }
    
    .footer-brand .logo span {
        color: #fff !important;
        font-size: 1.5rem;
    }
    
    .footer-brand .section-text {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .social-list {
        display: flex;
        gap: 15px;
        list-style: none;
        padding: 0;
    }
    
    .social-link {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        transition: all 0.3s ease;
    }
    
    .social-link:hover {
        background: #ffd700;
        color: #2d5016;
        transform: translateY(-3px);
    }
    
    .footer-list {
        list-style: none;
        padding: 0;
    }
    
    .footer-list-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 20px;
    }
    
    .footer-link {
        display: flex;
        align-items: center;
        gap: 10px;
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        padding: 8px 0;
        transition: all 0.3s ease;
    }
    
    .footer-link:hover {
        color: #ffd700;
        padding-left: 10px;
    }
    
    .footer-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 15px;
    }
    
    .footer-item ion-icon {
        color: #ffd700;
        font-size: 20px;
        margin-top: 3px;
    }
    
    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 30px;
        text-align: center;
    }
    
    .copyright {
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }
    
    .copyright-link {
        color: #ffd700;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .copyright-link:hover {
        color: #fff;
    }
    
    @media (max-width: 768px) {
        .footer-top {
            grid-template-columns: 1fr;
            gap: 30px;
        }
    }
</style>
