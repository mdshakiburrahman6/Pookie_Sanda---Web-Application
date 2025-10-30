
// Particle System on Hover
const particleContainer = document.getElementById('particle-container');
let lastSpawn = 0;
const spawnDelay = 50;

const colors = ['#ff1493', '#ff69b4', '#ff6b9d', '#c71585', '#8338ec', '#3a86ff'];

document.addEventListener('mousemove', (e) => {
    const now = Date.now();
    if (now - lastSpawn < spawnDelay) return;
    lastSpawn = now;

    const particle = document.createElement('div');
    particle.className = 'hover-particle';
    particle.style.left = e.clientX + 'px';
    particle.style.top = e.clientY + 'px';
    particle.style.width = Math.random() * 12 + 6 + 'px';
    particle.style.height = particle.style.width;
    particle.style.background = colors[Math.floor(Math.random() * colors.length)];
    particle.style.animationDuration = Math.random() * 2 + 3 + 's';

    particleContainer.appendChild(particle);

    setTimeout(() => {
        particle.remove();
    }, 5000);
});

// Form animations
document.querySelectorAll('.form-group').forEach((group, index) => {
    group.style.opacity = '0';
    group.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
        group.style.transition = 'all 0.5s ease';
        group.style.opacity = '1';
        group.style.transform = 'translateY(0)';
    }, 100 * index);
});
