(function () {
  const next = document.getElementById("next");
  const scrollScreen = document.querySelector("div.slider-body");
  const prev = document.getElementById("prev");
  const mask = window.document.querySelector(".hero-slider > .mask");
  const panels = Array.from(document.getElementsByClassName("panel"));
  let currentIndex = 0;

  //console.log(panels);

  //detect page scroll function
  // const elementInView = (el, scrollOffset = 0) => {
  //   const elementTop = el.getBoundingClientRect().top;

  //   return (
  //     elementTop <=
  //     (window.innerHeight || document.documentElement.clientHeight) -
  //       scrollOffset
  //   );
  // };

  // //display element on page scroll
  // const displayScrollElement = element => {
  //   element.classList.add("scrolled");
  // };

  // //hide element on page scroll
  // const hideScrollElement = element => {
  //   element.classList.remove("scrolled");
  // };

  //add animation to element on page scroll
  // const handleScrollAnimation = () => {
  //   panels.forEach(el => {
  //     if (elementInView(el, 0)) {

  //       //displayScrollElement(el);
  //     } else {
  //       //hideScrollElement(el);

  //     }
  //   });
  // };

  //handleScrollAnimation();

  const scrollTo = element => {
    mask.scrollTo({
      behavior: "smooth",
      left: 0,
      top: element.offsetTop,
    });
  };

  const updateIndex = () => {
    let upperlimit = panels.length - 1;

    console.log(upperlimit);

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

      //console.log(value);
    });

    //$(".hero-slider > .mask").scrollTo($(this).attr("rel"), 300);

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

      //console.log(value);
    });
    //disable click event
    return false;
  });
})();
