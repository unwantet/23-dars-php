<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
  body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
  }

  .form-container {
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 350px;
      text-align: center;
  }

  .form-container h2 {
      margin-bottom: 20px;
      color: #333333;
  }

  .input-group {
      margin-bottom: 15px;
      text-align: left;
  }

  .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #555555;
      font-size: 14px;
  }

  .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      box-sizing: border-box;
  }

  .input-group input:focus {
      border-color: #007bff;
      outline: none;
  }

  .submit-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
  }

  .submit-btn:hover {
      background-color: #0056b3;
  }

  .link {
      margin-top: 15px;
      font-size: 14px;
      color: #555555;
  }

  .link a {
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s;
  }

  .link a:hover {
      color: #0056b3;
  }
</style>

</head>
<body>

    <div class="form-container">
        <h2>Login</h2>
        <form action="/users/handleLogin" method="post">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn">Login</button>
        </form>
        <div class="link">
            <p><a href="/users/register">You have not an accaunt? Register</a></p>
        </div>
    </div>

</body>
</html>
