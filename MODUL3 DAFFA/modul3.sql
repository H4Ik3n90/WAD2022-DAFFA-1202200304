CREATE TABLE wad_modul3 (
	id_mobil int(255) NOT NULL PRIMARY KEY,
    nama_mobil varchar(255) NOT NULL,
    pemilik_mobil varchar(255) NOT NULL,
    merk_mobil varchar(255) NOT NULL,
    tanggal_beli date NOT NULL,
    deskripsi text NOT NULL,
    foto_mobil varchar(255) NOT NULL,
    status_pembayaran varchar(255) NOT NULL
);