document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;

    // Validasi input di sisi client menggunakan JavaScript
    if (username === "") {
      alert("Username tidak boleh kosong");
      return false;
    }

    if (password === "") {
      alert("Password tidak boleh kosong");
      return false;
    }

    // Submit form jika validasi berhasil
    this.submit();
  });
