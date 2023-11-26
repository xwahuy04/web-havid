  const scriptURL = 'https://script.google.com/macros/s/AKfycbx7DPW4g0i-S9Ro1gPRpCd0anALI2j6mC6DMWruhWLoqWXVJfobJAbfUVi0qXFnL-VHAg/exec'
  const form = document.forms['havid-contact-form']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
