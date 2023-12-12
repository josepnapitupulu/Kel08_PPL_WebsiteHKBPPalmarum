describe('Laravel Project Testing', () => {
    it('should interact with Approve and Tolak buttons for uprovePindah data', async () => {
      // Login page
      await browser.url('http://127.0.0.1:8000/login');
  
      // Login
      const emailInput = await $('#email');
      const passwordInput = await $('#password');
      await emailInput.setValue('admin@gmail.com');
      await passwordInput.setValue('12345678');
      const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
      await loginButton.click();
  
      // Ke halaman uproveMempelai Laki Laki
      await browser.url('http://127.0.0.1:8000/admin/uproveMartumpol');
  
      // Temukan baris yang berisi "Nama Gereja Mempelai Laki Laki" tertentu untuk disetujui
      const rowToApprove = await $('//td[contains(text(), "Nama Gereja Mempelai Laki-Laki")]/parent::tr');

      const approveID = await rowToApprove.$('a.btn.btn-success').getAttribute('href');
  
      // Klik tombol "Setuju" untuk data uproveMartumpol tertentu
      const approveButton = await rowToApprove.$('a.btn.btn-success');
      await approveButton.waitForClickable();
      await approveButton.click();
  
      // Baris yang berisi "Nama Gereja Mempelai Laki Laki" khusus untuk penolakan
      const rowToReject = await $('//td[contains(text(), "GPDI")]/parent::tr');

      const rejectID = await rowToReject.$('a.btn.btn-danger').getAttribute('href');
  
      // Klik tombol "Tolak" untuk data uproveMartumpol tertentu
      const rejectButton = await rowToReject.$('a.btn.btn-danger');
      await rejectButton.waitForClickable();
      await rejectButton.click();
  
    });
  });