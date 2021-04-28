let navbar = document.querySelector('#navbar')


if (window.innerWidth > 576) {
    document.addEventListener('scroll', () => {

        if (window.pageYOffset > 20) {
            navbar.classList.remove('bg-transparent')
            navbar.classList.add('bg-white', 'shadow')
        } else {
            navbar.classList.remove('bg-white', 'shadow')
            navbar.classList.add('bg-transparent')
        }
    })

} else {
    navbar.classList.add('bg-white')
}