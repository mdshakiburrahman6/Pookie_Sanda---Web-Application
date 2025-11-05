<?php

// Connect Database
include '../../config/database.php';


// Connect header
include '../extend/header.php';


// Querry For users
$users_querry = "SELECT * FROM users";
$users = mysqli_query($db, $users_querry);
$total_users = mysqli_num_rows($users); 

$users_querry_desc = "SELECT * FROM users ORDER BY id DESC LIMIT 5";
$users_desc = mysqli_query($db, $users_querry_desc);


?>

            <!-- Stats Cards -->
            <section class="stats-section">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon users">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <h3> <?= $total_users ?> </h3>
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

<!-- ************************************************************************************************************** -->
                                <!-- Recent Post -->
                                    <?php
                                        $serial = 1;
                                        foreach ($users_desc as $user):
                                            if($user['id'] == $_SESSION['author_id']){
                                                continue;
                                            }
                                    ?>
                                        <div class="activity-item">
                                        <div style="padding-right: 60px;" class="activity-avatar">
                                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=ff69b4&color=fff" alt="User">
                                        </div>
                                        <div class="activity-content">
                                                <p><strong><?= $user['name']; ?> </strong> created a new account</p>
                                                <span class="activity-time">2 minutes ago</span>
                                            </div>
                                        </div>
                                     <?php endforeach; ?>

                                <!-- Recent Post End -->
<!-- ************************************************************************************************************** -->
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

 <!-- ************************************************************************************************************** -->
                                <!-- Recent users -->
                                    <?php
                                        $serial = 1;
                                        foreach ($users_desc as $user):
                                            if($user['id'] == $_SESSION['author_id']){
                                                continue;
                                            }
                                    ?>
                                        <div class="user-item">
                                            <div class="user-avatar" style="padding-right: 60px;">
                                                <img src="https://ui-avatars.com/api/?name=Alex+Brown&background=ff69b4&color=fff" alt="User">
                                            </div>
                                            <div class="user-info">
                                                <h5><?= $user['name'] ?></h5>
                                                <p><?= $user['email'] ?></p>
                                            </div>
                                        <div class="user-status online"></div>
                                        </div>
                                     <?php endforeach; ?>

                                <!-- Recent users End -->
<!-- ************************************************************************************************************** -->    
                                
                                <!-- <div class="user-item">
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
                                </div> -->
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

 