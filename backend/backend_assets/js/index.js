// Dashboard functionality
document.addEventListener('DOMContentLoaded', function() {
    // Sidebar toggle
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('.sidebar');
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
        });
    }

    // Initialize Charts
    initializeCharts();

    // Mobile sidebar handling
    handleMobileSidebar();

    // Add loading animations
    animateDashboardElements();

    // Handle user dropdown
    initializeUserDropdown();

    // Initialize search functionality
    initializeSearch();

    // Initialize real-time updates
    simulateRealTimeUpdates();
});

// Chart initialization
function initializeCharts() {
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart');
    if (revenueCtx) {
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Revenue',
                    data: [12000, 19000, 15000, 25000, 22000, 30000, 28000],
                    borderColor: '#ff1493',
                    backgroundColor: 'rgba(255, 20, 147, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)',
                            callback: function(value) {
                                return '$' + value/1000 + 'k';
                            }
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    }
                }
            }
        });
    }

    // Traffic Chart
    const trafficCtx = document.getElementById('trafficChart');
    if (trafficCtx) {
        new Chart(trafficCtx, {
            type: 'doughnut',
            data: {
                labels: ['Direct', 'Social', 'Referral', 'Organic'],
                datasets: [{
                    data: [35, 25, 20, 20],
                    backgroundColor: [
                        '#ff1493',
                        '#ff69b4',
                        '#8338ec',
                        '#3a86ff'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: 'rgba(255, 255, 255, 0.7)',
                            padding: 20,
                            usePointStyle: true
                        }
                    }
                },
                cutout: '70%'
            }
        });
    }
}

// Mobile sidebar handling
function handleMobileSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    
    function checkScreenSize() {
        if (window.innerWidth <= 992) {
            sidebar.classList.add('mobile-closed');
        } else {
            sidebar.classList.remove('mobile-closed');
        }
    }
    
    // Initial check
    checkScreenSize();
    
    // Check on resize
    window.addEventListener('resize', checkScreenSize);
    
    // Toggle mobile sidebar
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            if (window.innerWidth <= 992) {
                sidebar.classList.toggle('mobile-open');
            }
        });
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 992 && 
            !sidebar.contains(event.target) && 
            !sidebarToggle.contains(event.target)) {
            sidebar.classList.remove('mobile-open');
        }
    });
}

// Animate dashboard elements
function animateDashboardElements() {
    // Animate stat cards
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.6s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100 * index);
    });

    // Animate chart cards
    const chartCards = document.querySelectorAll('.chart-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    chartCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        observer.observe(card);
    });
}

// User dropdown functionality
function initializeUserDropdown() {
    const userMenuBtn = document.querySelector('.user-menu-btn');
    const userMenu = document.querySelector('.user-menu');
    
    if (userMenuBtn) {
        // Create dropdown menu
        const dropdownMenu = document.createElement('div');
        dropdownMenu.className = 'dropdown-menu';
        dropdownMenu.innerHTML = `
            <a class="dropdown-item" href="#">
                <i class="fas fa-user"></i> Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cog"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../logout/logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        `;
        
        userMenu.appendChild(dropdownMenu);
        
        // Toggle dropdown
        userMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdownMenu.classList.toggle('show');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function() {
            dropdownMenu.classList.remove('show');
        });
    }
}

// Search functionality
function initializeSearch() {
    const searchInput = document.querySelector('.search-input');
    
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            // Implement search logic here
            console.log('Searching for:', searchTerm);
        });
        
        searchInput.addEventListener('focus', function() {
            this.parentElement.style.borderColor = 'var(--light-pink)';
        });
        
        searchInput.addEventListener('blur', function() {
            this.parentElement.style.borderColor = 'rgba(255, 255, 255, 0.1)';
        });
    }
}

// Real-time data updates (simulated)
function simulateRealTimeUpdates() {
    setInterval(() => {
        // Update notification badges randomly
        const badges = document.querySelectorAll('.notification-badge');
        badges.forEach(badge => {
            const current = parseInt(badge.textContent);
            const newCount = Math.max(0, current + Math.floor(Math.random() * 3) - 1);
            if (newCount !== current) {
                badge.textContent = newCount;
                badge.style.animation = 'pulse 0.5s ease';
                setTimeout(() => {
                    badge.style.animation = '';
                }, 500);
            }
        });
        
        // Update online status randomly
        const statuses = document.querySelectorAll('.user-status');
        statuses.forEach(status => {
            const states = ['online', 'away', 'offline'];
            const randomState = states[Math.floor(Math.random() * states.length)];
            status.className = 'user-status ' + randomState;
        });
    }, 10000); // Update every 10 seconds
}

// Add CSS animations
const additionalStyles = `
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    .stat-card, .chart-card, .activity-card, .users-card, .quick-stat {
        animation: fadeInUp 0.6s ease-out;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;

// Inject additional styles
const styleSheet = document.createElement('style');
styleSheet.textContent = additionalStyles;
document.head.appendChild(styleSheet);

// Export functionality
function initializeExport() {
    const exportBtn = document.createElement('button');
    exportBtn.className = 'header-btn';
    exportBtn.innerHTML = '<i class="fas fa-download"></i>';
    exportBtn.title = 'Export Report';
    
    exportBtn.addEventListener('click', function() {
        // Implement export functionality
        alert('Exporting dashboard data...');
    });
    
    const headerActions = document.querySelector('.header-actions');
    if (headerActions) {
        headerActions.insertBefore(exportBtn, headerActions.querySelector('.user-menu'));
    }
}

// Initialize export button
document.addEventListener('DOMContentLoaded', function() {
    initializeExport();
});