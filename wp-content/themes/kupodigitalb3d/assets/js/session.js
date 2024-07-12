document.addEventListener('DOMContentLoaded', function () {
    var menuContainer = document.querySelector('#session-action');

    var token = localStorage.getItem('token');
    if (token) {
        menuContainer.innerHTML = '<a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none" href="' + sessionData.profile_url + '">Meu Perfil</a>';
    } else {
        menuContainer.innerHTML = '<a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none" href="' + sessionData.login_url + '">Entrar</a>';
    }
});
