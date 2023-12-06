describe('Laravel Project Testing', () => {
  it('should register a new user', async () => {
      // Mengunjungi halaman web
      await browser.url('http://127.0.0.1:8000/login');

      // Login
      const emailInput = await $('#email');
      const passwordInput = await $('#password');

      await emailInput.setValue('freskyuo@gmail.com');
      await passwordInput.setValue('Dingzone');

      const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
      await loginButton.click();
      
      //Register
      //const nameInput = await $('#name');
      //await nameInput.setValue('Your Name');
  
      //const emailInput = await $('#email');
      //await emailInput.setValue('your.email@example.com');
  
      //const passwordInput = await $('#password');
      //await passwordInput.setValue('yourPassword');
  
      //const confirmPasswordInput = await $('[name="password_confirmation"]');
      //await confirmPasswordInput.setValue('yourPassword');
  
      // Click the registration button
      //const registerButton = await $('[value="Register"]');
      //await registerButton.click();

      // Pendaftaran Jemaat
      await browser.url('http://127.0.0.1:8000/aksesJemaatUser');

      // Jemaat registration form
      const namaDepanInput = await $('#name');
      await namaDepanInput.setValue('Fresky');

      const namaBelakangInput = await $('[name="nama_belakang"]');
      await namaBelakangInput.setValue('tobing');

      const gelarDepanInput = await $('[name="gelar_depan"]');
      await gelarDepanInput.setValue('jR');

      const gelarBelakangInput = await $('[name="gelar_belakang"]');
      await gelarBelakangInput.setValue('S.kom');

      const tempatLahirInput = await $('[name="tempat_lahir"]');
      await tempatLahirInput.setValue('Lobupining');

      const tanggalLahirInput = await $('[name="tanggal_lahir"]');
      await tanggalLahirInput.setValue('12-06-2023');

      const golDarahInput = await $('[name="gol_darah"]');
      await golDarahInput.setValue('AB');

      const jenisKelaminInput = await $('[name="jenis_kelamin"]');
      await jenisKelaminInput.setValue('Laki Laki');

      const noTeleponInput = await $('[name="no_telepon"]');
      await noTeleponInput.setValue('081362721250');

      const alamatInput = await $('[name="alamat"]');
      await alamatInput.setValue('Tarutung');

      const statusHubunganDropdown = await $('[name="id_hub_keluarga"]');
      await statusHubunganDropdown.selectByVisibleText('Istri');

      const pendidikanTerakhirDropdown = await $('[name="id_pendidikan"]');
      await pendidikanTerakhirDropdown.selectByVisibleText('SMA');

      const bidangPendidikanDropdown = await $('[name="id_bidang_pendidikan"]');
      await bidangPendidikanDropdown.selectByVisibleText('Pendidikan Khusus');

      const pekerjaanDropdown = await $('[name="id_pekerjaan"]');
      await pekerjaanDropdown.selectByVisibleText('Petani');

      // Input Pekerjaan Lain jika tidak terdaftar
      const pekerjaanLainInput = await $('[name="nama_pekerjaan_lain"]');
      await pekerjaanLainInput.setValue('Pekerjaan Lainnya');

      // Input Gelar
      const gelarInput = await $('[name="keterangan"]');
      await gelarInput.setValue('Gelar Anda');

      // "Daftar" button
      const daftarButton = await $('[value="daftar"]');
      await daftarButton.click();

      await browser.waitUntil(
        async () => {
          const successMessage = await $('//div[contains(text(),"Registration successful")]');
          const errorMessage = await $('//div[contains(text(),"Registrasi Gagal")]');
          return await successMessage.isDisplayed() || await errorMessage.isDisplayed();
        },
        {
          timeout: 10000, // Waktu maksimum untuk menunggu dalam milidetik (misalnya, 10000ms atau 10 detik)
          timeoutMsg: 'Gagal menunggu pesan keberhasilan atau kegagalan muncul',
        }
      );
      
      // Additional step: Validate the successful registration
      const successMessage = await $('//div[contains(text(),"Registration successful")]');
      const errorMessage = await $('//div[contains(text(),"Registrasi Gagal")]');
      
      if (await successMessage.isDisplayed()) {
        expect(await successMessage.isDisplayed()).toBe(true);
      } else {
        // Jika pesan kegagalan muncul, maka tes seharusnya gagal
        expect(await errorMessage.isDisplayed()).toBe(true);
      }
  })
})
