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

        // Click on the "Approve" dropdown
        const approveDropdown = await $('a.nav-link=i\\[src\\="/icon/aproval.png"\\]');
        await approveDropdown.click();

        // Click on the "Jemaat Pindah" link
        const jemaatPindahLink = await $('a.nav-link[p>Jemaat Pindah]');
        await jemaatPindahLink.click();

        // Find and click the "Approve" button for the specified Jemaat (Parso)
        const jemaatNameCell = await $('td.dtr-control.sorting_1');
        await jemaatNameCell.click();

        const approveButton = await $('a.btn.btn-success[data-toggle="tooltip"][title="uprove"]');
        await approveButton.click();

        // You might want to add some assertions here to verify the result if needed
    });
});
