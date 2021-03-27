function showTask(parameter, btn, primaryBTN) {
  const para = document.getElementById(parameter);
  const btnn = document.getElementById(btn);
  const primaryBtn = document.getElementById(primaryBTN);
  para.style.display = "block";
  btnn.style.display = "block";
  primaryBtn.style.display = "none";
}
function hideTask(pr, btn, primaryBTN) {
  const par = document.getElementById(pr);
  const btnn = document.getElementById(btn);
  const primaryBtn = document.getElementById(primaryBTN);
  par.style.display = "none";
  btnn.style.display = "none";
  primaryBtn.style.display = "block";
}
