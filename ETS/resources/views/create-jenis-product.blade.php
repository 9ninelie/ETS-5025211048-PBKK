<!-- reference
https://colorhunt.co/palette/f0f0f02135554f709ce5d283
https://www.youtube.com/watch?v=McPdzhLRzCg
https://www.youtube.com/watch?v=5JwWqjd4e9o 
https://www.youtube.com/watch?v=WVOmmc0UTiM
https://www.youtube.com/watch?v=7uEqQx4S50E-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE JENIS PRODUCT</title>
    <link rel="stylesheet" href="{{ asset('/css/home-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
         <!-- menu dan logo di wrapper -->
        <div class="wrapper">
            <!-- logo -->
            <div class="logo">
                <a href ="{{ route('home') }}">Home</a>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="signup">
        <br><br>
        <!-- form -->
        <form action="{{ route('createJenisProduk') }}" method="POST" enctype="multipart/form-data">
            <!-- logo dalam form -->
            <div class="logo">
                <a href ="{{ route('home') }}">:D</a>
            </div>
            <br>
            @csrf

            <label for="nama">Masukan Jenis Product Baru:</label>
            <input type="integer" name="nama" required>
            <br>

            <button type="submit">Submit</button>
            @if ($errors->any())
            <!-- <h2>Input Error: </h2> -->
            <div class="alert">
                <ul>
                    <h3>Input Error</h3>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
        </div>
    </div>
</body>
</html>