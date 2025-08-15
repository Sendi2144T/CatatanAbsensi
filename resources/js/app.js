const absenForm = document.getElementById("absenForm");
const absenTable = document.querySelector("#absenTable tbody");

absenForm.addEventListener("submit", function(e) {
  e.preventDefault();

  // Ambil nilai form
  const user = document.getElementById("user").value;
  const tanggal = document.getElementById("tanggal").value;
  const status = document.getElementById("status").value;
  const keterangan = document.getElementById("keterangan").value;

  // Tambahkan baris ke tabel
  const row = document.createElement("tr");
  row.innerHTML = `
    <td>${user}</td>
    <td>${tanggal}</td>
    <td>${status}</td>
    <td>${keterangan}</td>
  `;
  absenTable.appendChild(row);

  // Reset form
  absenForm.reset();
});
