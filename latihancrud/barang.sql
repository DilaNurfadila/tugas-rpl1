create database borma

use borma;

create table barang (
    no int primary key,
    nama_barang varchar(25) not null,
    total_barang int(25) not null,
    harga_satuan int(25) not null
);

insert into barang values('1','top kofi','5','10000');
insert into barang values('2','cafal afi','8','8500');
insert into barang values('3','tufbruk','30','5000');
insert into barang values('4','luewak','42','20000');
insert into barang values('5','tobiraka','22','11000');

select * from barang;

-- +----+-------------+--------------+--------------+
-- | no | nama_barang | total_barang | harga_satuan |
-- +----+-------------+--------------+--------------+
-- |  1 | top kofi    |            5 |        10000 |
-- |  2 | cafal afi   |            8 |         8500 |
-- |  3 | tufbruk     |           30 |         5000 |
-- |  4 | luewak      |           42 |        20000 |
-- |  5 | tobiraka    |           22 |        11000 |
-- +----+-------------+--------------+--------------+