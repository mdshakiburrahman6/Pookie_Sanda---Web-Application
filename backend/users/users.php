<?php

// Connect Database
include '../../config/database.php';


// Connect header
include '../extend/header.php';

// Querry For users
$users_querry = "SELECT * FROM users";
$users = mysqli_query($db, $users_querry);
$total_users = mysqli_num_rows($users); 

$users_querry_desc = "SELECT * FROM users ORDER BY id DESC";
$users_desc = mysqli_query($db, $users_querry_desc);


?>


            <!-- Stats Cards -->
            <!-- <section class="stats-section">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon users">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <h3><?= $total_users ?></h3>
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
            </section> -->

            <!-- Charts and Analytics -->
            <section style="margin-top: 30px;" class="analytics-section">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="chart-card">
                            <div class="card-header">
                                <h3>Users List</h3>
                            </div>
                            <div class="">
                                <table class="table table-borderless table-dark">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <!-- Users Data -->
                                    
                                    <?php

                                        $serial = 1;

                                        foreach ($users as $user):
                                            if($user['id'] == $_SESSION['author_id']){
                                                continue;
                                            }
                            
                                    ?>
                                        <tr>
                                        <th scope="row"> <?= $serial ++ ?> </th>
                                        <td> <?= $user['id']; ?> </td>
                                        <td> <?= $user['name']; ?> </td>
                                        <td> <?= $user['email']; ?> </td>
                                        </tr>
                                    </tbody>

                                     <?php endforeach; ?>

                                </table>
                                <!-- <canvas id="trafficChart"></canvas> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="stat-icon users">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <h3><?= $total_users ?></h3>
                                <p>Total Users</p>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>12%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>


<?php

include '../extend/footer.php';

?>

 