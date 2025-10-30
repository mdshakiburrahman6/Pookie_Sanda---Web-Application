<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pookie Sanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../backend_assets/css/style.css">
</head>
<body>
    <!-- Background Shapes -->
    <div class="bg-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Dashboard Layout -->
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="brand">
                    <i class="fas fa-gem"></i>
                    <span>Pookie Sanda</span>
                </div>
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-title">MAIN</div>
                    <a href="#" class="nav-link active">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <span>Analytics</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                        <span class="badge">24</span>
                    </a>
                </div>

                <div class="nav-section">
                    <div class="nav-title">CONTENT</div>
                    <a href="#" class="nav-link">
                        <i class="fas fa-file-alt"></i>
                        <span>Posts</span>
                        <span class="badge">12</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-images"></i>
                        <span>Media</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-comments"></i>
                        <span>Comments</span>
                        <span class="badge">8</span>
                    </a>
                </div>

                <div class="nav-section">
                    <div class="nav-title">SYSTEM</div>
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-shield-alt"></i>
                        <span>Security</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-database"></i>
                        <span>Backups</span>
                    </a>
                </div>
            </nav>

            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="avatar">
                        <img src="https://ui-avatars.com/api/?name=Admin+User&background=ff1493&color=fff" alt="Admin">
                    </div>
                    <div class="user-info">
                        <div class="name">Admin User</div>
                        <div class="role">Administrator</div>
                    </div>
                </div>
                <a href="../logout/logout.php" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Header -->
            <header class="top-header">
                <div class="header-content">
                    <div class="header-left">
                        <div class="page-info">
                            <h1 class="page-title">Dashboard</h1>
                            <div class="breadcrumb">
                                <span>Home</span> / <span class="active">Dashboard</span>
                            </div>
                        </div>
                        <div class="search-container">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" class="search-input" placeholder="Search...">
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="header-actions">
                            <button class="header-btn notification-btn">
                                <i class="fas fa-bell"></i>
                                <span class="notification-badge">3</span>
                            </button>
                            <button class="header-btn message-btn">
                                <i class="fas fa-envelope"></i>
                                <span class="notification-badge">5</span>
                            </button>
                            <div class="user-menu">
                                <button class="user-menu-btn">
                                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=ff1493&color=fff" alt="Admin" class="user-avatar">
                                    <span class="user-name">Admin User</span>
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Stats Cards -->
            <section class="stats-section">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon users">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <h3>2,847</h3>
                                <p>Total Users</p>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>12%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon revenue">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="stat-info">
                                <h3>$24,500</h3>
                                <p>Total Revenue</p>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>8%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon orders">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="stat-info">
                                <h3>1,234</h3>
                                <p>New Orders</p>
                            </div>
                            <div class="stat-trend down">
                                <i class="fas fa-arrow-down"></i>
                                <span>3%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon growth">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="stat-info">
                                <h3>45.2%</h3>
                                <p>Growth Rate</p>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Charts and Analytics -->
            <section class="analytics-section">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="chart-card">
                            <div class="card-header">
                                <h3>Revenue Analytics</h3>
                                <div class="chart-controls">
                                    <select class="form-select">
                                        <option>Last 7 days</option>
                                        <option>Last 30 days</option>
                                        <option>Last 90 days</option>
                                    </select>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="revenueChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="chart-card">
                            <div class="card-header">
                                <h3>Traffic Sources</h3>
                            </div>
                            <div class="chart-container">
                                <canvas id="trafficChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recent Activity & Users -->
            <section class="activity-section">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="activity-card">
                            <div class="card-header">
                                <h3>Recent Activity</h3>
                                <a href="#" class="view-all">View All</a>
                            </div>
                            <div class="activity-list">
                                <div class="activity-item">
                                    <div class="activity-avatar">
                                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=ff69b4&color=fff" alt="User">
                                    </div>
                                    <div class="activity-content">
                                        <p><strong>John Doe</strong> created a new post</p>
                                        <span class="activity-time">2 minutes ago</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-avatar">
                                        <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=8338ec&color=fff" alt="User">
                                    </div>
                                    <div class="activity-content">
                                        <p><strong>Jane Smith</strong> updated profile</p>
                                        <span class="activity-time">15 minutes ago</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-avatar">
                                        <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=3a86ff&color=fff" alt="User">
                                    </div>
                                    <div class="activity-content">
                                        <p><strong>Mike Johnson</strong> made a purchase</p>
                                        <span class="activity-time">1 hour ago</span>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <div class="activity-avatar">
                                        <img src="https://ui-avatars.com/api/?name=Sarah+Wilson&background=ff1493&color=fff" alt="User">
                                    </div>
                                    <div class="activity-content">
                                        <p><strong>Sarah Wilson</strong> commented on a post</p>
                                        <span class="activity-time">2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="users-card">
                            <div class="card-header">
                                <h3>Recent Users</h3>
                                <a href="#" class="view-all">View All</a>
                            </div>
                            <div class="users-list">
                                <div class="user-item">
                                    <div class="user-avatar">
                                        <img src="https://ui-avatars.com/api/?name=Alex+Brown&background=ff69b4&color=fff" alt="User">
                                    </div>
                                    <div class="user-info">
                                        <h5>Alex Brown</h5>
                                        <p>alex@example.com</p>
                                    </div>
                                    <div class="user-status online"></div>
                                </div>
                                <div class="user-item">
                                    <div class="user-avatar">
                                        <img src="https://ui-avatars.com/api/?name=Lisa+Taylor&background=8338ec&color=fff" alt="User">
                                    </div>
                                    <div class="user-info">
                                        <h5>Lisa Taylor</h5>
                                        <p>lisa@example.com</p>
                                    </div>
                                    <div class="user-status away"></div>
                                </div>
                                <div class="user-item">
                                    <div class="user-avatar">
                                        <img src="https://ui-avatars.com/api/?name=Tom+Wilson&background=3a86ff&color=fff" alt="User">
                                    </div>
                                    <div class="user-info">
                                        <h5>Tom Wilson</h5>
                                        <p>tom@example.com</p>
                                    </div>
                                    <div class="user-status offline"></div>
                                </div>
                                <div class="user-item">
                                    <div class="user-avatar">
                                        <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=ff1493&color=fff" alt="User">
                                    </div>
                                    <div class="user-info">
                                        <h5>Emma Davis</h5>
                                        <p>emma@example.com</p>
                                    </div>
                                    <div class="user-status online"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quick Stats -->
            <section class="quick-stats-section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="quick-stat">
                            <div class="quick-stat-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="quick-stat-info">
                                <h4>12.5K</h4>
                                <p>Page Views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="quick-stat">
                            <div class="quick-stat-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="quick-stat-info">
                                <h4>3m 24s</h4>
                                <p>Avg. Session</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="quick-stat">
                            <div class="quick-stat-icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <div class="quick-stat-info">
                                <h4>68%</h4>
                                <p>Bounce Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../backend_assets/js/index.js"></script>
</body>
</html>