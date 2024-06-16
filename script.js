document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('aduanForm');
    const namaInput = document.getElementById('nama');
    const emailInput = document.getElementById('email');
    const anonimSelect = document.getElementById('mode-anonim');
    const sinonimSelect = document.getElementById('mode-tidak-anonim');

    setFormMode();

    anonimSelect.addEventListener('change', setFormMode);
    sinonimSelect.addEventListener('change', setFormMode);

    function setFormMode() {
        if (anonimSelect.checked) {
            namaInput.disabled = true;
            emailInput.disabled = true;
            namaInput.value = '';
            emailInput.value = '';
        } else {
            namaInput.disabled = false;
            emailInput.disabled = false;
        }
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        if (anonimSelect.checked) {
            console.log('Form Anonim Terkirim:', {
                judul: form.judul.value,
                tanggal: form.tanggal.value,
                lokasi: form.lokasi.value,
                kategori: form.kategori.value,
                aduan: form.aduan.value
            });
        } else {
            console.log('Form Tidak Anonim Terkirim:', {
                judul: form.judul.value,
                nama: form.nama.value,
                email: form.email.value,
                tanggal: form.tanggal.value,
                lokasi: form.lokasi.value,
                kategori: form.kategori.value,
                aduan: form.aduan.value
            });
        }

        alert("Form anda telah terkirim. Silakan cek status aduan untuk keterangan lebih lanjut!");

        form.reset();

        setFormMode();

        window.location.href = 'status_aduan.html';
    });
});

let aduanList = [];

document.getElementById('aduanForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const aduan = {
        judul: document.getElementById('judul').value,
        nama: document.getElementById('nama').value,
        email: document.getElementById('email').value,
        tanggal: document.getElementById('tanggal').value,
        lokasi: document.getElementById('lokasi').value,
        alamat: document.getElementById('alamat').value,
        kategori: document.getElementById('kategori').value,
        aduan: document.getElementById('aduan').value,
        status: 'Aduan Diterima'
    };

    aduanList.push(aduan);
    localStorage.setItem('aduanList', JSON.stringify(aduanList));
    alert('Aduan berhasil dikirim!');
    this.reset();
});

function displayStatusAduan() {
    const statusContainer = document.getElementById('status-aduan-container');
    statusContainer.innerHTML = '';
    aduanList.forEach((aduan, index) => {
        const aduanDiv = document.createElement('div');
        aduanDiv.classList.add('aduan-item');
        aduanDiv.innerHTML = `
            <h3>${aduan.judul}</h3>
            <p>Tanggal: ${aduan.tanggal}</p>
            <p>Status: <span id="status-${index}">${aduan.status}</span></p>
            <button onclick="changeStatus(${index})">Ubah Status</button>
        `;
        statusContainer.appendChild(aduanDiv);
    });
}

function changeStatus(index) {
    const newStatus = prompt('Masukkan status baru:', aduanList[index].status);
    if (newStatus) {
        aduanList[index].status = newStatus;
        localStorage.setItem('aduanList', JSON.stringify(aduanList));
        displayStatusAduan();
    }
}

window.onload = function() {
    if (localStorage.getItem('aduanList')) {
        aduanList = JSON.parse(localStorage.getItem('aduanList'));
    }
    if (document.getElementById('status-aduan-container')) {
        displayStatusAduan();
    }
};
