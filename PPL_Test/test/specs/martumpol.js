describe('Laravel Project Testing', () => {
    it('should register a new jemaat', async () => {
        // Mengunjungi halaman web
        await browser.url('http://127.0.0.1:8000/login');
  
        // Login
        const emailInput = await $('#email');
        const passwordInput = await $('#password');
  
        await emailInput.setValue('josepnapitupulu9@gmail.com');
        await passwordInput.setValue('12345678');
  
        const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
        await loginButton.click();
        
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('HKBP');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

    it('should register a new jemaat', async () => {
        // Pendaftaran Jemaat
        await browser.url('http://127.0.0.1:8000/aksesMartumpolUser');

        // Mengisi formulir untuk mempelai laki-laki
        const idJemaatLakiSelect = await $('[name="id_jemaat_laki"]');
        await idJemaatLakiSelect.selectByAttribute('value', '1');

        const namaAyahLakiInput = await $('[name="nama_ayah_laki"]');
        await namaAyahLakiInput.setValue('Budi');

        const namaIbuLakiInput = await $('[name="nama_ibu_laki"]');
        await namaIbuLakiInput.setValue('Ayu');

        const namaGerejaLakiInput = await $('[name="nama_gereja_laki"]');
        await namaGerejaLakiInput.setValue('GPDI');

        // Mengisi formulir untuk mempelai perempuan
        const idJemaatPerempuanSelect = await $('[name="id_jemaat_perempuan"]');
        await idJemaatPerempuanSelect.selectByAttribute('value', '1');

        const namaAyahPerempuanInput = await $('[name="nama_ayah_perempuan"]');
        await namaAyahPerempuanInput.setValue('Santo');

        const namaIbuPerempuanInput = await $('[name="nama_ibu_perempuan"]');
        await namaIbuPerempuanInput.setValue('Citra');

        const namaGerejaPerempuanInput = await $('[name="nama_gereja_perempuan"]');
        await namaGerejaPerempuanInput.setValue('');

        // Input keterangan
        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan yang terkait');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });

});

