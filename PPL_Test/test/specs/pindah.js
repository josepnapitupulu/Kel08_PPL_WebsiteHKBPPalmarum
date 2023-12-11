describe('Laravel Project Testing', () => {
    it('menambahkan user untuk pindah', async () => {
        // Mengunjungi halaman web
        await browser.url('http://127.0.0.1:8000/login');

        // Login
        const emailInput = await $('#email');
        const passwordInput = await $('#password');

        await emailInput.setValue('abellivakamnydwi@gmail.com');
        await passwordInput.setValue('12345678');

        const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
        await loginButton.click();

        // Setelah login, pergi ke halaman yang diinginkan
        await browser.url('http://127.0.0.1:8000/aksesPindahUser');

        // Mengisi form
        const idJemaatDropdown = await $('[name="id_jemaat"]');
        await idJemaatDropdown.selectByVisibleText('Lidya Simamora');

        const idRegistrasiDropdown = await $('[name="id_registrasi"]');
        await idRegistrasiDropdown.selectByVisibleText('Ny. Simamora A. br. Situmorang Op. Maria');

        const tglPindahInput = await $('[name="tgl_pindah"]');
        await tglPindahInput.setValue('01-01-2020');

        const namaGerejaInput = await $('[name="nama_gereja"]');
        await namaGerejaInput.setValue('siualuompu');

        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Masukkan keterangan jika dibutuhkan');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });
});
