
document.addEventListener('DOMContentLoaded', function() {
    feather.replace(); // replace ikon dulu

    // Event click untuk semua link
    document.querySelectorAll('.sidebar-nav .nav-link[data-section]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const sectionId = this.getAttribute('data-section');
            showSection(sectionId, this);
        });
    });

    // Ambil dari localStorage atau default
    const savedSection = localStorage.getItem('activeSection') || 'beranda';
    const defaultLink = document.querySelector(`.sidebar-nav .nav-link[data-section="${savedSection}"]`);
    showSection(savedSection, defaultLink);
});

function showSection(sectionId, el) {
    // Sembunyikan semua section
    document.querySelectorAll('.section').forEach(section => {
        section.classList.add('hidden');
    });

    // Tampilkan section yang dipilih
    const selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.classList.remove('hidden');
    }

    // Update active class
    document.querySelectorAll('.sidebar-nav .nav-link').forEach(link => {
        link.classList.remove('active');
    });
    if (el) {
        el.classList.add('active');
    }

    // Simpan ke localStorage
    localStorage.setItem('activeSection', sectionId);
}

function logout() {
    window.location.href = "{{ route('home') }}";
}

function openProfileForm() {
    document.getElementById('profile-modal').classList.remove('hidden');
    document.getElementById('edit-name').value = document.getElementById('profile-name').textContent;
    document.getElementById('edit-desc').value = document.getElementById('profile-desc').textContent;
}

function closeProfileForm() {
    document.getElementById('profile-modal').classList.add('hidden');
}

function saveProfile() {
    const name = document.getElementById('edit-name').value;
    const desc = document.getElementById('edit-desc').value;
    const photo = document.getElementById('upload-photo').files[0];

    if (name) {
        document.getElementById('profile-name').textContent = name;
        localStorage.setItem('profileName', name);
    }

    if (desc) {
        document.getElementById('profile-desc').textContent = desc;
        localStorage.setItem('profileDesc', desc);
    }

    if (photo) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const photoData = e.target.result;
            document.getElementById('profile-pic').src = photoData;
            localStorage.setItem('profilePhoto', photoData);
        };
        reader.readAsDataURL(photo);
    }

    closeProfileForm();
}

// Saat halaman dimuat kembali, ambil dari localStorage
window.addEventListener('DOMContentLoaded', function() {
    const savedName = localStorage.getItem('profileName');
    const savedDesc = localStorage.getItem('profileDesc');
    const savedPhoto = localStorage.getItem('profilePhoto');

    if (savedName) document.getElementById('profile-name').textContent = savedName;
    if (savedDesc) document.getElementById('profile-desc').textContent = savedDesc;
    if (savedPhoto) document.getElementById('profile-pic').src = savedPhoto;
});
function toggleForm() {
    const form = document.getElementById('form-jadwal');
    form.classList.toggle('hidden');
}
function openScheduleModal() {
    document.getElementById('schedule-modal').classList.remove('hidden');
    document.getElementById('overlay').classList.remove('hidden');
}

function closeScheduleModal() {
    document.getElementById('schedule-modal').classList.add('hidden');
    document.getElementById('overlay').classList.add('hidden');
}
function openDeleteModal(id) {
    const form = document.getElementById('delete-form');
    form.action = `/schedules/${id}`; // update URL kalau route beda
    document.getElementById('delete-confirm-modal').classList.remove('hidden');
    document.getElementById('overlay-delete').classList.remove('hidden');
}

function closeDeleteModal() {
    document.getElementById('delete-confirm-modal').classList.add('hidden');
    document.getElementById('overlay-delete').classList.add('hidden');
}

function openEditModal(id, title, description, reminder_time) {
    const form = document.getElementById('edit-form');
    form.action = `/schedules/${id}`; // update URL jika perlu

    document.getElementById('edit-title').value = title;
    document.getElementById('edit-description').value = description;
    document.getElementById('edit-reminder').value = reminder_time;

    document.getElementById('edit-modal').classList.remove('hidden');
    document.getElementById('overlay-edit').classList.remove('hidden');
}

function closeEditModal() {
    document.getElementById('edit-modal').classList.add('hidden');
    document.getElementById('overlay-edit').classList.add('hidden');
}

function toggleNoteStatus(circleElement) {
    const note = circleElement.closest('.task-note');
    note.classList.toggle('checked');
    circleElement.classList.toggle('checked');
}










function changeGif(element) {
    const mainGif = document.getElementById('mainGif');
    mainGif.src = element.src;
    mainGif.alt = element.alt;
}

function openProfileForm() {
    document.getElementById('profile-modal').classList.remove('hidden');
    document.getElementById('overlay-profile').classList.remove('hidden');
}

function closeProfileForm() {
    document.getElementById('profile-modal').classList.add('hidden');
    document.getElementById('overlay-profile').classList.add('hidden');
}