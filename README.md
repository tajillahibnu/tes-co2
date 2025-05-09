# Aplikasi Laravel - Top Selling Products, Top Customers, Top Agents

Aplikasi ini menyediakan beberapa rute untuk menampilkan data terkait produk terlaris, pelanggan dengan pemesanan terbanyak, dan agen dengan pelanggan terbanyak.

## Prasyarat

- **Laravel Version:** 12.x
- **PHP Version:** 8.3
- **Database:** MySQL, PostgreSQL, atau database lain yang didukung oleh Laravel.

## Daftar Rute

1. **Top Selling Products**
   - **URL:** `/products/top-selling`
   - **Method:** GET
   - **Deskripsi:** Mengambil data produk dengan penjualan tertinggi.
   - **Controller:** `ProductController@topSelling`
   - **Contoh Akses:**  
     Untuk mengakses rute ini, buka URL `http://your-app.local/products/top-selling` pada browser Anda.
   
2. **Top Customers**
   - **URL:** `/customers/top-order`
   - **Method:** GET
   - **Deskripsi:** Mengambil data pelanggan yang melakukan pemesanan terbanyak.
   - **Controller:** `ProductController@topCustomers`
   - **Contoh Akses:**  
     Untuk mengakses rute ini, buka URL `http://your-app.local/customers/top-order` pada browser Anda.
   
3. **Top Agents**
   - **URL:** `/agent/top-customers`
   - **Method:** GET
   - **Deskripsi:** Mengambil data agen dengan jumlah pelanggan terbanyak.
   - **Controller:** `ProductController@topAgents`
   - **Contoh Akses:**  
     Untuk mengakses rute ini, buka URL `http://your-app.local/agent/top-customers` pada browser Anda.

## Cara Menjalankan Aplikasi

1. **Install Dependencies**
   Jika Anda belum menginstall dependencies, jalankan perintah berikut untuk menginstall paket-paket yang diperlukan:
   ```bash
   composer install
