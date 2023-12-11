describe('Laravel Project Testing', () => {
    it('should register a new jemaat', async () => {
        // Mengunjungi halaman web
        await browser.url('http://127.0.0.1:8000/login');
  
        // Login
        const emailInput = await $('#email');
        const passwordInput = await $('#password');
  
        await emailInput.setValue('freskyuo@gmail.com');
        await passwordInput.setValue('Dingzone');
  
        const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
        await loginButton.click();
        
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Nama Ayah Mempelai Laki-Laki');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Nama Ibu Mempelai Laki-Laki');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('Nama Gereja Mempelai Laki-Laki');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Nama Ayah Mempelai Perempuan');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Nama Ibu Mempelai Perempuan');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('Nama Gereja Mempelai Perempuan');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });
});
