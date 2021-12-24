AOS.init();

// nav

let loc = document.querySelector(".information-contact .location span"),
  phone = document.querySelector(".information-contact .phone span");
  console.log(loc);

loc.addEventListener("click", () => {
    
  window.location.href="https://www.google.com/maps/place/%D9%83%D9%84%D9%8A%D8%A9+%D8%A7%D9%84%D8%AD%D8%A7%D8%B3%D8%A8%D8%A7%D8%AA+%D9%88%D8%A7%D9%84%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA+-+%D8%AC%D8%A7%D9%85%D8%B9%D8%A9+%D8%A7%D9%84%D9%81%D9%8A%D9%88%D9%85%E2%80%AD/@29.3197065,30.8356618,17z/data=!4m9!1m2!2m1!1sfci+fayoum!3m5!1s0x1459793d9d2458b5:0xafc7f3258784c2f3!8m2!3d29.3197072!4d30.8334761!15sCgpmY2kgZmF5b3VtkgEHY29sbGVnZQ?hl=ar";
});
