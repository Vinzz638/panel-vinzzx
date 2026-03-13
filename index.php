<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS DASAR */
        body { background-color: #000000; color: white; font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; padding: 20px; overflow-x: hidden; }
        .container { width: 100%; max-width: 380px; position: relative; }
        
        /* HEADER */
        .header { text-align: center; margin-bottom: 20px; }
        .logo-circle { 
            width: 85px; height: 85px; border-radius: 50%; 
            border: 2px solid #00ff44; margin: 0 auto 10px;
            box-shadow: 0 0 10px #00ff44; overflow: hidden; background: #222;
        }
        .logo-circle img { width: 100%; height: 100%; object-fit: cover; }
        .brand { font-size: 22px; font-weight: bold; letter-spacing: 2px; }

        /* --- SEMUA GERAKAN TOMBOL DI BAWAH INI DIBUAT SMOOTH (transition) --- */

        /* TOMBOL WA (outline hijau) */
        .btn-outline {
            display: block; width: 100%; padding: 10px;
            border: 1px solid #00ff44; border-radius: 20px;
            background: rgba(0, 255, 68, 0.1);
            color: #00ff44; text-decoration: none; font-weight: bold;
            margin-bottom: 25px; text-align: center; box-sizing: border-box; font-size: 13px;
            transition: background 0.3s ease, transform 0.1s ease; /* SMOOTH */
        }
        .btn-outline:active { background: rgba(0, 255, 68, 0.3); transform: scale(0.98); }

        /* CARD */
        .card { background: #111111; border-radius: 15px; padding: 20px; margin-bottom: 20px; border: 1px solid #222; }
        .title-section { color: white; font-size: 16px; font-weight: bold; margin-bottom: 15px; display: flex; align-items: center; }
        .title-section::before { content: ""; display: inline-block; width: 4px; height: 20px; background: #00ff44; margin-right: 10px; border-radius: 2px; }

        input { width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid #333; color: #00ff44; border-radius: 8px; margin-bottom: 15px; box-sizing: border-box; outline: none; font-size: 14px; }

        /* TOMBOL HIJAU GRADASI */
        .btn-grad { 
            width: 100%; padding: 12px; border: none; border-radius: 8px; 
            background: linear-gradient(to right, #00b09b, #96c93d); 
            color: black; font-weight: bold; cursor: pointer; font-size: 14px; 
            transition: opacity 0.3s ease, transform 0.1s ease; /* SMOOTH */
        }
        .btn-grad:active { opacity: 0.8; transform: scale(0.98); }

        /* TABEL */
        .table-email { width: 100%; margin-top: 10px; border-collapse: collapse; }
        .table-email th { text-align: left; color: #00ff44; font-size: 11px; padding-bottom: 10px; }
        .table-email td { padding: 10px 0; border-top: 1px solid #222; font-size: 13px; }
        
        /* TOMBOL PUSAT BIRU */
        .btn-blue { 
            background: linear-gradient(to right, #00d2ff, #3a7bd5); 
            border:none; width:100%; padding:12px; border-radius:8px; 
            color:white; font-weight:bold; cursor:pointer; font-size: 14px; 
            margin-top: 10px; text-decoration: none; display: block; text-align: center; 
            box-sizing: border-box; 
            transition: opacity 0.3s ease, transform 0.1s ease; /* SMOOTH */
        }
        .btn-blue:active { opacity: 0.8; transform: scale(0.98); }

        /* ========================================= */
        /* CSS UNTUK NOTIFIKASI "BERHASIL!" (MODAL) */
        /* ========================================= */
        .modal-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.7); /* Latar belakang gelap */
            display: flex; justify-content: center; align-items: center;
            opacity: 0; visibility: hidden; /* Sembunyi dulu */
            transition: all 0.3s ease; z-index: 999;
        }
        .modal-overlay.show { opacity: 1; visibility: visible; } /* Munculkan */

        .modal-content {
            background: white; color: black; /* Warna putih persis gambar */
            padding: 30px; border-radius: 15px; text-align: center;
            width: 80%; max-width: 300px;
            transform: scale(0.7); transition: all 0.3s ease; /* Smooth muncul */
        }
        .modal-overlay.show .modal-content { transform: scale(1); } /* Efek pop-up */

        .success-icon {
            width: 60px; height: 60px; border-radius: 50%;
            border: 3px solid #00ff44; color: #00ff44;
            font-size: 40px; display: flex; justify-content: center;
            align-items: center; margin: 0 auto 15px; font-weight: bold;
        }

        .modal-title { font-size: 18px; font-weight: bold; margin-bottom: 5px; }
        .modal-text { font-size: 14px; color: #555; margin-bottom: 20px; }
        
        .btn-modal-ok {
            background: #3a7bd5; color: white; border: none;
            padding: 10px 30px; border-radius: 5px; font-weight: bold;
            cursor: pointer; font-size: 14px; transition: background 0.2s ease;
        }
        .btn-modal-ok:active { background: #2a6bc5; }

    </style>
</head>
<body>

<div class="modal-overlay" id="notifBerhasil">
    <div class="modal-content">
        <div class="success-icon">✓</div> <div class="modal-title">Berhasil!</div>
        <div class="modal-text">Data berhasil diubah.</div>
        <button class="btn-modal-ok" onclick="tutupNotif()">OK</button>
    </div>
</div>

<div class="container">
    <div class="header">
        <div class="logo-circle">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_iV-I6v1_Gk_0NAn9XvK3p8Z6j9WnC6-uQw&s">
        </div>
        <div class="brand">VINZZXHOST</div>
    </div>

    <a href="https://wa.me/628818486388?text=bang%20vinzz%20mau%20sewa%20panel%20dong" target="_blank" class="btn-outline">🌐 SEWA PANEL KLIK DISINI</a>

    <div class="card">
        <div class="title-section">DATA PANEL</div>
        <input type="text" id="namaResult" value="Results Vip Vinzzz 👽">
        <button class="btn-grad" onclick="munculNotif()">UPDATE DATA</button>
    </div>

    <div class="card">
        <div class="title-section">Email Configuration</div>
        <div style="display: flex; gap: 10px;">
            <input type="text" id="inputEmail" placeholder="Target Email..." style="flex: 3;">
            <input type="number" id="inputLimit" placeholder="120" style="flex: 1; text-align: center;">
        </div>
        <button class="btn-grad" onclick="tambahEmail()">ADD EMAIL</button>

        <table class="table-email">
            <thead>
                <tr>
                    <th>EMAIL</th>
                    <th>LIMIT</th>
                    <th style="text-align: right;">DEL</th>
                </tr>
            </thead>
            <tbody id="listEmail">
                </tbody>
        </table>
    </div>

    <a href="#" class="btn-blue">🌐 PUSAT/PANEL ( KLIK DISINI )</a>
</div>

<script>
    // FUNGSI UNTUK MEMUNCULKAN NOTIFIKASI "BERHASIL!"
    function munculNotif() {
        document.getElementById("notifBerhasil").classList.add("show");
    }

    // FUNGSI UNTUK MENUTUP NOTIFIKASI
    function tutupNotif() {
        document.getElementById("notifBerhasil").classList.remove("show");
    }

    // FUNGSI ADD EMAIL YANG SUDAH ADA (DENGAN TAMBAHAN SMOOTH)
    function tambahEmail() {
        var email = document.getElementById("inputEmail").value;
        var limit = document.getElementById("inputLimit").value;

        if (email == "") {
            alert("Emailnya diisi dulu ya bang!");
            return;
        }

        if (limit == "") { limit = "0"; }

        var table = document.getElementById("listEmail");
        var row = table.insertRow(0);
        
        row.innerHTML = `
            <td style="color: #00ff44;">${email}</td>
            <td><span style="background:#222; color: #00ff44; padding: 2px 5px; border-radius: 4px;">${limit}</span></td>
            <td style="text-align: right; color: #ff416c; cursor:pointer;" onclick="hapusBaris(this)">🗑️</td>
        `;

        document.getElementById("inputEmail").value = "";
        document.getElementById("inputLimit").value = "";
    }

    function hapusBaris(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>

</body>
</html>
