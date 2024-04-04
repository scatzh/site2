const imageList = ["img//banner3.png", "img//banner5.png"];
const imageList1 = ["img//smallbann.png", "img//blacksmallbann.png"];
const imageList2 = ["img//plansh.png", "img//planshblack.png"];
const imageList3 = ["img//sun.png", "img//night.webp"];
const img = document.querySelector(".img");
const img2 = document.querySelector(".img2");
const img3 = document.querySelector(".img3");
const img4 = document.querySelector(".img4");
const next = document.getElementById("next");
var numImage = 0;
img.src = imageList[numImage];
const themeList = ["light", "dark"];
document.documentElement.classList.remove("dark", "light");
document.documentElement.classList.add(themeList[numImage]);
img2.src = imageList1[numImage];
img3.src = imageList2[numImage];
img4.src = imageList3[numImage];
next.addEventListener("click", () => {
  numImage++;
  if (numImage >= imageList.length) {
    numImage = 0;
    document.documentElement.classList.remove("dark", "light");
  }
  console.log(numImage >= imageList.length);
  console.log(numImage);

  img.src = imageList[numImage];

  document.documentElement.classList.add(themeList[numImage]);
  img4.src = imageList3[numImage];
  img3.src = imageList2[numImage];
  img2.src = imageList1[numImage];
});
