let greetings_container = document.querySelector(".greetings_container");
let timeNow = new Date().getHours();
let greeting =
  timeNow >= 5 && timeNow < 12
    ? "Good Morning"
    : timeNow >= 12 && timeNow < 18
    ? "Good Afternoon"
    : "Good evening";
greetings_container.innerHTML = `<h1>${greeting}</h1>`;
