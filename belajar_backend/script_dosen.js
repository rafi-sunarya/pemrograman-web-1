document.addEventListener("DOMContentLoaded", loadDosen);

const dosenModal = new bootstrap.Modal(document.getElementById("dosenModal"));

function loadDosen() {
  fetch("api_dosen.php?action=list")
    .then((response) => response.json())
    .then((data) => {
      let html = "";

      if (data.length === 0) {
        html = `<tr><td colspan="4" class="text-center text-muted p-4">Belum ada data dosen.</td></tr>`;
      } else {
        data.forEach((dosen, index) => {
          html += `
            <tr>
              <td class="ps-3">${index + 1}</td>
              <td>${dosen.nama}</td>
              <td>${dosen.alamat}</td>
              <td class="text-center">
                <button class="btn btn-warning btn-sm" onclick="siapkanEditDosen(${dosen.id})">Edit</button>
                <button class="btn btn-danger btn-sm" onclick="hapusDosen(${dosen.id})">Hapus</button>
              </td>
            </tr>
          `;
        });
      }

      document.getElementById("tempat-data-dosen").innerHTML = html;
    });
}

function siapkanTambahDosen() {
  document.getElementById("modalTitleDosen").innerText = "Tambah Data Dosen";
  document.getElementById("formDosen").reset();
  document.getElementById("dosen_id").value = "";
}

function siapkanEditDosen(id) {
  document.getElementById("modalTitleDosen").innerText = "Ubah Data Dosen";

  fetch(`api_dosen.php?action=get_single&id=${id}`)
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("dosen_id").value = data.id;
      document.getElementById("nama").value = data.nama;
      document.getElementById("alamat").value = data.alamat;

      dosenModal.show();
    });
}

function simpanDosen(event) {
  event.preventDefault();

  const form = document.getElementById("formDosen");
  const formData = new FormData(form);

  fetch("api_dosen.php?action=save", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((res) => {
      if (res.status === "success") {
        alert("Data dosen berhasil disimpan!");
        dosenModal.hide();
        loadDosen();
      } else {
        alert("Error: " + res.message);
      }
    });
}

function hapusDosen(id) {
  if (confirm("Yakin ingin menghapus data dosen ini?")) {
    const formData = new FormData();
    formData.append("id", id);

    fetch("api_dosen.php?action=delete", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((res) => {
        if (res.status === "success") {
          alert("Data dosen berhasil dihapus!");
          loadDosen();
        } else {
          alert("Error: " + res.message);
        }
      });
  }
}
