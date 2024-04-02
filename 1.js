const imageList1 = ["1.png", "2.png"];
const image = document.querySelector(".image");
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

  image.src = imageList1[numImage];
});
