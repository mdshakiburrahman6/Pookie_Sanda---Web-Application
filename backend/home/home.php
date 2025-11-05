<?php

// Connect Database
include '../../config/database.php';


// Connect header
include '../extend/header.php';

// 


?>

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


<?php

include '../extend/footer.php';

?>

 