describe('Laravel Project Testing', () => {
    it('should register a new jemaat', async () => {
        // Mengunjungi halaman web
        await browser.url('http://127.0.0.1:8000/login');
  
        // Login
        const emailInput = await $('#email');
        const passwordInput = await $('#password');
  
<<<<<<< HEAD
        await emailInput.setValue('abellivakamnydwi@gmail.com');
=======
        await emailInput.setValue('josepnapitupulu9@gmail.com');
>>>>>>> 2d9225739672913d17a73ce513df3d991cfb36bb
        await passwordInput.setValue('12345678');
  
        const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
        await loginButton.click();
        
    });
});
