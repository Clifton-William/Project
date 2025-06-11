<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List - Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <!-- Bola hiasan -->
    {{-- <div class="bubble" style="width: 100px; height: 100px; top: 20%; left: 10%;"></div>
    <div class="bubble" style="width: 150px; height: 150px; bottom: 15%; right: 15%;"></div>
    <div class="bubble" style="width: 80px; height: 80px; top: 50%; right: 20%;"></div> --}}

    <div class="container">
        <div class="text-section">
            <h1><span class="white">YOUR</span> <span class="list">LIST</span></h1>
            <p class="white" style=" margin-top: -100px;">Buat dan kelola tugasmu dengan mudah
            </p>
            <p class="white">Bersama Rui semua jadi terstruktur
            </p>
            <button class="btn-start" onclick="window.location.href='/schedules'">MULAI</button>
        </div>

        {{-- gif kawaii --}}
        <div class="image-container">
            <div class="image-wrapper">
                <img id="character-img" src="{{ asset('images/pop.gif') }}" alt="character" />
                <button onclick="nextCharacter()" class="punch-btn"></button>
            </div>
        </div>


        <script>
            const images = [
                "{{ asset('images/pop.gif') }}",
                "{{ asset('images/bub.gif') }}",
                "{{ asset('images/pip.gif') }}",
                "{{ asset('images/lil.gif') }}",
                "{{ asset('images/lol.gif') }}",
                "{{ asset('images/pup.gif') }}",
                "{{ asset('images/pal.gif') }}",
            ];
            let currentIndex = 0;

            function showCharacter(index) {
                document.getElementById("character-img").src = images[index];
            }

            function nextCharacter() {
                currentIndex = (currentIndex + 1) % images.length;
                showCharacter(currentIndex);
                const punchSound = document.getElementById("punch-sound");
                punchSound.currentTime = 0;
                punchSound.play();
            }
        </script>
        <audio id="punch-sound" src="{{ asset('sounds/bonk.mp3') }}"></audio>
</body>

</html>
