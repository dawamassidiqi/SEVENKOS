<form action="/prosesregister" method="post">
    @csrf
    <input type="text" placeholder="masukkan nama" name="username">
    <input type="password" name="password" placeholder="Masukkan password">
    <input type="password" name="retype_password"> 
    <button type="submit">daftar</button>
    
</form>
