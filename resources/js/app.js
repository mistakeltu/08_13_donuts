const holeDOM = document.querySelector("#--hole");
const textDOM = holeDOM.querySelector("b");
const inputDOM = holeDOM.querySelector("input");

inputDOM.addEventListener("input", (_) => {
  textDOM.innerText = inputDOM.value;
});
