describe('Laravel Project Testing', () => {
    it('should approve Jemaat Pindah', async () => {
        // Login
        await browser.url('http://127.0.0.1:8000/login');

        const emailInput = await $('#email');
        const passwordInput = await $('#password');

        await emailInput.setValue('admin@gmail.com');
        await passwordInput.setValue('12345678');

        const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
        await loginButton.click();

        // Navigate to the target page
        await browser.url('http://127.0.0.1:8000/admin/dashboard');

    });
});
