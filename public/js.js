document.addEventListener('DOMContentLoaded', function() {
    // For Sidebar
const allSideMenu = document.querySelectorAll('#sidebar .sidebar-menu li a');

allSideMenu.forEach(item=> {
const li = item.parentElement;

item.addEventListener('click', function () {
    allSideMenu.forEach(i=> {
        i.parentElement.classList.remove('active');
    })
    li.classList.add('active');
})
});

// For Toggle
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
})


});

