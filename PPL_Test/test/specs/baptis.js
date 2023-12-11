describe('Laravel Project Testing', () => {
    it('should register a new user for baptism', async () => {
        // Mengunjungi halaman web
        await browser.url('http://127.0.0.1:8000/login');
  
        // Login
        const emailInput = await $('#email');
        const passwordInput = await $('#password');
  
        await emailInput.setValue('josepnapitupulu9@gmail.com');
        await passwordInput.setValue('12345678');
  
        const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
        await loginButton.click();

        // Setelah login, pergi ke halaman yang diinginkan
        await browser.url('http://127.0.0.1:8000/aksesBaptisUser');

        // Mengisi formulir
        const namaLengkapInput = await $('[name="nama_lengkap"]');
        await namaLengkapInput.setValue('Nama Lengkap');

        const namaAyahInput = await $('[name="nama_ayah"]');
        await namaAyahInput.setValue('Nama Ayah');

        const namaIbuInput = await $('[name="nama_ibu"]');
        await namaIbuInput.setValue('Nama Ibu');

        const tempatLahirInput = await $('[name="tempat_lahir"]');
        await tempatLahirInput.setValue('Tempat Lahir');

        const tanggalLahirInput = await $('[name="tanggal_lahir"]');
        await tanggalLahirInput.setValue('07-01-2023');

        const jenisKelaminInput = await $('[name="jenis_kelamin"]');
        await jenisKelaminInput.setValue('Jenis Kelamin');

        const alamatInput = await $('[name="alamat"]');
        await alamatInput.setValue('Alamat');

        const keteranganInput = await $('[name="keterangan"]');
        await keteranganInput.setValue('Keterangan');

        // Klik tombol "daftar"
        const daftarButton = await $('input[type="submit"][value="daftar"]');
        await daftarButton.click();
    });
});

it('should register a new user for baptism', async () => {
    // Mengunjungi halaman web
    await browser.url('http://127.0.0.1:8000/login');

    // Login
    const emailInput = await $('#email');
    const passwordInput = await $('#password');

    await emailInput.setValue('josepnapitupulu9@gmail.com');
    await passwordInput.setValue('12345678');

    const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
    await loginButton.click();

    // Setelah login, pergi ke halaman yang diinginkan
    await browser.url('http://127.0.0.1:8000/aksesBaptisUser');

    // Mengisi formulir
    const namaLengkapInput = await $('[name="nama_lengkap"]'); 
    await namaLengkapInput.setValue('Nama Lengkap');

    const namaAyahInput = await $('[name="nama_ayah"]');
    await namaAyahInput.setValue('');

    const namaIbuInput = await $('[name="nama_ibu"]');
    await namaIbuInput.setValue('Nama Ibu');

    const tempatLahirInput = await $('[name="tempat_lahir"]');
    await tempatLahirInput.setValue('Tempat Lahir');

    const tanggalLahirInput = await $('[name="tanggal_lahir"]');
    await tanggalLahirInput.setValue('07-01-2023');

    const jenisKelaminInput = await $('[name="jenis_kelamin"]');
    await jenisKelaminInput.setValue('Jenis Kelamin');

    const alamatInput = await $('[name="alamat"]');
    await alamatInput.setValue('Alamat');

    const keteranganInput = await $('[name="keterangan"]');
    await keteranganInput.setValue('Keterangan');

    // Klik tombol "daftar"
    const daftarButton = await $('input[type="submit"][value="daftar"]');
    await daftarButton.click();
});

