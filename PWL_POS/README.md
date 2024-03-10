![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c85e188a-fa78-4e44-900b-10391d31335a)# Jobsheet 4 - MODEL dan ELOQUENT ORM

### Praktikum 1 - $fillable

1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/a2531d3b-7b84-4379-bc1e-9dfa5c7e864e)

2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru seperti gambar di bawah in
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/f88a0998-79a7-417c-8908-1a40a472636d)

3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhost/user pada browser
   dan amati apa yang terjadi <br>
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c3aeeadb-5d71-4670-ba36-db82e3fa7274)

4. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/c93e352f-f491-4488-9aeb-aec1b5c73e46)

5. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/1a30e0a5-c532-4feb-acb1-8e1bb9542d6c)

6. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/829d69e1-042b-42b0-a632-b453fd7c8926)

7. Laporkan hasil Praktikum-1 ini dan commit perubahan pada git

-   Yang terjadi adalah error karena field password tidak dimasukkan di array fillable maka ketika melakukan create data menggunakan model field password dianggap tidak ada.

<br/> <br/>

### Praktikum 2.1 - Retrieving Single Models

1. Buka file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/515c214a-5d25-4771-aca3-be1e3e187a3d)

2. Buka file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini <br/>
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/eb8bacd5-8329-4671-9fb6-d948ecac474a)

3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati
   apa yang terjadi dan beri penjelasan dalam laporan

-   Yang terjadi user dengan id 1 ditampilkan <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/09df578d-0220-4480-8922-f4dff8c73ad1)

4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
   di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/369a7290-34ad-4379-b586-53998d74399b)

5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang
   terjadi dan beri penjelasan dalam laporan

-   Menampikan user dengan level id 1 pertama

6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
   di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/b747adfc-7238-482e-9e7d-8f060f1d023d)

7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati apa yang
   terjadi dan beri penjelasan dalam laporan

-   Menampikan user dengan level id 1 pertama <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/5babb914-5cdf-4fdf-8275-5199695ce8c7)

8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
   di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/b4f6fd27-3657-4b2a-ba7b-7873f47dd3db)

9. Simpan kode program Langkah 8. Kemudian pada browser dan amati apa yang terjadi
   dan beri penjelasan dalam laporan

-   Script diatas menampilkan user dengan id 1 yang hanya mengampbil kolom username, nama <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/d07f2c8a-2655-4e7f-8615-ae713a259935)

10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
    di bawah ini
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/65dcb73b-e742-4ca5-b367-f4442e50272c)

11. Simpan kode program Langkah 10. Kemudian jalankan pada browser dan amati apa
    yang terjadi dan beri penjelasan dalam lapora
    
-   Yang terjadi browser menampikan halaman 404 karena tidak menemukan user dengan id 20 <br/>
    ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/e57bf894-657a-4fbd-9742-eadd0699ab3d)

12. Laporkan hasil Praktikum-2.1 ini dan commit perubahan pada git.

### Praktikum 2.2 - Not Found Exceptions
1.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/d1b8be97-91ea-4875-afda-872d2082c92d)
2.	Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/bfa47616-58fe-45b4-91c4-9f65cae9d358) <br>
Kode diatas adalah perintah untuk mencari use dengan id 1
4.	Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
   ![image](https://github.com/gbrn7/PWL_2024/assets/127575934/e78bd130-5b98-407b-83b8-b9055088832d)

5.	Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan
Jawaban
![image](https://github.com/gbrn7/PWL_2024/assets/127575934/1cf5322d-af96-442c-8218-773efce3a03a) <br>
Yang terjadi adalah karena user dengan username ‘manager9’ tidak ditemukan maka browser mengembalikan halaman ‘NOT FOUND’
