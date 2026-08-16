<!-- 
    == function ==
    => built-in function (http://php.net/manual/en/funcref.php)
    => user-defined function
    function date/time
=> time()
=> date()
=> mktime()
=> strtotime()

// Date
// Untuk menampilkan tanggal dengan
// format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1
Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date mktime("l", mktime(0,0,0,8,25,1985));

// strtotime
// echo date("l", strtotime("25 aug 1985"));

== String ==
=> strlen()
=> strcmp()
=> explode()
=> htmlspecialchars()

== utility ==
=> var_dump()
=> isset()
=> empty()
=> die()
=> sleep()

== User-defined Function ==


-->