window.addEventListener('scroll', function() {
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrollPercent = (scrollTop / scrollHeight) * 100;

    var customScrollbar = document.getElementById('customScrollbar');
    customScrollbar.style.width = scrollPercent + 'vw';
});

document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-item');
    const currentPath = window.location.pathname;

    navLinks.forEach(link => {
        const linkPath = new URL(link.href).pathname;

        if (linkPath === currentPath) {
            link.classList.add('active');
        }
    });
});

const hamburger = document.querySelector('input[type="checkbox"]')
const sidebar = document.querySelector('.nav-menu')

hamburger.addEventListener('change', function () {
    sidebar.classList.toggle('active', hamburger.checked)
})

function scrollNav () {
    const navbar = document.querySelector('.navbar-container')
    window.addEventListener('scroll', function() {
        if (this.window.scrollY > 100) {
            navbar.classList.add('scroll')
        } else {
            navbar.classList.remove('scroll')
        }
    })
}
scrollNav()

$(window).scroll(function () {
    let wScroll = $(this).scrollTop();

    // $('.card-image-content').css({
    //     'transform' : 'translate(0px, '+ wScroll/12 +'%)'
    // })

    $('.parallax').each(function () {
        let offset = $(this).offset().top;
        let height = $(this).outerHeight();
        let speed = 0.5;

        if (wScroll + $(window).height() > offset && wScroll < offset + height) {
            let yPos = (wScroll - offset) * speed;
            $(this).css('transform', 'translateY(' + yPos + 'px)');
        }
    });
});

function easeOutCubic(t) {
    return (--t) * t * t + 1;
}