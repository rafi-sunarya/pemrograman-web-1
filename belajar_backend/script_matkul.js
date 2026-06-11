document.addEventListener("DOMContentLoaded", loadMatkul);

const matkulModal = new bootstrap.Modal(document.getElementById("matkulModal"));

function loadMatkul() {
  fetch("api_matkul.php?action=list")
    .then((response) => response.json())
    .then((data) => {
      let html = "";

      if (data.length === 0) {
        html = `<tr><td colspan="4" class="text-center text-muted p-4">Belum ada data mata kuliah.</td></tr>`;
      } else {
        data.forEach((mk, index) => {
          html += `
            <tr>
              <td class="ps-3">${index + 1}</td>
              <td>${mk.matkul}</td>
              <td>${mk.sks}</td>
              <td class="text-center">
                <button class="btn btn-warning btn-sm" onclick="siapkanEditMatkul(${mk.id})">Edit</button>
                <button class="btn btn-danger btn-sm" onclick="hapusMatkul(${mk.id})">Hapus</button>
              </td>
            </tr>
          `;
        });
      }

      document.getElementById("tempat-data-matkul").innerHTML = html;
    });
}

function siapkanTambahMatkul() {
  document.getElementById("modalTitleMatkul").innerText = "Tambah Data Matkul";
  document.getElementById("formMatkul").reset();
  document.getElementById("matkul_id").value = "";
}

function siapkanEditMatkul(id) {
  document.getElementById("modalTitleMatkul").innerText = "Ubah Data Matkul";

  fetch(`api_matkul.php?action=get_single&id=${id}`)
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("matkul_id").value = data.id;
      document.getElementById("matkul").value = data.matkul;
      document.getElementById("sks").value = data.sks;

      matkulModal.show();
    });
}

function simpanMatkul(event) {
  event.preventDefault();

  const form = document.getElementById("formMatkul");
  const formData = new FormData(form);

  fetch("api_matkul.php?action=save", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((res) => {
      if (res.status === "success") {
        alert("Data matkul berhasil disimpan!");
        matkulModal.hide();
        loadMatkul();
      } else {
        alert("Error: " + res.message);
      }
    });
}

function hapusMatkul(id) {
  if (confirm("Yakin ingin menghapus data mata kuliah ini?")) {
    const formData = new FormData();
    formData.append("id", id);

    fetch("api_matkul.php?action=delete", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((res) => {
        if (res.status === "success") {
          alert("Data matkul berhasil dihapus!");
          loadMatkul();
        } else {
          alert("Error: " + res.message);
        }
      });
  }
}
