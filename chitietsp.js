const prevNumberProduct = document.querySelector('.prevNumberProduct')
const nextNumberProduct = document.querySelector('.nextNumberProduct')
let inputNumberProduct = document.querySelector('.inputNumberProduct')

prevNumberProduct.onclick = () => {
  if (inputNumberProduct.value <= 1) {
    prevNumberProduct.disabled = true;
  }
  return inputNumberProduct.value--
}
nextNumberProduct.onclick = () => {
  if (inputNumberProduct.value < 1) {
    prevNumberProduct.disabled = true
  }
  else if (inputNumberProduct.value >= 1) {
    prevNumberProduct.disabled = false;
  }
  return inputNumberProduct.value++
}

inputNumberProduct.oninput = (e) => {
  if (e.target.value != Number(inputNumberProduct.value)) {
    inputNumberProduct.value = 1
  }
  if (inputNumberProduct.value < 1) {
    prevNumberProduct.disabled = true
  }
  else if (inputNumberProduct.value >= 1) {
    prevNumberProduct.disabled = false;
  }
}