// Assumes HTML structure:
// <div class="dropdown">
//   <button class="dropdown-btn">Menu</button>
//   <div class="dropdown-menu"> ... </div>
// </div>

document.addEventListener('DOMContentLoaded', function () {
    const dropdown = document.querySelector('.dropdown');
    const menu = document.querySelector('.dropdown-menu');

    if (dropdown && menu) {
        dropdown.addEventListener('mouseenter', function () {
            menu.style.display = 'block';
        });

        menu.addEventListener('mouseleave', function () {
            menu.style.display = 'none';
        });
    }
});