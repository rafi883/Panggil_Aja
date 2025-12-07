<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/detailPesananAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>DetailPesanan</title>
</head>
<body>
    <div class="container-pesanan">
        <div class="pesanan">
            <div class="gmbr-kiri">
                <img src="/img/bersihkanrumah.png">
                <div class="detail-gambar">
                    <p class="email-user">Email user:zahidganteng@gmail.com</p>
                    <p>Membersihkan rumah</p>
                </div>
            </div>

            <div class="info-pesanan" data-status="todo">
                 <select onchange="updateStatus(this)">
                    <option value="todo" selected>Pending</option>
                    <option value="doing">Proses</option>
                    <option value="done">Selesai</option>
                    <option value="cancel">Dibatalkan</option>

                </select>

            </div>

        </div>

        <div class="pesanan">
            <div class="gmbr-kiri">
                <img src="/img/angkatbarang.png">
                <div class="detail-gambar">
                    <p class="email-user">Email user:rafiganteng@gmail.com</p>
                    <p>Membersihkan rumah</p>
                </div>
            </div>

            <div class="info-pesanan"  data-status="todo">
                 <select onchange="updateStatus(this)">
                    <option value="todo" selected>Pending</option>
                    <option value="doing">Proses</option>
                    <option value="done">Selesai</option>
                    <option value="cancel">Dibatalkan</option>

                </select>
            </div>
        </div>

        <div class="pesanan">
            <div class="gmbr-kiri">
                <img src="/img/bersihkanrumah.png">
                <div class="detail-gambar">
                    <p class="email-user">Email user:rafiganteng@gmail.com</p>
                    <p>Membersihkan rumah</p>
                </div>
            </div>

            <div class="info-pesanan"  data-status="todo">
                 <select onchange="updateStatus(this)">
                    <option value="todo" selected>Pending</option>
                    <option value="doing">Proses</option>
                    <option value="done">Selesai</option>
                    <option value="cancel">Dibatalkan</option>

                </select>
            </div>
        </div>

        <div class="pesanan">
            <div class="gmbr-kiri">
                <img src="/img/motong-rumput.png">
                <div class="detail-gambar">
                    <p class="email-user">Email user:blondeganteng@gmail.com</p>
                    <p>Memotong rumput</p>
                </div>
            </div>

            <div class="info-pesanan"  data-status="todo">
                 <select onchange="updateStatus(this)">
                    <option value="todo" selected>Pending</option>
                    <option value="doing">Proses</option>
                    <option value="done">Selesai</option>
                    <option value="cancel">Dibatalkan</option>

                </select>
            </div>
        </div>

         <div class="pesanan">
            <div class="gmbr-kiri">
                <img src="/img/kolamberenang.png">
                <div class="detail-gambar">
                    <p class="email-user">Email user:alfagacor@gmail.com</p>
                    <p>Membersihkan kolam</p>
                </div>
            </div>

            <div class="info-pesanan"  data-status="todo">
                 <select onchange="updateStatus(this)">
                    <option value="todo" selected>Pending</option>
                    <option value="doing">Proses</option>
                    <option value="done">Selesai</option>
                    <option value="cancel">Dibatalkan</option>

                </select>
            </div>
        </div>

         <div class="pesanan">
            <div class="gmbr-kiri">
                <img src="/img/angkatbarang.png">
                <div class="detail-gambar">
                    <p class="email-user">Email user:rafiganteng@gmail.com</p>
                    <p>Angkat barang</p>
                </div>
            </div>

            <div class="info-pesanan"  data-status="todo">
                 <select onchange="updateStatus(this)">
                    <option value="todo" selected>Pending</option>
                    <option value="doing">Proses</option>
                    <option value="done">Selesai</option>
                    <option value="cancel">Dibatalkan</option>

                </select>
            </div>
        </div>

    </div>

    <script>
    function updateStatus(selectElement) {
        // Mendapatkan nilai status yang dipilih (todo, doing, atau done)
        const newStatus = selectElement.value;

        // Mencari elemen induk terdekat dengan class .job-item
        const jobItem = selectElement.closest('.info-pesanan');

        // Mengubah atribut data-status elemen induk
        if (jobItem) {
            jobItem.setAttribute('data-status', newStatus);
        }
    }
</script>
</body>
</html>
