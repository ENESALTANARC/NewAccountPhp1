<h3>Login</h3>
<form methot="post" action="filtre.php">
    adı:<br/><input type="text" size="50"name="ad"/><br/>
    soyadı:<br/><input type="text" size="50"name="soyad"/><br/>
    kullanıcı adı:<br/><input type="text" size="50"name="kullaniciadi"/><br/>
    Cinsiyet:<br/> 
    <input type="radio" name="cinsiyet" value="erkek" checked="on"> Erkek
    <input type="radio" name="cinsiyet" value="kadın"> kadın<br>

    eğitim durumu:<br/>
    <select name="os_type">
<option value="win">lise</option>
<option value="winnt">ortaoku</option>
<option value="linux">ilokul</option>
</select><br/>


    email adresi:<br/><input type="text" size="50"name="email"/><br/>
    şifre:<br/><input type="text" size="50"name="sifre"/><br/>
    tekrar şifre:<br/><input type="text" size="50"name="tekrarsifre"/><br/><br/>

    
    <br/><input type="submit" /></form>
