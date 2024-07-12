

setTimeout(function () {
    document.getElementById('username').removeAttribute('disabled');
    document.getElementById('password').removeAttribute('disabled');
}, 1000);

document.getElementById('login-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const data = {
        username: document.getElementById('username').value,
        password: document.getElementById('password').value,
    };

    fetch(sessionData.auth_url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => response.json())
        .then(data => {
            if (data.token) {
                localStorage.setItem('token', data.token);
                localStorage.setItem('displayname', data.user_display_name);
                localStorage.setItem('nicename', data.user_nicename);
                window.location.href = sessionData.loginsuccess_url
            } else {
                alert('Erro ao fazer login: ' + data.message);
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
});