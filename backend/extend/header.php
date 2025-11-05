<?php

// Database connection
include '../../config/database.php';

// Start Session
session_start();


// Condition for block unauthorized users     <<<  If some isn't login. It will redirect in login page >>>
if(!isset($_SESSION['author_id'])){
    header('location: ../../auth/login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pookie Sanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../backend_assets/css/style.css">

      <!-- Temes Fav Icon -->
    <link rel="shortcut icon" href="../../public/assets/images/CPOOKIE SANDA .png" type="image/x-icon">

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
                    <!-- <i class="fas fa-gem"></i>
                    <img  class="fas fa-gem"> -->
                    <a href="../home/home.php"><img style="width: 40px;" src="../../public/assets/images/CPOOKIE SANDA .png" alt=""></a>
                    <a style="text-decoration: none; color:#FF2499;" href="../home/home.php">Pookie Sanda</a>
                </div>
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-title">MAIN</div>
                    <a href="../../index.php" class="nav-link">
                        <i class="fas fa-eye"></i>
                        <span>View Site</span>
                    </a>
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

        <!-- Header End -->