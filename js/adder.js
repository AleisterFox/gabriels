// const inputNumber = document.querySelectorAll('input[type="number"]');
const incrementButtons = document.querySelectorAll(".increment");
const decrementButtons = document.querySelectorAll(".decrement");

incrementButtons.forEach((incrementButton) => {
  incrementButton.addEventListener("click", function () {
    const inputContainer = incrementButton.parentElement;
    const inputNumber = inputContainer.firstElementChild;
    inputNumber.stepUp();
  });
});

decrementButtons.forEach((decrementButton) => {
  decrementButton.addEventListener("click", function () {
    const inputContainer = decrementButton.parentElement;
    const inputNumber = inputContainer.firstElementChild;
    if (inputNumber.value != 0) {
      inputNumber.stepDown();
    }
  });
});
