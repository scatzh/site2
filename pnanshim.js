const imageList1 = ["bannerplansh.png", "bannerplanshblack.png"];
const img = document.querySelector(".img3");
const next = document.getElementById("next");
var numImage = 0;
img.src = imageList1[numImage];
next.addEventListener("click", () => {
  numImage++;
  if (numImage >= imageList1.length) {
    numImage = 0;
    document.documentElement.classList.remove("dark", "light");
  }
  console.log(numImage >= imageList1.length);
  console.log(numImage);

  img.src = imageList1[numImage];
});
