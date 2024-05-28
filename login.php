<!DOCTYPE html>
<html class="html" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Menu</title>
    <link rel="stylesheet" href="/static/styles/login-style.css" />
    <script src="/static/scripts/adminLogin.js" defer></script>
  </head>
  <body class="main">
    <div class="main__logo">
      <img class="logo__title" src="static/images/big_logo.svg" alt="logo" />
      <h1 class="logo__subtitle">Log in to start creating</h1>
    </div>
    <div class="main__login-form">
      <h2 class="login-form__title">Log In</h2>
      <div id="error" class="error-block">
        <img
          class="error__image"
          src="/static/images/alert-circle.svg"
          alt="error"
        />
        <p id="error__status" class="error__text">Error</p>
      </div>
      <div class="login-form__input-inf">
        <div class="input-inf__email">
          <p class="email__title">Email</p>
          <input class="email__input" type="email" id="emailInput" />
          <p id="email__require">Email is required.</p>
        </div>
        <div class="input-inf__password">
          <p class="password__title">Password</p>
          <div class="password-container">
            <input class="password__input" type="password" id="passwordInput" />
            <img
              id="password__button"
              src="static/images/eye-off.svg"
              alt="eye"
            />
            <p id="password__require">Password is required.</p>
          </div>
        </div>
        <input
          class="input-inf__button"
          type="submit"
          name="commit"
          value="Log In"
          id="submit"
        />
      </div>
    </div>
  </body>
</html>
