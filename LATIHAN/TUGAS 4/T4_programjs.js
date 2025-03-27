function cekNilai() {
    let nim = document.getElementById("nim").value.trim();
    let nilai = parseFloat(document.getElementById("nilai").value);
    let output = document.getElementById("output");

    
    if (nim === "" || isNaN(nilai)) {
        output.innerHTML = "<span class='error'>Harap masukkan NIM dan nilai yang valid!</span>";
        return;
    }

    
    if (nilai < 0 || nilai > 100) {
        output.innerHTML = "<span class='error'>Nilai tidak valid!</span>";
        return;
    }

    let hurufMutu;
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    // Menampilkan hasil
    output.innerHTML = `NIM: ${nim} <br> Nilai: ${nilai} <br> Huruf Mutu: <strong>${hurufMutu}</strong>`;
}
