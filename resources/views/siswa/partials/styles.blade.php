<link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/app-dark.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/iconly.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, * { font-family: 'Poppins', sans-serif !important; }

    /* Sidebar Siswa - Hijau Madrasah */
    #sidebar .sidebar-wrapper {
        background: linear-gradient(180deg, #14532d 0%, #166534 50%, #15803d 100%) !important;
        box-shadow: 4px 0 20px rgba(20,83,45,0.3);
    }

    #sidebar .sidebar-header {
        background: rgba(0,0,0,0.2) !important;
        border-bottom: 1px solid rgba(255,255,255,0.1) !important;
        padding: 20px !important;
    }

    #sidebar .sidebar-title {
        color: #fde047 !important;
        font-size: 10px !important;
        font-weight: 700 !important;
        letter-spacing: 2px !important;
        text-transform: uppercase !important;
        padding: 15px 20px 5px !important;
    }

    #sidebar .sidebar-link {
        color: rgba(255,255,255,0.75) !important;
        border-radius: 10px !important;
        margin: 2px 10px !important;
        padding: 10px 15px !important;
        transition: all 0.3s ease !important;
        font-size: 14px !important;
        font-weight: 500 !important;
    }

    #sidebar .sidebar-link:hover {
        background: rgba(255,255,255,0.1) !important;
        color: #ffffff !important;
        transform: translateX(5px) !important;
    }

    #sidebar .sidebar-item.active > .sidebar-link {
        background: linear-gradient(135deg, #fde047, #facc15) !important;
        color: #14532d !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 15px rgba(253,224,71,0.4) !important;
    }

    #sidebar .sidebar-link i {
        color: #fde047 !important;
        font-size: 16px !important;
    }

    #sidebar .sidebar-item.active > .sidebar-link i {
        color: #14532d !important;
    }

    /* Navbar/Header */
    .navbar-top {
        background: #ffffff !important;
        box-shadow: 0 2px 20px rgba(0,0,0,0.08) !important;
        border-bottom: 2px solid #f0fdf4 !important;
    }

    /* Cards */
    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06) !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
    }

    .card:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 8px 30px rgba(0,0,0,0.1) !important;
    }

    .card-header {
        background: transparent !important;
        border-bottom: 1px solid rgba(0,0,0,0.06) !important;
        padding: 20px 25px !important;
        font-weight: 600 !important;
    }

    /* Stats icon */
    .stats-icon {
        width: 55px !important;
        height: 55px !important;
        border-radius: 14px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 22px !important;
    }

    /* Page heading */
    .page-heading {
        padding: 25px 30px 10px !important;
    }

    .page-heading h3 {
        font-weight: 700 !important;
        color: #14532d !important;
        font-size: 24px !important;
    }

    /* Buttons */
    .btn-primary {
        background: linear-gradient(135deg, #14532d, #15803d) !important;
        border: none !important;
        border-radius: 10px !important;
        font-weight: 600 !important;
        padding: 10px 20px !important;
        transition: all 0.3s ease !important;
    }

    .btn-primary:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(20,83,45,0.4) !important;
    }

    /* Table */
    .table { border-radius: 12px !important; overflow: hidden !important; }
    .table thead th {
        background: #f0fdf4 !important;
        color: #14532d !important;
        font-weight: 600 !important;
        border: none !important;
        padding: 14px 16px !important;
    }
    .table tbody tr:hover { background: #f0fdf4 !important; }

    /* Badge */
    .badge { border-radius: 8px !important; font-weight: 600 !important; padding: 5px 10px !important; }

    /* Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: #f1f5f9; }
    ::-webkit-scrollbar-thumb { background: #14532d; border-radius: 3px; }
</style>
