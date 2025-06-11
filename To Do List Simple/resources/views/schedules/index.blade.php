<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Rui</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <div class="container">

        {{-- sidebar --}}
        <div class="sidebar">
            <div class="profile-card">
                <div class="search-box">
                    <input type="text" placeholder="Search..." />
                </div>

                <div class="profile-image-wrapper">
                    <img id="profile-pic" src="https://via.placeholder.com/140" alt="User Photo">
                </div>

                <h3 id="profile-name">Nama Kamu</h3>
                <p id="profile-desc" class="profile-bio">Deskripsi Kamu</p>

                <button class="view-profile-btn" onclick="openProfileForm()">Ubah Profile</button>
            </div>
            <div class="sidebar-nav">
                <a href="#" onclick="showSection('beranda', this)" class="nav-link active">
                    <span data-feather="circle" class="icon"></span> List
                </a>
                <a href="#" onclick="showSection('about', this)" class="nav-link">
                    <span data-feather="circle" class="icon"></span> Tentang
                </a>
                <a href="{{ route('home') }}" class="nav-link">
                    <span data-feather="circle" class="icon"></span> Keluar
                </a>
            </div>
        </div>

        <div class="main">
            {{-- list page --}}
            <div id="beranda" class="section">
                <div class="text-section">
                    <h1><span class="white">Jadwal</span> <span class="rui">Kamu</span></h1>
                </div>
                <button class="btn-start" onclick="openScheduleModal()">Tambah</button>

                <div id="schedule-modal" class="hidden"
                    style="
                        position: fixed; top: 50%; left: 50%;
                        transform: translate(-50%, -50%);
                        background: #01a393; padding: 24px; width: 100%; max-width: 420px;
                        border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                        z-index: 999;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        color: white;
                    ">



                    <div style="text-align: center; margin-bottom: 20px;">
                        <!-- GIF di atas -->
                        <img src="{{ asset('images/pop.gif') }}" alt="GIF Pop"
                            style="
  width: 100px;
  height: 100px;
  object-fit: contain;
  margin: 0 auto 12px;
  display: block;
">
                        <h2 style="margin-top: 8px; font-weight: 600;">Tambah jadwalmu</h2>
                    </div>

                    <form action="{{ route('schedules.store') }}" method="POST">
                        @csrf

                        <div style="display: flex; align-items: center; margin-bottom: 12px;">
                            <div
                                style="width: 12px; height: 12px; background: #FFA500; border-radius: 2px; margin-right: 10px;">
                            </div>
                            <input type="text" name="title" required placeholder="Tambah judul"
                                style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 8px; color: black;">
                        </div>

                        <div style="display: flex; align-items: center; margin-bottom: 12px;">
                            <div
                                style="width: 12px; height: 12px; background: #FFA500; border-radius: 2px; margin-right: 10px;">
                            </div>
                            <textarea name="description" rows="3" required placeholder="Tambah deskripsi"
                                style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 8px; resize: vertical; color: black;"></textarea>
                        </div>

                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div
                                style="width: 12px; height: 12px; background: #FFA500; border-radius: 2px; margin-right: 10px;">
                            </div>
                            <input type="text" name="reminder_time" required placeholder="Tambah pengingat"
                                onfocus="this.type='datetime-local'"
                                style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 8px; color: black;">
                        </div>

                        <div style="display: flex; justify-content: flex-end; gap: 10px;">
                            <button type="button" onclick="closeScheduleModal()" class="batal">
                                Batal
                            </button>
                            <button type="submit" class="simpan">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
                <style>
                    .simpan {
                        background-color: #4a90e2;
                        border: none;
                        color: white;
                        padding: 6px 12px;
                        border-radius: 6px;
                        cursor: pointer;
                        font-size: 13px;
                        transition: background-color 0.2s;
                    }

                    .simpan:hover {
                        transform: scale(1.05);
                        background-color: #1a63a3;
                    }

                    .batal {
                        background-color: #ff6b6b;
                        border: none;
                        color: white;
                        padding: 6px 12px;
                        border-radius: 6px;
                        cursor: pointer;
                        font-size: 13px;
                        transition: background-color 0.2s;
                    }

                    .batal:hover {
                        transform: scale(1.05);
                        background-color: #e63946;
                    }
                </style>
                <script>
                    function openScheduleModal() {
                        document.getElementById('schedule-modal').classList.remove('hidden');
                    }

                    function closeScheduleModal() {
                        document.getElementById('schedule-modal').classList.add('hidden');
                    }
                </script>
                <div id="overlay" class="hidden"
                    style="
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 998;">
                </div>
                <div class="task-grid">
                    @foreach ($schedules as $schedule)
                        <div class="task-note" data-title="{{ $schedule->title }}"
                            data-description="{{ $schedule->description }}"
                            data-reminder="{{ $schedule->reminder_time }}">

                            <div class="check-circle" onclick="toggleNoteStatus(this)"
                                style="width: 20px; height: 20px; border: 2px solid #555;
          border-radius: 50%; cursor: pointer; margin-bottom: 8px;">
                            </div>

                            <h3>{{ $schedule->title }}</h3>
                            <p>{{ $schedule->description }}</p>

                            <div class="note-footer">
                                <div class="task-time">{{ $schedule->reminder_time }}</div>
                                <div class="button-group">
                                    <button class="edit-button"
                                        onclick="openEditModal({{ $schedule->id }}, '{{ $schedule->title }}', '{{ $schedule->description }}', '{{ $schedule->reminder_time }}')"></button>
                                    <button class="delete-button"
                                        onclick="openDeleteModal({{ $schedule->id }})"></button>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

            {{-- tentang page --}}
            <div id="about" class="section">
                <div class="about-content">
                    <!-- Kiri: Teks -->
                    <div class="about-text">
                        <div class="text-section">
                            <h1><span class="white">Tentang</span> <span class="rui">Rui</span></h1>
                        </div>
                        <p>
                            <strong>Rui</strong> adalah aplikasi web to-do list super simple yang memudahkan pengguna untuk mencatat,
                            mengatur, dan menyelesaikan tugas-tugas mereka sehari-hari. Fokus kami adalah memberikan
                            pengalaman
                            pengguna yang ringan dan efisien.
                        </p>
                    </div>
                    <!-- Kanan: GIF utama -->
                    <div class="about-gif">
                        <img id="mainGif" src="{{ asset('images/pop.gif') }}" alt="GIF Utama">
                    </div>
                </div>
                <!-- Deretan GIF kecil -->
                <div class="gif-thumbnails">
                    <img src="{{ asset('images/pop.gif') }}" alt="pop" onclick="changeGif(this)">
                    <img src="{{ asset('images/bub.gif') }}" alt="bub" onclick="changeGif(this)">
                    <img src="{{ asset('images/pip.gif') }}" alt="pip" onclick="changeGif(this)">
                    <img src="{{ asset('images/lil.gif') }}" alt="lil" onclick="changeGif(this)">
                    <img src="{{ asset('images/lol.gif') }}" alt="lol" onclick="changeGif(this)">
                    <img src="{{ asset('images/pup.gif') }}" alt="pup" onclick="changeGif(this)">
                    <img src="{{ asset('images/pal.gif') }}" alt="pal" onclick="changeGif(this)">
                </div>
            </div>

            {{-- <div class="bubble-wrapper">
                <div class="bubble" style="width: 100px; height: 100px; top: 73%; left: 30%;"></div>
                <div class="bubble" style="width: 150px; height: 150px; bottom: 50%; right: 20%;"></div>
                <div class="bubble" style="width: 80px; height: 80px; top: 80%; right: 10%;"></div>
            </div> --}}
        </div>
    </div>




    {{-- modal profile --}}
    <div id="overlay-profile" class="hidden"
        style="
        position: fixed; top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 998;">
    </div>
    <div id="profile-modal" class="hidden"
        style="
    position: fixed; top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    background: #01a393; padding: 24px;
    width: 100%; max-width: 420px;
    border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    z-index: 999;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    box-sizing: border-box;
">
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ asset('images/pop.gif') }}" alt="GIF Pop"
                style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 12px;">
            <h2 style="margin-top: 8px; font-weight: 600;">Edit Profil</h2>
        </div>
        <form onsubmit="saveProfile(); return false;" style="box-sizing: border-box;">
            <div style="margin-bottom: 16px;">
                <input type="file" id="upload-photo"
                    style="background-color: white; color: black; padding: 10px;
            border-radius: 8px; width: 100%; border: none; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 12px;">
                <input type="text" id="edit-name" placeholder="Masukkan nama"
                    style="padding: 10px; width: 100%; border-radius: 8px;
            border: 1px solid #ccc; color: black; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 20px;">
                <input type="text" id="edit-desc" placeholder="Masukkan deskripsi"
                    style="padding: 10px; width: 100%; border-radius: 8px;
            border: 1px solid #ccc; color: black; box-sizing: border-box;">
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 10px;">
                <button type="button" onclick="closeProfileForm()" class="batal">Batal</button>
                <button type="submit" class="simpan">Simpan</button>
            </div>
        </form>
    </div>








    {{-- delete modal --}}
    <div id="delete-confirm-modal" class="hidden"
        style="position: fixed; top: 50%; left: 50%;
transform: translate(-50%, -50%);
background: #01a393; padding: 24px; width: 100%; max-width: 360px;
border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
z-index: 999;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color: white; text-align: center;">
        <img src="{{ asset('images/pop.gif') }}" alt="GIF Pop"
            style="width: 80px; height: 80px; object-fit: contain; margin: 0 auto 12px; display: block;">
        <p style="font-size: 16px; font-weight: 500; margin-bottom: 20px;">Yakin ingin menghapus data ini?</p>

        <form id="delete-form" method="POST" style="display: flex; justify-content: center; gap: 10px;">
            @csrf
            @method('DELETE')
            <button type="submit" class="simpan">Ya, Hapus</button>
            <button type="button" onclick="closeDeleteModal()" class="batal">Batal</button>
        </form>
    </div>
    <div id="overlay-delete" class="hidden"
        style="position: fixed; top: 0; left: 0;
width: 100%; height: 100%;
background-color: rgba(0, 0, 0, 0.5);
z-index: 998;">
    </div>
    <style>
        .simpan {
            background-color: #4a90e2;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            transition: background-color 0.2s;
        }

        .simpan:hover {
            transform: scale(1.05);
            background-color: #1a63a3;
        }

        .batal {
            background-color: #ff6b6b;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            transition: background-color 0.2s;
        }

        .batal:hover {
            transform: scale(1.05);
            background-color: #e63946;
        }
    </style>
    <script>
        function closeDeleteModal() {
            document.getElementById('delete-confirm-modal').classList.add('hidden');
            document.getElementById('overlay-delete').classList.add('hidden');
        }
    </script>


    {{-- edit modal --}}
    <div id="edit-modal" class="hidden"
        style="position: fixed; top: 50%; left: 50%;
transform: translate(-50%, -50%);
background: #01a393; padding: 24px; width: 100%; max-width: 420px;
border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
z-index: 999;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color: white;">

        <div style="text-align: center; margin-bottom: 20px;">
            <!-- GIF atas -->
            <img src="{{ asset('images/pop.gif') }}" alt="GIF Pop"
                style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 12px; display: block;">
            <h2 style="margin-top: 8px; font-weight: 600;">Edit jadwalmu</h2>
        </div>

        <form id="edit-form" method="POST">
            @csrf
            @method('PUT')

            <div style="display: flex; align-items: center; margin-bottom: 12px;">
                <div style="width: 12px; height: 12px; background: #FFA500; border-radius: 2px; margin-right: 10px;">
                </div>
                <input type="text" id="edit-title" name="title" required placeholder="Ubah judul"
                    style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 8px; color: black;">
            </div>

            <div style="display: flex; align-items: center; margin-bottom: 12px;">
                <div style="width: 12px; height: 12px; background: #FFA500; border-radius: 2px; margin-right: 10px;">
                </div>
                <textarea id="edit-description" name="description" rows="3" required placeholder="Ubah deskripsi"
                    style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 8px; resize: vertical; color: black;"></textarea>
            </div>

            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <div style="width: 12px; height: 12px; background: #FFA500; border-radius: 2px; margin-right: 10px;">
                </div>
                <input type="text" id="edit-reminder" name="reminder_time" required placeholder="Ubah pengingat"
                    onfocus="this.type='datetime-local'"
                    style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 8px; color: black;">
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 10px;">
                <button type="button" onclick="closeEditModal()" class="batal">Batal</button>
                <button type="submit" class="simpan">Simpan Perubahan</button>
            </div>
        </form>
    </div>
    <style>
        .simpan {
            background-color: #4a90e2;
            border: none;
            color: white;
            padding: 6px 12px;
            border: 1px solid #007a6e;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            transition: background-color 0.2s;
        }

        .simpan:hover {
            transform: scale(1.05);
            background-color: #1a63a3;
        }

        .batal {
            background-color: #ff6b6b;
            border: none;
            color: white;
            padding: 6px 12px;
            border: 1px solid #007a6e;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            transition: background-color 0.2s;
        }

        .batal:hover {
            transform: scale(1.05);
            background-color: #e63946;
        }
    </style>
    <script>
        function closeEditModal() {
            document.getElementById('edit-modal').classList.add('hidden');
        }
    </script>
    <div id="overlay-edit" class="hidden"
        style="position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 998;">
    </div>




   {{-- modal notifikasi --}}
<div id="reminder-modal" class="hidden"
style="
position: fixed; top: 50%; left: 50%;
transform: translate(-50%, -50%);
background: #01a393; padding: 24px;
width: 100%; max-width: 400px;
border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
z-index: 1000;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color: white;
text-align: center;
">
{{-- Gambar gif --}}
<img src="{{ asset('images/duck.gif') }}" alt="GIF Pop"
    style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 12px; display: block;">

{{-- Judul & Deskripsi --}}
<h3 id="reminder-title" style="font-size: 18px; margin-bottom: 10px;"></h3>
<p id="reminder-description" style="font-size: 14px; margin-bottom: 20px;"></p>

{{-- Tombol tutup di tengah --}}
<div style="display: flex; justify-content: center;">
    <button onclick="closeReminderModal()" class="batal">Tutup</button>
</div>
</div>

<div id="overlay-reminder" class="hidden"
style="position: fixed; top: 0; left: 0;
width: 100%; height: 100%;
background-color: rgba(0, 0, 0, 0.5);
z-index: 999;">
</div>

<audio id="alarm-sound" src="{{ asset('sounds/wind.mp3') }}" preload="auto"></audio>

<style>
   .batal {
            background-color: #ff6b6b;
            border: none;
            color: white;
            padding: 6px 12px;
            border: 1px solid #007a6e;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            transition: background-color 0.2s;
        }

        .batal:hover {
            transform: scale(1.05);
            background-color: #e63946;
        }
</style>

<script>
function openReminderModal(title, description) {
    document.getElementById('reminder-title').textContent = title;
    document.getElementById('reminder-description').textContent = description;
    document.getElementById('reminder-modal').classList.remove('hidden');
    document.getElementById('overlay-reminder').classList.remove('hidden');

    const alarm = document.getElementById('alarm-sound');
    if (alarm) {
        alarm.currentTime = 0;
        alarm.play().catch(error => {
            console.log("Suara tidak dapat diputar otomatis: ", error);
        });
    }
}

function closeReminderModal() {
    document.getElementById('reminder-modal').classList.add('hidden');
    document.getElementById('overlay-reminder').classList.add('hidden');

    const alarm = document.getElementById('alarm-sound');
    if (alarm) {
        alarm.pause();
        alarm.currentTime = 0;
    }
}

function checkReminders() {
    const now = new Date();
    document.querySelectorAll('.task-note').forEach(note => {
        const reminder = new Date(note.dataset.reminder);
        const timeDiff = reminder.getTime() - now.getTime();
        if (timeDiff <= 0 && timeDiff > -60000) {
            const title = note.dataset.title;
            const description = note.dataset.description;
            openReminderModal(title, description);
            note.removeAttribute('data-reminder');
        }
    });
}

setInterval(checkReminders, 10000);
</script>





    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
