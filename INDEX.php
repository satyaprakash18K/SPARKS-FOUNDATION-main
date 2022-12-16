<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="simple banking system without login in ,will show all customers,send money,transaction history"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon " href="images/logo.svg" />
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    
    <style>
      /* back-groundcolor-button:linear-gradient(120deg,hsl(192,70%,51%),hsl(136,65%,51%)) */
/* botton color:hsl(136, 65%, 51%); */

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  /* font-size: 10px; */
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
}
body {
  font-family: "Rubik", sans-serif;
  line-height: 1;
  font-weight: 400;
  color: #555;
  background-color: hsl(192, 64%, 89%);

  /* this only works when there is nothing absolute positioned  in relation to body*/
  overflow-x: hidden;
}
.logo {
  height: 2.2rem;
  margin-top: 24px;
  margin-left: 20px;
}

/* navigation */

.main-nav-list {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 4.8rem;
  justify-content: right;
  background-color: hsl(192, 64%, 89%);
  margin-right: 20px;
}
.main-nav-link:link,
.main-nav-link:visited {
  display: inline-block;
  text-decoration: none;
  color: #333;
  font-weight: 400;
  font-size: 1.8rem;
  transition: all 0.3s;
}
.main-nav-link:hover,
.main-nav-link:active {
  color: hsl(136, 65%, 51%);
}
.main-nav-link.nav-cta:link,
.main-nav-link.nav-cta:visited {
  padding: 1.2rem 2.4rem;
  border-radius: 9px;
  color: rgb(255, 255, 255);
  background-color: hsl(132, 70%, 51%);
}
.main-nav-link.nav-cta:hover,
.main-nav-link.nav-cta:active {
  background-color: hsl(136, 69%, 34%);
}

/* Sticky navigation */
.sticky .header {
  position: fixed;
  top: 0;
  bottom: 0;
  width: 100%;
  height: 8rem;
  padding-top: 0%;
  padding-bottom: 0%;
  background-color: hsl(192, 64%, 89%);
  z-index: 999;
  box-shadow: 0 1.2rem 3.2rem rgb(0, 0, 0, 0.03);
}

.sticky .section-hero {
  margin-top: 9.6rem;
}

/*******************************/
/* HERO SECTION */
/*******************************/

.section-hero {
  background-color: hsl(192, 64%, 89%);
  padding: 4.8rem 0 0 0;
}

.hero {
  max-width: 130rem;
  margin: 0 auto;
  padding: 3.2rem;
  display: grid;
  grid-template-columns: 1fr 1fr;
  /* gap: 9.6rem; */
  align-items: center;
}

.hero-description {
  font-size: 2rem;
  line-height: 1.6;
  margin-bottom: 4.8rem;
}

.hero-img {
  width: 100%;
}

.delivered-meals {
  display: flex;
  margin-top: 8rem;
  align-items: center;
  gap: 1.6rem;
}
.delivered-img {
  display: flex;
}
.delivered-img img {
  height: 2rem;
  width: 2rem;
  border-radius: 50%;
  margin-right: -1.6rem;
  border: 3px solid #fdf2e9;
}
.delivered-img img:last-child {
  margin: 0;
}
.delivered-text {
  font-size: 1.8rem;
  font-weight: 600;
}
.delivered-text span {
  color: hsl(136, 65%, 51%);
  font-weight: 700;
}
/*******************************/
/*  mobile  */
/*******************************/

.btn-mobile-nav {
  border: none;
  background: none;
  cursor: pointer;
  display: none;
}
.icon-mobile-nav {
  height: 4.8rem;
  width: 4.8rem;
  color: #333;
}

.icon-mobile-nav[name="close"] {
  display: none;
}

/*******************************/
/* MEALS SECTION */
/*******************************/
.section-meals {
  padding: 9.6rem 0;
}

.meal {
  box-shadow: 0rem 2.4rem 4.8rem rgb(0, 0, 0, 0.075);
  border-radius: 11px;
  overflow: hidden;
  transition: all 0.4s;
}

.meal:hover {
  transform: translateY(-1.2rem);
  box-shadow: 0rem 3.2rem 6.4rem rgba(0, 0, 0, 0.06);
}
.meal-content {
  padding: 3.2rem 4.8rem;
}
.meal-tags {
  margin-bottom: 1.2rem;
  display: flex;
  gap: 0.4rem;
}
.tag {
  display: inline-block;
  padding: 0.4rem 0.8rem;
  text-transform: uppercase;
  font-size: 1.2rem;

  color: #333;
  border-radius: 100px;
  font-weight: 600;
}
.tag--vegetarian {
  background-color: #51cf66;
}
.tag--vegan {
  background-color: #94d82d;
}
.tag--paleo {
  background-color: #ffd43b;
}
.meal-title {
  font-size: 2.4rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 3.2rem;
}
.meal-attributes {
  font-style: none;
  display: flex;
  flex-direction: column;
  gap: 2rem;
}
.meal-attribute {
  font-size: 1.8rem;
  display: flex;
  align-items: center;
  gap: 1.6rem;
}
.meal-icon {
  height: 2.4rem;
  width: 2.4rem;
  color: #0c1b2d;
}
.meal-img {
  width: 100%;
  height: 50%;
}
.all-recipes {
  text-align: center;
  font-size: 1.8rem;
}

/*******************************/
/* main SECTION */
/*******************************/
.section-testimonials {
  background-color: #fdf2e9;
  display: grid;
  grid-template-columns: 55fr 45fr;
  align-items: center;
}
.testimonials-container {
  padding: 9.6rem;
}
.testimonials {
  display: grid;
  grid-template-columns: 1fr 1fr;
  row-gap: 4.8rem;
  column-gap: 5rem;
}

.testimonial-img {
  width: 6.4rem;
  border-radius: 50%;
  margin-bottom: 1.2rem;
}

.testimonial-text {
  font-size: 1.8rem;
  line-height: 1.8;
  margin-bottom: 1.6rem;
}

.testimonial-name {
  font-size: 1.6rem;
  color: #6f6f6f;
}
.gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.6rem;
  padding: 1.6rem;
  margin-top: -25rem;
}
.gallery-item {
  overflow: hidden;
}
.gallery-item img {
  display: block;
  width: 100%;
  transition: all 0.4s;
}
.gallery-item img:hover {
  transform: scale(1.1);
}

/*******************************/
/* GENENRAL REUSABLE COMPONENTS*/
.container {
  max-width: 120rem;
  margin: 0 auto;
  padding: 0rem 3.2rem;
}

.grid {
  display: grid;
  column-gap: 6.4rem;
  row-gap: 9.6rem;
  /* margin-bottom: 9.6rem; */
}

/* .grid:last-child {
  margin-bottom: 0rem;
}  */

.grid:not(:last-child) {
  margin-bottom: 9.6rem;
}
.grid--center-v {
  align-items: center;
}
.grid--2-cols {
  grid-template-columns: repeat(2, 1fr);
}
.grid--3-cols {
  grid-template-columns: repeat(3, 1fr);
}

.grid--4--cols {
  grid-template-columns: repeat(4, 1fr);
}
.grid--5--cols {
  grid-template-columns: repeat(5, 1fr);
}
.heading-primary,
.heading-secondary,
.heading-tertiary {
  color: #0c1b2d;

  font-weight: 700;
  letter-spacing: -0.5px;
}
.heading-primary {
  font-size: 5.2rem;
  line-height: 1.05;
  margin-bottom: 3.2rem;
}
.heading-secondary {
  font-size: 4.4rem;
  line-height: 1.2;
  margin-bottom: 9.6rem;
}
.heading-tertiary {
  font-size: 3rem;
  line-height: 1.2;
  margin-bottom: 3.2rem;
}

.subheading {
  display: block;
  font-size: 1.6rem;
  font-weight: 600;
  color: #0c1b2d;
  text-transform: uppercase;
  margin-bottom: 1.6rem;
  letter-spacing: 0.75px;
}

.btn--form {
  background-color: #0c1b2d;
  color: #fdf2e9;
}
.btn,
.btn:link,
.btn:visited {
  display: inline-block;
  background-color: hsl(136, 65%, 51%);
  font-size: 2rem;
  font-weight: 600;
  padding: 1.6rem 3.2rem;
  border-radius: 9px;
  text-decoration: none;

  /* only nessary for btn */
  border: none;
  cursor: pointer;
  font-family: inherit;
  /* transition: background-color 0.3s; */
  transition: all 0.3s;
}
.btn--full:link,
.btn--full:visited {
  background-color: hsl(136, 65%, 51%);
  color: #fff;
}
.btn--full:hover,
.btn--full:active {
  background-color: hsl(136, 69%, 34%);
}
.btn--outline:link,
.btn--outline:visited {
  background-color: #fff;
  color: #555;
}
.btn--outline:hover,
.btn--outline:active {
  background-color: #e5ffe6;
  /* border: 3px solid white; */
  box-shadow: inset 0 0 0 3px white;
}
.btn--form {
  background-color: #0b3814;
  color: #fdf2e9;
  align-self: end;
  padding: 1.2rem;
}
.btn--form:hover {
  background-color: #fff;
  color: #555;
}

.transfer {
  text-decoration: none;
  color: #ffffff;
}
.transfer:hover,
.transfer:active {
  text-decoration: none;
  color: #000000;
}
.link:link,
.link:visited {
  display: inline-block;
  color: hsl(136, 65%, 51%);
  text-decoration: none;
  border-bottom: 1px solid currentColor;
  padding-bottom: 2px;
  transition: all 0.3s;
}
.link:hover,
.link:active {
  color: hsl(136, 65%, 51%);
  border-bottom: 1px solid transparent;
}
.list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 1.6rem;
}
.list-item {
  font-size: 1.8rem;
  display: flex;
  align-items: center;
  gap: 1.6rem;
  line-height: 1.2;
}
.list-icon {
  width: 30px;
  height: 3rem;
  color: hsl(136, 65%, 51%);
}
*:focus {
  /* outline:
  4px dotted #555; */
  box-shadow: 0 0 0 0.8rem hsla(136, 65%, 51%, 0.5);
}
/* helper classes */
.margin-right-sm {
  margin-right: 1.6rem !important;
}

.margin-bottom-md {
  margin-bottom: 4.8rem !important;
}

.center-text {
  text-align: center;
}
strong {
  font-weight: 600;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
  display: block;
  padding: 20px 10px;
}

.p4 {
  padding: 1.5rem !important;
}
.pb-0,
.py-0 {
  padding: 3rem !important
  ;
  font-size: 3rem;
  color: #000000;
}
.bg-dark {
  background-color: hsla(164, 100%, 71%, 0.418) !important;
}

/*******************************/
/* CTA  SECTION */
/*******************************/
.section-cta {
  padding: 4.8rem 0 12.8rem 0;
}
.cta {
  display: grid;
  grid-template-columns: 2fr 1fr;
  background-color: hsl(195, 100%, 71%);
  box-shadow: 0 2.4rem 4.8rem hsla(136, 100%, 50%, 0.214);
  border-radius: 11px;
  background-image: linear-gradient(
    120deg,
    hsl(195, 100%, 71%),
    hsl(136, 65%, 51%)
  );

  overflow: hidden;
}
.cta-text-box {
  padding: 4.8rem 6.4rem 6.4rem 6.4rem;
  color: hsl(143, 74%, 15%);
}
.cta .heading-secondary {
  color: inherit;
  margin: 3.2rem;
}
.cta-text {
  font-size: 1.8rem;
  line-height: 1.8;
  margin-bottom: 4.8rem;
}
.cta-img-box {
  background-image: linear-gradient(
      to right bottom,
      hsl(136, 65%, 51%),
      hsl(195, 100%, 71%)
    ),
    url("../img/eating.jpg");
  background-size: cover;
  background-position: center;

  height: 3rem;
}
.cta-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  column-gap: 3.2rem;
  row-gap: 2.4rem;
}
.cta-form label {
  display: block;
  font-size: 1.6rem;
  font-weight: 500;
  margin-bottom: 1.2rem;
}
.cta-form input,
.cta-form select {
  border: none;
  background-color: #c6fbe3;
  border-radius: 9px;
  color: inherit;
  font-family: inherit;
  width: 100%;
  padding: 1.2rem;
  font-size: 1.8rem;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.cta-form input::placeholder {
  color: #aaa;
}

.cta *:focus {
  box-shadow: 0 0 0 0.8rem rgba(253, 242, 233, 0.5);
}

    </style>
    <style>
      /* rem and em do not depend on htmml font size in media queries?
Instead ,1 rem =1em=16px */

/*******************************/
/* BELOW 1344px( smaller desktops)*/
/*******************************/
@media (max-width: 79em) {
  .hero {
    max-width: 120rem;
  }

  .heading-primary {
    font-size: 4.4rem;
  }
  .gallery {
    grid-template-columns: repeat(2, 1fr);
    margin-top: 2rem;
  }
}

/*******************************/
/* BELOW 1200px {landscape Tablets}*/
/*******************************/
@media (max-width: 75em) {
  html {
    font-size: 56.25%;
  }
  .grid {
    column-gap: 4.8rem;
    row-gap: 6.4rem;
  }
  .heading-secondary {
    font-size: 3.2rem;
  }
  .heading-tertiary {
    font-size: 2.4rem;
  }
  .header {
    padding: 0 3.2rem;
  }
  .hero {
    gap: 4.8rem;
  }
  .main-nav-list {
    gap: 3.2rem;
  }
  .testimonials-container {
    padding: 4.8rem 3.2rem;
  }
}

/*******************************/
/* BELOW 944px {Tablets}*/
/*******************************/
@media (max-width: 59em) {
  html {
    /* 8px/16px=0.5px x 100= 50% */
    font-size: 50%;
  }
  .hero {
    grid-template-columns: 1fr;
    padding: 0 8rem;
    gap: 6.4rem;
  }
  .hero-img {
    width: 60%;
  }
  .hero-text-box,
  .hero-img-box {
    text-align: center;
  }
  .delivered-meals {
    justify-content: center;
    margin-top: 3.2rem;
  }
  .logo img {
    height: 2.4rem;
  }
  .step-number {
    font-size: 7.4rem;
  }
  .meal-content {
    padding: 2.4rem 3.2rem 3.2rem 3.2rem;
  }
  .section-testimonials {
    grid-template-columns: 1fr;
  }

  .gallery {
    grid-template-columns: repeat(6, 1fr);
  }

  .cta {
    grid-template-columns: 3fr 2fr;
  }
  .cta-form {
    grid-template-columns: 1fr;
  }
  .btn--form {
    margin-top: 1.2rem;
  }
  /* mobile navigation */
  .btn-mobile-nav {
    display: block;

    z-index: 9999;
  }
  .main-nav {
    /* background-color: rgb(255, 255, 255, 0.9); */
    background-color: rgb(209, 238, 245, 0.9);
    backdrop-filter: blur(5px);
    top: 0;
    left: 0;
    position: absolute;
    width: 100%;
    height: 100vh;
    transform: translateX(100%);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.5s ease-in;
    /* hidden navigation */
    /* allow no transitions at all */
    /* display: none; */
    /* 1) hide it visually*/
    opacity: 0;
    /* 2)Make it unaccessible to mouse and keyboard  */
    pointer-events: none;
    /* 3) hide it from screen readers */
    visibility: hidden;
  }

  .nav-open .main-nav {
    opacity: 1;
    pointer-events: auto;
    visibility: visible;
    transform: translateX(0);
  }
  .nav-open .icon-mobile-nav[name="close"] {
    display: block;
  }
  .nav-open .icon-mobile-nav[name="menu"] {
    display: none;
  }
  .main-nav-list {
    flex-direction: column;
    gap: 5.8rem;
  }
  .main-nav-link:link,
  .main-nav-link:visited {
    font-size: 3.5rem;
    font-weight: 500;
  }
}
/*******************************/
/* BELOW 704px { small tablets}*/
/*******************************/
@media (max-width: 44em) {
  .grid--3-cols,
  .grid--4--cols {
    grid-template-columns: repeat(2, 1fr);
  }
  .diets {
    grid-column: 1/-1;
    justify-self: center;
  }

  .heading-secondary {
    margin-bottom: 4.8rem;
  }
  .pricing-plan {
    width: 100%;
  }
  /* .grid--footer {
    grid-template-columns: 1fr 1fr 1fr;
  } */
  .grid--footer {
    grid-template-columns: repeat(6, 1fr);
  }
  .nav-col {
    grid-row: 1;
    grid-column: span 2;
  }
  .address-col,
  .logo-col {
    grid-column: span 3;
    margin-bottom: 3.2rem;
  }
}
/*******************************/
/* BELOW 544px { Mobile}*/
/*******************************/
@media (max-width: 34em) {
  grid {
    row-gap: 4.8rem;
  }
  .grid--2-cols,
  .grid--3-cols,
  .grid--4--cols {
    grid-template-columns: 1fr;
  }

  .hero {
    padding: 0 3.2rem;
  }
  .section-hero {
    padding: 2.4rem 0 6.4rem 0;
  }

  .hero-img {
    width: 80%;
  }

  .btn,
  .btn:link,
  .btn:visited {
    padding: 2.4rem 1.6rem;
  }
  .logos img {
    height: 1.2rem;
  }

  .step-img-box {
    transform: translateY(2.4rem);
  }
  .step-img-box:nth-child(2) {
    grid-row: 1;
  }
  .step-img-box:nth-child(6) {
    grid-row: 5;
  }

  .testimonials {
    grid-template-columns: 1fr;
  }

  .gallery {
    grid-template-columns: repeat(4, 1fr);
    gap: 1.2rem;
  }
  .cta {
    grid-template-columns: 1fr;
  }
  .cta-img-box {
    height: 32rem;
    grid-row: 1;
  }
  .cta-text-box {
    padding: 3.2rem;
  }
}
/*******************************/
/* fixing safari flexbox gap*/
/*******************************/
.no-flexbox-gap .main-nav-list li:not(:last-child) {
  margin-right: 4.8rem;
}

.no-flexbox-gap .list-item:not(:last-child) {
  margin-bottom: 1.6rem;
}

.no-flexbox-gap .list-icon:not(:last-child) {
  margin-right: 1.6rem;
}

.no-flexbox-gap .delivered-faces {
  margin-right: 1.6rem;
}

.no-flexbox-gap .meal-attribute:not(:last-child) {
  margin-bottom: 2rem;
}

.no-flexbox-gap .meal-icon {
  margin-right: 1.6rem;
}

.no-flexbox-gap .footer-row div:not(:last-child) {
  margin-right: 6.4rem;
}

.no-flexbox-gap .social-links li:not(:last-child) {
  margin-right: 2.4rem;
}

.no-flexbox-gap .footer-nav li:not(:last-child) {
  margin-bottom: 2.4rem;
}

@media (max-width: 75em) {
  .no-flexbox-gap .main-nav-list li:not(:last-child) {
    margin-right: 3.2rem;
  }
}

@media (max-width: 59em) {
  .no-flexbox-gap .main-nav-list li:not(:last-child) {
    margin-right: 0;
    margin-bottom: 4.8rem;
  }
}

    </style>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script
      defer
      src=" https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    
    <script >
      
///////////////////////////////////////////////////////////
// Make mobile navigation work

const btnNavEl = document.querySelector(".btn-mobile-nav");
const headerEl = document.querySelector(".header");

btnNavEl.addEventListener("click", function () {
  headerEl.classList.toggle("nav-open");
});

///////////////////////////////////////////////////////////
// Smooth scrolling animation

const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const href = link.getAttribute("href");

    // Scroll back to top
    if (href === "#")
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });

    // Scroll to other links
    if (href !== "#" && href.startsWith("#")) {
      const sectionEl = document.querySelector(href);
      sectionEl.scrollIntoView({ behavior: "smooth" });
    }

    // Close mobile naviagtion
    if (link.classList.contains("main-nav-link"))
      headerEl.classList.toggle("nav-open");
  });
});

///////////////////////////////////////////////////////////
// Sticky navigation

const sectionHeroEl = document.querySelector(".section-hero");

const obs = new IntersectionObserver(
  function (entries) {
    const ent = entries[0];
    console.log(ent);

    if (ent.isIntersecting === false) {
      document.body.classList.add("sticky");
    }

    if (ent.isIntersecting === true) {
      document.body.classList.remove("sticky");
    }
  },
  {
    // In the viewport
    root: null,
    threshold: 0,
    rootMargin: "-80px",
  }
);
obs.observe(sectionHeroEl);

///////////////////////////////////////////////////////////
// Fixing flexbox gap property missing in some Safari versions
function checkFlexGap() {
  var flex = document.createElement("div");
  flex.style.display = "flex";
  flex.style.flexDirection = "column";
  flex.style.rowGap = "1px";

  flex.appendChild(document.createElement("div"));
  flex.appendChild(document.createElement("div"));

  document.body.appendChild(flex);
  var isSupported = flex.scrollHeight === 1;
  flex.parentNode.removeChild(flex);
  console.log(isSupported);

  if (!isSupported) document.body.classList.add("no-flexbox-gap");
}
checkFlexGap();

    </script>
    <title>EASY BANK-instant money transfer</title>
  </head>
  <body>
    <header class="header sticky">
      <a href="#">
        <img class="logo" alt="EASY BANK LOGO" src="images/logo.svg" />
      </a>
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li>
            <a class="main-nav-link" href="#how">Home</a>
          </li>
          <li>
            <a class="main-nav-link" href="#send">Send Money</a>
          </li>
          <li>
            <a class="main-nav-link" href="#customer">View All Customers</a>
          </li>
          <li>
            <a class="main-nav-link" href="#transaction">Transactions</a>
          </li>
          <li>
            <a class="main-nav-link nav-cta" target="#" href="About.php"
              >About us</a
            >
          </li>
        </ul>
      </nav>
      <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close"></ion-icon>
      </button>
    </header>
    <section class="section-hero">
      <div class="hero">
        <div class="hero-text-box">
          <h1 class="heading-primary">A online money transfer website</h1>
          <p class="hero-description">
            Transfer money with just mobile number,see recent transaction and
            view all customers.
          </p>
          <a target="#" href="#send" class="btn btn--full margin-right-sm"
            >Start transfer</a
          >
          <a target="#" href=" #meals" class="btn btn--outline"
            >Learn more &darr;</a
          >
        </div>
        <div class="hero-img-box">
          <img
            src="images/mobile.png"
            class="hero-img"
            alt="money banking pictures"
          />
        </div>
      </div>
    </section>
    <section class="section-meals" id="meals">
      <div class="container center-text">
        <span class="subheading"> WELCOME</span>
        <h2 class="heading-secondary">
          Easy Bank is used by more than 5,000+ users
        </h2>
      </div>
      <div class="container grid grid--3-cols margin-bottom-md">
        <div class="meal">
          <img
            src="images/transfer.jpg"
            class="meal-img"
            alt="transfer money "
          />
          <div class="meal-content" id="send">
            <!-- <div class="meal-tags"></div> -->
            <p class="meal-title">SEND MONEY</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <strong>₹</strong>
                <span>Enter only in Rupees</span>
              </li>
              <li class="meal-attribute"></li>
              <li class="meal-attribute">
                <div class="plan-sign-up">
                  <a href="transfer.php" class="btn btn--full">CLICK HERE!</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="meal">
          <img
            src="images/allCustomers.jpg"
            class="meal-img"
            alt="all customers"
          />
          <div class="meal-content" id="customer">
            <p class="meal-title">ALL CUSTOMERS</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <strong>5000+</strong>
                <span>Customers </span>
              </li>
              <li class="meal-attribute"></li>
              <li class="meal-attribute">
                <div class="plan-sign-up">
                  <a target="_blank" href="Customers.php" class="btn btn--full"
                    >CLICK HERE!
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="meal">
          <img
            src="images/transaction.jpg"
            class="meal-img"
            alt="transaction"
          />
          <div class="meal-content" id="transaction">
            <p class="meal-title">TRANSACTION HISTORY</p>
            <ul class="meal-attributes">
              <li class="meal-attribute">
                <strong>VIEW</strong>
                <span>Past Transfers </span>
              </li>
              <li class="meal-attribute">
                <div class="plan-sign-up">
                  <a
                    target="_blank"
                    href="transaction.php"
                    class="btn btn--full"
                    >CLICK HERE!
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark text-center text-white">
      <div class="container p-4 pb-0">
        <div class="text-center p-3">
          Made By Anand Thakur, Email: anandthakur2914@gmail.com
        </div>
      </div>
    </footer>
  </body>
</html>
