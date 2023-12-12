describe('Laravel Project Testing', () => {
    it('should interact with Approve and Tolak buttons for uproveJemaat data', async () => {
      await browser.url('http://127.0.0.1:8000/login');
        
      const emailInput = await $('#email');
      const passwordInput = await $('#password');

      await emailInput.setValue('admin@gmail.com');
      await passwordInput.setValue('12345678');

      const loginButton = await $('input[type="submit"].btn.btn-pill.text-white.btn-block.btn-primary');
      await loginButton.click();

      await browser.url('http://127.0.0.1:8000/admin/uproveJemaat');
  
      // Locate the row containing the specific "Nama Depan" for approval (Fresky Tobing)
      const rowToApprove = await $('//td[contains(text(), "Fresky Tobing")]/parent::tr');
      await rowToApprove.waitForExist();
  
      // Extract the ID from the "Approve" button
      const approveID = await rowToApprove.$('a.btn.btn-success').getAttribute('href');
  
      // Click the "Approve" button for the specific uproveJemaat data
      const approveButton = await rowToApprove.$('a.btn.btn-success');
      await approveButton.waitForClickable();
      await approveButton.click();
  
      // Handle SweetAlert2 modal if needed
      // ...
  
      // Locate the row containing the specific "Nama Depan" for rejection (Phyto)
      const rowToReject = await $('//td[contains(text(), "Rendi Phyto")]/parent::tr');
      await rowToReject.waitForExist();
  
      // Extract the ID from the "Tolak" button
      const rejectID = await rowToReject.$('a.btn.btn-danger').getAttribute('href');
  
      // Click the "Tolak" button for the specific uproveJemaat data
      const rejectButton = await rowToReject.$('a.btn.btn-danger');
      await rejectButton.waitForClickable();
      await rejectButton.click();
  
      // Handle SweetAlert2 modal if needed
      // ...
    });
  });
  