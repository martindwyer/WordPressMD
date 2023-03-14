class Login {
  constructor() {
    if (document.querySelector('.login')) {
      this.siteTitle();
      this.loginForm();
    }
  }

  loginForm = () => {
    let login = document.querySelector('#loginform');
    login.style = 'border-radius: 8px';
    login.style = 'margin-top: 0';
  };

  siteTitle = () => {
    let banner = document.querySelector('#login h1');
    let newNode = document.createElement('h2');
    let titleText = document.createTextNode('Primal Strength');

    banner.insertAdjacentHTML(
      'beforebegin',
      ` <h2 style='text-align:center;color: white;font-size:2.5rem;margin-bottom:0rem;'>Primal Strength</h2>
        <h3 style="font-size: 1.75rem; text-align:center; color: white; margin-top:0; margin-bottom: 40px;line-height: .5;"><br>Member Portal</h3>
          `
    );
  };
}

export default Login;
