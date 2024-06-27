document.addEventListener('DOMContentLoaded', function() {
    fetch('/app/Views/auth/Beranda/layout3.html')
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');

          
            const header = doc.querySelector('header');
            const footer = doc.querySelector('footer');


            if (header) {
                document.body.insertBefore(header, document.body.firstChild);
            }
            if (footer) {
                document.body.appendChild(footer);
            }
        })
        .catch(error => console.error('Error loading layout:', error));
});
