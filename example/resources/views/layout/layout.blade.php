<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter-Strike 2 Landing Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- impoort font dari google --}}
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Teko:wght@400;600&display=swap" rel="stylesheet">


    <style>
        /* Font untuk judul */
        h1,
        h2,
        .title,
        .hero-text h1 {
            font-family: 'Black Ops One', sans-serif;
            letter-spacing: 2px;
        }

        /* Font untuk teks & tombol */
        body,
        p,
        button,
        .nav-link,
        .btn {
            font-family: 'Teko', sans-serif;
            font-size: 10px;
            letter-spacing: 1px;
        }


        /* @font-face {
            font-family: 'CSFont';
            src: url('/fonts/cs_regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        button {
            font-family: 'CSFont', Arial, sans-serif !important;
        } */

        body {

            background-color: #0c0c0c;
            color: #fff;
            font-family: Arial,
                sans-serif;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .hero-section video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(60%);
        }

        .hero-text {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .btn-orange {
            background-color: #ff9a00;
            color: #000;
            font-weight: bold;
        }

        .learn-more-box {
            background-color: #ff9a00;
            padding: 30px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .learn-more-box img {
            width: 120px;
        }
    </style>

    @yield('style')
</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</body>

</html>
