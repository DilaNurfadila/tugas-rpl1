create table buku_tamu
(
    no int
    auto_increment primary key,
    nama varchar
    (50) not null,
    jk varchar
    (25) not null,
    alamat varchar
    (50) not null,
    instansi varchar
    (30) not null,
    jam_masuk time not null,
    tgl_masuk date not null
);