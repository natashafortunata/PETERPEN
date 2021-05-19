<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITESI2021</title>
    <link href="{{asset('admin/css/form.css')}}" rel="stylesheet" />
</head>
<body>
<form action="index.html" method="post">
      
      <h1>REGISTRASI</h1>
      
        <label for="name">Nama Lengkap :</label>
        <input type="text" id="name" name="user_name">
        
        <label for="nik">NIK :</label>
        <input type="text" id="nik" name="nik">
        
        <label for="password">Alamat :</label>
        <input type="text" id="password" name="user_password">
        
        <label for="password">Tanggal Lahir :</label>
        <input type="date" id="password" name="user_password">

        <label>Jenis Kelamin:</label>
        <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Pria</label><br>
        <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">Wanita</label><br>
        <br>

        <label for="job">Pekerjaan :</label>
        <select id="job" name="user_job">
            <optgroup label="Pendidikan">
            <option value="frontend_developer">Pelajar</option>
            <option value="php_developor">Mahasiswa</option>
            <option value="python_developer">Guru</option>
            <option value="rails_developer">Dosen</option>
            </optgroup>
            <optgroup label="Perusahaan/Bisnis">
            <option value="Android_developer">Karyawan Swasta/Negeri</option>
            <option value="iOS_developer">Manajer</option>
            <option value="mobile_designer">Direktur</option>
            <option value="WordPress_developer">Akuntan</option>
            <option value="WordPress_developer">Asisten Administrasi/Sekretaris</option>
            <option value="WordPress_developer">Wirausaha</option>
            </optgroup>
            <optgroup label="IT">
            <option value="business_owner">Programmer</option>
            <option value="freelancer">Software Engine</option>
            <option value="WordPress_developer">Data Analis</option>
            <option value="WordPress_developer">System Analis</option>
            <option value="WordPress_developer">Support System</option>
            </optgroup>
            <optgroup label="Kesehatan">
            <option value="secretary">Dokter</option>
            <option value="maintenance">Perawat</option>
            <option value="WordPress_developer">Bidan</option>
            <option value="WordPress_developer">Apoteker</option>
            </optgroup>
            <optgroup label="Lainya">
            <option value="WordPress_developer">Wiraswasta</option>
        </select>
      
        <label>Bidang Minat :</label>
        <input type="checkbox" id="development" value="interest_development" name="user_interest" ><label class="light" for="development">Musik</label><br>
        <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Olahraga</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Bisnis</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Kuliner</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Sejarah</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Fotografi</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Videografi</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Game</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Teknologi</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Fashion</label><br>
        <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Penelitian</label><br>
        
        <br>
        <label for="password">No. HP :</label>
        <input type="text" id="password" name="user_password">

      </fieldset>
      <br>
      <button type="submit">DAFTAR</button>
    </form>

</body>
</html>