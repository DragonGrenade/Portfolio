<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Commitment Section</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Poppins:wght@300;400&family=Bebas+Neue&display=swap" rel="stylesheet">

<style>
  :root {
    --bg: #000;
    --text: #fff;
    --accent: #fff;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: 'Inter', sans-serif;
  }

  .commitment {
    text-align: center;
    padding: clamp(3rem, 8vw, 6rem) 1.5rem;
  }

  .commitment h2 {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    font-size: clamp(1.3rem, 2.1vw, 2rem);
    margin-bottom: 1.5rem;
    line-height: 1.3;
  }

  .commitment p {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(0.9rem, 2.8vw, 1.2rem);
    line-height: 1.8;
    letter-spacing: 0.1em;
    max-width: 750px;
    margin: 0 auto 2.2rem;
  }

  .commitment .btn {
    display: inline-block;
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    font-size: clamp(0.9rem, 2.4vw, 1rem);
    padding: 0.8rem 2rem;
    color: var(--text);
    border: 2px solid var(--accent);
    text-decoration: none;
    transition: all 0.25s ease;
  }

  .commitment .btn:hover {
    background: var(--accent);
    color: var(--bg);
  }

  /* Tablet */
  @media (min-width: 830px) {
    .commitment h2 {
      font-size: clamp(1.6rem, 2.1vw, 2.4rem);
    }
    .commitment p {
      font-size: clamp(1.2rem, 1.6vw, 1.3rem);
    }
    .commitment .btn {
      font-size: clamp(0.8rem, 1.2vw, 1.1rem);
      padding: 1rem 2.5rem;
    }
  }

  /* Desktop */
  @media (min-width: 1100px) {
    .commitment h2 {
      font-size: clamp(1.8rem, 2.5vw, 2.8rem);
    }
    .commitment p {
      font-size: clamp(1.1rem, 1.6vw, 1.3rem);
    }
    .commitment .btn {
      font-size: clamp(1rem, 1.5vw, 1.1rem);
      padding: 1rem 2.5rem;
    }
    
  }
</style>
</head>
<body>

  <section class="commitment">
    <h2>THIS AIN’T A HOBBY - IT’S A COMMITMENT</h2>
    <p>Dedicated to excellence, sustainable sourcing, and unforgettable experiences.</p>
    <a href="#about" class="btn">About Us</a>
  </section>

</body>
</html>
