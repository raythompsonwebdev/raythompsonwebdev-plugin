//Responsive chart
window.onload = function () {
  const chartBar = document.querySelectorAll(".bar");

  chartBar.forEach(function (key) {
    let percentage = 0;

    const percentageMaxWidth = key.dataset.percentage;

    const id = setInterval(frame, 1500);

    function frame() {
      if (percentage === percentageMaxWidth) {
        clearInterval(id);
      } else {
        percentage++;
        //key.style.width = `${percentageMaxWidth}%`;
        key.style.width = "".concat(percentageMaxWidth, "%");
      }
    }
  });
};
