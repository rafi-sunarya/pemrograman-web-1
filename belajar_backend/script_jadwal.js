document.addEventListener("DOMContentLoaded", loadJadwal);

const jadwalModal = new bootstrap.Modal(document.getElementById("jadwalModal"));

function loadJadwal() {
  fetch("api_jadwal.php?action=list")
    .then((response) => response.json())
    .then((data) => {
      let html = "";

      if (data.length === 0) {
        html = `
          <tr>
            <td colspan="6" class="text-center text-muted">
              Belum ada data jadwal.
            </td>
          </tr>
        `;
      } else {
        data.forEach((jadwal, index) => {
          html += `
            <tr>
              <td>${index + 1}</td>
              <td>${jadwal.nama_dosen}</td>
              <td>${jadwal.nama_matkul}</td>
              <td>${jadwal.waktu}</td>
              <td>${jadwal.ruang}</td>
              <td>
                <button class="btn btn-warning btn-sm" onclick="siapkanEditJadwal(${jadwal.id})">
                  Edit
                </button>

                <button class="btn btn-danger btn-sm" onclick="hapusJadwal(${jadwal.id})">
                  Hapus
                </button>
              </td>
            </tr>
          `;
        });
      }

      document.getElementById("tempat-data-jadwal").innerHTML = html;
    });
}

function siapkanTambahJadwal() {
  document.getElementById("modalTitleJadwal").innerText = "Tambah Jadwal";
  document.getElementById("formJadwal").reset();
  document.getElementById("jadwal_id").value = "";
}

function siapkanEditJadwal(id) {
  document.getElementById("modalTitleJadwal").innerText = "Ubah Jadwal";

  fetch(`api_jadwal.php?action=get_single&id=${id}`)
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("jadwal_id").value = data.id;
      document.getElementById("id_dosen").value = data.id_dosen;
      document.getElementById("id_matkul").value = data.id_matkul;
      document.getElementById("waktu").value = data.waktu;
      document.getElementById("ruang").value = data.ruang;

      jadwalModal.show();
    });
}

function simpanJadwal(event) {
  event.preventDefault();

  const form = document.getElementById("formJadwal");
  const formData = new FormData(form);

  fetch("api_jadwal.php?action=save", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((res) => {
      if (res.status === "success") {
        alert("Data jadwal berhasil disimpan!");
        jadwalModal.hide();
        loadJadwal();
      } else {
        alert("Error: " + res.message);
      }
    });
}

function hapusJadwal(id) {
  if (confirm("Yakin ingin menghapus jadwal ini?")) {
    const formData = new FormData();
    formData.append("id", id);

    fetch("api_jadwal.php?action=delete", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((res) => {
        if (res.status === "success") {
          alert("Data jadwal berhasil dihapus!");
          loadJadwal();
        } else {
          alert("Error: " + res.message);
        }
      });
  }
}
