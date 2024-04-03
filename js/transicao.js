let turned = false;

function turnPage() {
  const page1 = document.getElementById('page1');
  const page2 = document.getElementById('page2');
  
  if (!turned) {
    page1.style.transform = "rotateY(-180deg)";
    page2.style.transform = "rotateY(0deg)";
    page2.style.opacity = "1";
  } else {
    page1.style.transform = "rotateY(0deg)";
    page2.style.transform = "rotateY(-180deg)";
    page2.style.opacity = "0.5";
  }

  turned = !turned;
}