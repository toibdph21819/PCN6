const checkAll = document.querySelector('.check-all');
const checkOne = document.querySelectorAll('.check-one');

checkAll.addEventListener('change', function (e) {
  if (checkAll.checked) {
    checkOne.forEach(element => {
      element.checked = true;
    })
  }
  if (!checkAll.checked) {
    checkOne.forEach(element => {
      element.checked = false;
    })
  }

})