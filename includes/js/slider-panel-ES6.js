(function () {
  const next = document.getElementById("next");
  const scrollScreen = document.querySelector("div.slider-body");
  const prev = document.getElementById("prev");
  const mask = window.document.querySelector(".hero-slider > .mask");
  const panels = Array.from(document.getElementsByClassName("panel"));
  let currentIndex = 0;

  const scrollTo = element => {
    mask.scrollTo({
      behavior: "smooth",
      left: 0,
      top: element.offsetTop,
    });
  };

  const updateIndex = () => {
    let upperlimit = panels.length - 1;

    if (currentIndex === upperlimit) {
      currentIndex = 0;
    } else {
      currentIndex++;
    }
  };

  const undateIndex = () => {
    let lowerlimit = 0;

    console.log(lowerlimit);

    if (currentIndex === lowerlimit) {
      currentIndex = 0;
    } else {
      currentIndex--;
    }
  };

  //Hero Slider

  next.addEventListener("click", function (e) {
    //prev.classList.remove("active");
    //e.target.classList.add("active");
    e.preventDefault();

    updateIndex();

    panels.forEach(function (value, index) {
      if (index === currentIndex) {
        console.log(`#${value["id"]}`);
        scrollTo(document.querySelector(`#${value["id"]}`));
      }
    });

    //disable click event
    return false;
  });

  prev.addEventListener("click", function (e) {
    e.preventDefault();
    undateIndex();
    panels.forEach(function (value, index) {
      if (index === currentIndex) {
        console.log(`#${value["id"]}`);
        scrollTo(document.querySelector(`#${value["id"]}`));
      }
    });
    //disable click event
    return false;
  });
})();
