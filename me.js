var nav = document.getElementById('access_nav'),
    body = document.body;

nav.addEventListener('click', function (e) {
    body.className = body.className ? '' : 'hidden';
    e.preventDefault();
});
