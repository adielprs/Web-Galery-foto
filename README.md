Database Web galery Foto:

Table user:                                            
userID -> int,
username -> varchar,
password -> varchar,
email -> varchar,
nama_lengkap -> varchar,
alamat -> text,

Table foto:

fotoID -> int,
judul_foto -> varchar,
deskripsi_foto -> text,
tanggal_unggah -> date,
lokasi_file -> varchar,
albumID -> int,
userID int,
