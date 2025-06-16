console.log("hello");

  const form = document.querySelector(".form");
  // console.log(form);

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const data = new FormData(form);
    console.log(data);
    for (c of data){
      console.log(c);
    }
    fetch("https://httpbin.org/post",{
      method:"POST",
      body: data,
      headers:{
        "Content-Type":"application/json",
      },
    })
    .then((res) => res.json())
    .then((res) => console.log(res));
  });

  


"use strict";
{
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('.nav');

  hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('open');
    nav.classList.toggle('open');
  });



}

