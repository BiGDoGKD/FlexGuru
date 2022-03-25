// star rating js
const starWrapper = document.querySelector(".stars");
const stars = document.querySelectorAll(".stars a");
const starCount = document.querySelector(".star-count");
stars.forEach((star, clickedIdx) => {
	star.addEventListener("click", () => {
		starWrapper.classList.add("disabled");
		stars.forEach((otherStar, otherIdx) => {
			if (otherIdx <= clickedIdx) {
				otherStar.classList.add("active");
			}
		});
		starCount.value = clickedIdx + 1;
	});
});
