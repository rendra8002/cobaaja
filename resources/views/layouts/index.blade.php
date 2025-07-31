<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Halaman Utama')</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    .hero     
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }


    .form-container {
  max-width: 600px;
  margin: 2rem auto;
  background: white;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.form-container h2 {
  margin-bottom: 1.5rem;
  font-size: 2rem;
  color: #4f46e5;
}

.form-group {
  margin-bottom: 1.2rem;
  text-align: left;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 600;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 0.7rem;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 1rem;
  transition: border-color 0.3s;
}

.form-group input:focus,
.form-group select:focus {
  border-color: #4f46e5;
  outline: none;
}

.form-group .button {
  background: #4f46e5;
  color: white;
  padding: 0.75rem 1.5rem;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  transition: background 0.3s;
}

.form-group .button:hover {
  background: #3730a3;
}


    body {
      background: #f4f6f9;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .navbar {
      background: #4f46e5;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar h1 {
      font-size: 1.5rem;
    }

    .nav-links a {
      margin-left: 1.5rem;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: opacity 0.3s;
    }

    .nav-links a:hover {
      opacity: 0.7;
    }

    main {
      flex: 1;
      padding: 3rem 2rem;
      text-align: center;
    }

    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      background: #e2e8f0;
    }

    .hero {
      max-width: 700px;
      margin: 0 auto;
    }

    .hero h2 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
    }

    .button {
      background: #4f46e5;
      color: white;
      padding: 0.75rem 1.5rem;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .button:hover {
      background: #3730a3;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <h1>MySite</h1>
    <div class="nav-links">
      <a href="#">Beranda</a>
      <a href="#">Tentang</a>
      <a href="#">Login</a>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>

  <footer>
    &copy; {{ date('Y') }} My Laravel Site
  </footer>
</body>
</html>
