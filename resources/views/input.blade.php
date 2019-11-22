<!DOCTYPE html>
<html>
<head>
<title>Codefee</title>    
</head>
<body>

    <form action="/input_data/proses" method="post">
        <input type="hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        Nama   :
            <input type="text" name="nama"> <br/>
        Alamat :
            <input type="text" name="alamat"><br/>
        Bahasa Program yang dikuasai :
        <input type="text" name="program"><br/>
        Saat ini sedang belajar :
            <input type="text" name="belajar"><br/>

        <input type="submit" value="Simpan">
    </form>
    
</body>

</html>