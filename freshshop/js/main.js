const prevBtns = document.querySelectorAll(".btn-prev01");
const nextBtns = document.querySelectorAll(".btn-next01");
const progress = document.getElementById("progress01");
const formSteps = document.querySelectorAll(".form-step01");
const progressSteps = document.querySelectorAll(".progress-step01");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active01") &&
      formStep.classList.remove("form-step-active01");
  });

  formSteps[formStepsNum].classList.add("form-step-active01");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active01");
    } else {
      progressStep.classList.remove("progress-step-active01");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active01");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}