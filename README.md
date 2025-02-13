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

Table album:

albumID -> int,
nama_album -> varchar,
deskripsi -> varchar,
tanggal_buat -> date,
userID -> int,

Table komentar_foto:

komentarID -> int,
fotoID -> int,
userID -> int,
isi_komentar -> date,
tanggal_komentar -> date,

Table like_foto:
likeID -> int,
fotoID -> int,
userID -> int,
tanggal_like date,
