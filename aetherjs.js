function toggleMenu() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar.style.display === 'block') {
        sidebar.style.display = 'none';
    } else {
        sidebar.style.display = 'block';
    }
}


function closeMenu(event) {
    const sidebar = document.getElementById('sidebar');
    if (sidebar.style.display === 'block' && !sidebar.contains(event.target) && !document.querySelector('.menu-button').contains(event.target)) {
        sidebar.style.display = 'none';
    }
}


document.addEventListener('click', closeMenu);
