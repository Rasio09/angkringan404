// main toggle kelas aktif
const navbarNav = document.querySelector('.navbar-nav');
// humberger menu diklik 
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

//menghilangan hamburger diluar side bar
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});