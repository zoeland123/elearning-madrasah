<link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/app-dark.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/compiled/css/iconly.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, * { font-family: 'Poppins', sans-serif !important; }

    /* Sidebar Admin - Hijau Madrasah Premium */
    #sidebar .sidebar-wrapper {
        background: linear-gradient(180deg, #0f2007 0%, #1a3a0a 40%, #2d5016 100%) !important;
        box-shadow: 4px 0 25px rgba(15,32,7,0.5);
    }

    #sidebar .sidebar-header {
        background: rgba(0,0,0,0.3) !important;
        border-bottom: 1px solid rgba(255,215,0,0.2) !important;
        padding: 20px !important;
    }

    #sidebar .sidebar-title {
        color: #ffd700 !important;
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
        background: rgba(255,215,0,0.1) !important;
        color: #ffd700 !important;
        transform: translateX(5px) !important;
    }

    #sidebar .sidebar-item.active > .sidebar-link {
        background: linear-gradient(135deg, #ffd700, #ffb300) !important;
        color: #0f2007 !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 15px rgba(255,215,0,0.4) !important;
    }

    #sidebar .sidebar-link i {
        color: #ffd700 !important;
        font-size: 16px !important;
    }

    #sidebar .sidebar-item.active > .sidebar-link i {
        color: #0f2007 !important;
    }

    #sidebar .submenu-link {
        color: rgba(255,255,255,0.55) !important;
        font-size: 13px !important;
        padding: 8px 15px 8px 45px !important;
        border-radius: 8px !important;
        margin: 1px 10px !important;
        transition: all 0.3s ease !important;
    }

    #sidebar .submenu-link:hover {
        color: #ffd700 !important;
        background: rgba(255,215,0,0.05) !important;
    }

    #sidebar .submenu-item.active .submenu-link {
        color: #ffd700 !important;
        font-weight: 600 !important;
    }

    /* Navbar/Header */
    .navbar-top {
        background: #ffffff !important;
        box-shadow: 0 2px 20px rgba(0,0,0,0.08) !important;
        border-bottom: 2px solid #f5f7f0 !important;
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
        color: #2d5016 !important;
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
        color: #2d5016 !important;
        font-size: 24px !important;
    }

    /* Buttons */
    .btn-primary {
        background: linear-gradient(135deg, #2d5016, #5a8c2e) !important;
        border: none !important;
        border-radius: 10px !important;
        font-weight: 600 !important;
        padding: 10px 20px !important;
        transition: all 0.3s ease !important;
    }

    .btn-primary:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(45,80,22,0.4) !important;
    }

    .btn-success {
        background: linear-gradient(135deg, #059669, #10b981) !important;
        border: none !important;
        border-radius: 10px !important;
        font-weight: 600 !important;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc2626, #ef4444) !important;
        border: none !important;
        border-radius: 10px !important;
        font-weight: 600 !important;
    }

    .btn-warning {
        background: linear-gradient(135deg, #d97706, #f59e0b) !important;
        border: none !important;
        border-radius: 10px !important;
        font-weight: 600 !important;
    }

    /* Table */
    .table { border-radius: 12px !important; overflow: hidden !important; }
    .table thead th {
        background: #f5f7f0 !important;
        color: #2d5016 !important;
        font-weight: 600 !important;
        border: none !important;
        padding: 14px 16px !important;
        font-size: 13px !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
    }
    .table tbody tr { transition: background 0.2s ease !important; }
    .table tbody tr:hover { background: #f5f7f0 !important; }
    .table td { padding: 14px 16px !important; vertical-align: middle !important; }

    /* Badge */
    .badge { border-radius: 8px !important; font-weight: 600 !important; padding: 5px 10px !important; }

    /* Form controls */
    .form-control, .form-select {
        border-radius: 10px !important;
        border: 1px solid #e2e8f0 !important;
        padding: 10px 14px !important;
        font-size: 14px !important;
        transition: all 0.3s ease !important;
    }

    .form-control:focus, .form-select:focus {
        border-color: #2d5016 !important;
        box-shadow: 0 0 0 3px rgba(45,80,22,0.1) !important;
    }

    /* Alert */
    .alert { border-radius: 12px !important; border: none !important; }
    .alert-success { background: #f0fdf4 !important; color: #14532d !important; }
    .alert-danger { background: #fef2f2 !important; color: #991b1b !important; }

    /* ===== GLOBAL PAGE LAYOUT ===== */
    .page-heading {
        padding: 20px 25px 5px !important;
    }
    .page-heading h3 {
        font-weight: 700 !important;
        color: #2d5016 !important;
        font-size: 22px !important;
        margin-bottom: 4px !important;
    }
    .page-content {
        padding: 15px 25px 25px !important;
    }

    /* ===== CARD ===== */
    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 2px 15px rgba(0,0,0,0.06) !important;
    }
    .card-header {
        background: #ffffff !important;
        border-bottom: 1px solid #f0f0f0 !important;
        padding: 16px 20px !important;
        border-radius: 16px 16px 0 0 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
    }
    .card-header h4 {
        font-size: 16px !important;
        font-weight: 700 !important;
        color: #2d5016 !important;
        margin: 0 !important;
    }
    .card-body {
        padding: 20px !important;
        background: #ffffff !important;
        border-radius: 0 0 16px 16px !important;
    }

    /* ===== BUTTONS ===== */
    .btn {
        border-radius: 8px !important;
        font-weight: 600 !important;
        font-size: 13px !important;
        padding: 7px 14px !important;
        border: none !important;
        transition: all 0.2s ease !important;
    }
    .btn:hover { transform: translateY(-1px) !important; }
    .btn-primary {
        background: linear-gradient(135deg, #2d5016, #5a8c2e) !important;
        color: white !important;
    }
    .btn-primary:hover { box-shadow: 0 4px 12px rgba(45,80,22,0.4) !important; color: white !important; }
    .btn-success {
        background: linear-gradient(135deg, #059669, #10b981) !important;
        color: white !important;
    }
    .btn-warning {
        background: linear-gradient(135deg, #d97706, #f59e0b) !important;
        color: white !important;
    }
    .btn-danger {
        background: linear-gradient(135deg, #dc2626, #ef4444) !important;
        color: white !important;
    }
    .btn-secondary {
        background: #f1f5f9 !important;
        color: #64748b !important;
    }
    .btn-sm {
        padding: 5px 10px !important;
        font-size: 12px !important;
    }

    /* ===== TABLE ===== */
    .table {
        border-radius: 10px !important;
        overflow: hidden !important;
        margin-bottom: 0 !important;
    }
    .table thead tr th {
        background: #f5f7f0 !important;
        color: #2d5016 !important;
        font-weight: 700 !important;
        font-size: 12px !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
        border: none !important;
        padding: 12px 14px !important;
        white-space: nowrap !important;
    }
    .table tbody tr td {
        padding: 12px 14px !important;
        vertical-align: middle !important;
        border-color: #f8f9fa !important;
        font-size: 14px !important;
        color: #374151 !important;
        background: #ffffff !important;
    }
    .table tbody tr:hover td {
        background: #f9fafb !important;
    }
    .table-striped tbody tr:nth-of-type(odd) td {
        background: #fafafa !important;
    }

    /* ===== FORM ===== */
    .form-control, .form-select {
        border: 1px solid #e2e8f0 !important;
        border-radius: 10px !important;
        padding: 9px 13px !important;
        font-size: 14px !important;
        background: #f8faff !important;
        color: #1e293b !important;
        transition: all 0.3s !important;
    }
    .form-control:focus, .form-select:focus {
        border-color: #2d5016 !important;
        box-shadow: 0 0 0 3px rgba(45,80,22,0.1) !important;
        background: #ffffff !important;
    }
    .form-label {
        font-size: 12px !important;
        font-weight: 600 !important;
        color: #64748b !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
        margin-bottom: 6px !important;
    }

    /* ===== BADGE ===== */
    .badge {
        border-radius: 6px !important;
        font-weight: 600 !important;
        padding: 4px 10px !important;
        font-size: 11px !important;
    }

    /* ===== ALERT ===== */
    .alert {
        border-radius: 12px !important;
        border: none !important;
        font-size: 14px !important;
    }
    .alert-success { background: #f0fdf4 !important; color: #14532d !important; }
    .alert-danger  { background: #fef2f2 !important; color: #991b1b !important; }
    .alert-warning { background: #fffbeb !important; color: #92400e !important; }

    /* ===== ACTION BUTTONS IN TABLE ===== */
    .action-btns { display: flex; gap: 5px; align-items: center; flex-wrap: nowrap; }

    /* ===== PAGINATION ===== */
    .pagination .page-link {
        border-radius: 8px !important;
        border: 1px solid #e2e8f0 !important;
        color: #2d5016 !important;
        margin: 0 2px !important;
        font-size: 13px !important;
    }
    .pagination .page-item.active .page-link {
        background: #2d5016 !important;
        border-color: #2d5016 !important;
        color: white !important;
    }

    /* ===== NAVBAR ===== */
    .navbar-top {
        background: #ffffff !important;
        box-shadow: 0 1px 10px rgba(0,0,0,0.06) !important;
        border-bottom: 1px solid #f0f0f0 !important;
    }

    /* ===== SCROLLBAR ===== */
    ::-webkit-scrollbar { width: 5px; height: 5px; }
    ::-webkit-scrollbar-track { background: #f1f5f9; }
    ::-webkit-scrollbar-thumb { background: #2d5016; border-radius: 3px; }

    /* ===== FIX DARK MODE OVERRIDE ===== */
    .card, .card-body, .card-header,
    .table td, .table th,
    .form-control, .form-select,
    .modal-content, .modal-body, .modal-header, .modal-footer {
        color: inherit !important;
    }
</style>
