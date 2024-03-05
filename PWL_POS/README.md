# Jobsheet 4 

### Praktikum 1 - $fillable

1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/a2531d3b-7b84-4379-bc1e-9dfa5c7e864e)

2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah in
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/f88a0998-79a7-417c-8908-1a40a472636d)

3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhost/user pada browser
   dan amati apa yang terjadi <br>
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c3aeeadb-5d71-4670-ba36-db82e3fa7274)

5. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian 
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c93e352f-f491-4488-9aeb-aec1b5c73e46)

6. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/1a30e0a5-c532-4feb-acb1-8e1bb9542d6c)

7. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/829d69e1-042b-42b0-a632-b453fd7c8926)

8. Laporkan hasil Praktikum-1 ini dan commit perubahan pada git
- Yang terjadi adalah error karena field password tidak dimasukkan di array fillable maka ketika melakukan create data menggunakan model field password dianggap tidak ada.
