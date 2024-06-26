document.addEventListener('DOMContentLoaded', function() {
    fetch('/app/Views/auth/Beranda/layout3.html')
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');

            // Ambil elemen-elemen yang ingin Anda tambahkan
            const header = doc.querySelector('header');
            const footer = doc.querySelector('footer');

            // Tambahkan elemen-elemen ke halaman
            if (header) {
                document.body.insertBefore(header, document.body.firstChild);
            }
            if (footer) {
                document.body.appendChild(footer);
            }
        })
        .catch(error => console.error('Error loading layout:', error));
});
