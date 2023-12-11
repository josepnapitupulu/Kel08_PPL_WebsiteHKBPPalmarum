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
        
    });
});
