// JavaScript untuk mengubah tampilan login/daftar menjadi info pengguna
function showUserPanel(username, avatar) {
    // Sembunyikan tombol login/daftar
    document.getElementById('loginBtn').style.display = 'none';
    document.getElementById('registerBtn').style.display = 'none';

    // Tampilkan info pengguna
    document.getElementById('user-info').style.display = 'block';
    document.getElementById('username').textContent = username;
    document.getElementById('user-avatar').src = avatar;
}

// Contoh penggunaan: panggil fungsi ini setelah login berhasil
function onLoginSuccess(username, avatar) {
    showUserPanel(username, avatar);
}

// Misalnya, jika menggunakan fetch untuk mengambil respons JSON dari backend
fetch('login.php', {
    method: 'POST',
    body: formData // FormData yang berisi informasi login
})
.then(response => response.json())
.then(data => {
    // Panggil fungsi onLoginSuccess dengan data yang diterima dari backend
    onLoginSuccess(data.username, data.avatar);
})
.catch(error => console.error('Error:', error));
