<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'cursive';
      font-size: 1.5rem;
      background-color: rgb(43, 38, 38);
      color: #fff;
    }


    h1 {
      font-weight: 700;
      color: #fff;
      font-size: 1.75rem;
    }

    h2 {
      font-weight: 700;
      color: #f8f2f2;
      font-size: 1.75rem;
    }

    .intro {
      font-size: 1.15rem;
      margin-bottom: 2.5em;
    }

    span {
      color: #fda039;
    }

    .black {
      font-weight: 700;
      color: #000;
    }


    .main-grid {
      display: grid;
      grid-template-columns: minmax(1em, 1fr) minmax(0px, 500px) minmax(1em, 1fr);
      grid-column-gap: 2em;
    }


    .head {
      grid-column: 2 / -2;
      text-align: center;
      margin-top: 3em;
      margin-bottom: 3em;
    }



    .main-image {

      width: 300px;
      height: 300px;
      display: block;
      box-shadow: 10px 10px 250px #000;
    }

    .main-text {
      grid-column: 2 / -2;
      margin-top: 3em;
      margin-bottom: 3em;
    }

    .section-title::after {
      content: "";
      display: block;
      width: 100px;
      height: 3px;
      margin-top: 1em;
      background: #fda039;
      margin-left: auto;
      margin-right: auto;
    }

    .page-title::after {
      content: "";
      display: block;
      width: 500px;
      height: 3px;
      margin-top: 1em;
      background: #fda039;
      margin-left: auto;
      margin-right: auto;
    }

    .sub {
      margin-top: 3em;
    }





    .main-grid {
      grid-template-columns: minmax(1em, 1fr) repeat(3, minmax(20px, 320px)) minmax(1em, 1fr);
    }



    .main-image {
      grid-column: 2;
      margin-top: 1.3em;

    }

    .main-text {
      grid-column: 3 / span 2;
      margin-top: 0;
    }

    .section-title::after {
      margin-left: 0;
    }
  </style>
</head>

<body>

  <main class="main-grid">
    <div class="head">
      <h1 class="page-title">About Dastkari (دستکاری)</h1>
      <h4>Welcome to our website dedicated to promoting and selling handmade products
        created by talented village women. Our mission is to empower these women
        by providing them with a platform to showcase their skills and earn a fair wage for their hard work..</h4>
    </div>
    <img class="main-image" src="images/car2.jpg">

    <div class="main-text">
      <h2 class="section-title">Our Story</h2>

      <p>Our story began with a desire to support rural communities and their traditional art forms. We noticed that
        many talented women in these areas were struggling
        to make a living from their crafts due to a lack of access to markets and resources.</p>
      <p>We wanted to change that, and thus this website was born..</p>
    </div>
    <img class="main-image" src="images/car3.jpg">
    <div class="main-text">
      <h2 class="section-title sub">Information </h2>
      <p>Our website features a wide range of handmade products, including clothing, accessories,
        home decor, and more. Each item is unique and showcases the skill and creativity of the women who made it. </p>
      <p>By purchasing from our website, you are not only supporting these talented artisans but
        also preserving traditional art forms and promoting sustainable, ethical business practices.</p>
    </div>

  </main>

</body>

</html>