<!DOCTYPE html>
<html>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <body>
    <div class="w3-row">
      <div
        class="w3-col s4 w3-center"
        style="
          background-image: url(./frontend/img/blog1.jpg);
          height: 100vh;
          background-repeat: repeat;
        "
      ></div>
      <div
        class="w3-col s8"
        style="
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
        "
      >
        <div class="w3-container">
          <form class="w3-container">
            <img
              src="../frontend/img/damantern logo.png"
              alt="logo damantern"
              style="width: 300px"
            />
            <h3 style="margin-bottom: 30px">Log in to your account</h3>
            <input
              class="w3-input"
              placeholder="Username"
              type="text"
              style="width: 335px; margin-top: 30px"
            /><br />

            <input
              class="w3-input"
              placeholder="Password"
              type="text"
              style="width: 335px"
            /><br />
            <input class="w3-check" type="checkbox" />
            <label style="font-size: 15px">Remember me</label>
            <div style="margin-top: 20px">
              <a href="home"
                ><button
                  type="submit"
                  class="w3-btn"
                  style="
                    border-radius: 7px;
                    width: 335px;
                    background-color: #e04560;
                    color: white;
                  "
                >
                  Log in
                </button></a
              >
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
