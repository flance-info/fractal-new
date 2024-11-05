document.addEventListener("DOMContentLoaded", function () {
	const elements = document.querySelectorAll("section div.child_el");

	if (elements.length === 0) console.log('No elements with the class "child_el" were found');


	else elements.forEach((div) => {
		div.addEventListener("mouseenter", function () {
			const parentSection = this.closest("section");
			const bgImage = this.getAttribute("data-bg");
			parentSection.style.backgroundImage = bgImage;
		});
		div.addEventListener("mouseleave", function () {
			const parentSection = this.closest("section");
			parentSection.style.backgroundImage = "url('/wp-content/themes/fractal/fractal/build/slide1.webp')"; // Reset to the default image
		});
	});
});
document.addEventListener("DOMContentLoaded", function () {
	const slides = document.querySelectorAll(".slides > div");
	const images = document.querySelectorAll(".slides > img"); // Select all images

	console.log('sliddddes', slides);
	let currentSlide = 0;

	function showSlide(index, direction) {
		slides.forEach((slide, i) => {
			slide.classList.remove("slide-in-left", "slide-out-left", "slide-in-right", "slide-out-right", "active");
			if (i === index) {
				slide.classList.add("active");
				if (direction === "left") slide.classList.add("slide-in-left");
				else slide.classList.add("slide-in-right");
			} else if (direction === "left") slide.classList.add("slide-out-right");
			else slide.classList.add("slide-out-left");
		});
		// Change image opacity based on the current slide
		changeImage(index);
	}

	// Function to toggle the images based on the current slide
	function changeImage(slideIndex) {
		images.forEach((image, i) => {
			image.style.opacity = i === slideIndex ? 1 : 0; // Show the current image, hide others
		});
	}

	document.querySelectorAll(".nav-left").forEach((navLeft) => {
		navLeft.addEventListener("click", function () {
			currentSlide = currentSlide > 0 ? currentSlide - 1 : slides.length - 1;
			showSlide(currentSlide, "left");
		});
	});

	document.querySelectorAll(".nav-right").forEach((navRight) => {
		navRight.addEventListener("click", function () {
			currentSlide = currentSlide < slides.length - 1 ? currentSlide + 1 : 0;
			showSlide(currentSlide, "right");
		});
	});

	showSlide(currentSlide, "right");
});

function openModal() {
	document.getElementById("myModal").style.display = "block";
}

function closeModal() {
	document.getElementById("myModal").style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
	document.querySelectorAll(".subtitle").forEach((subtitle) => {
		subtitle.addEventListener("click", function () {
			const parentElement = this.closest(".stm-faq");
			if (parentElement) {
				// Check if neither stm-open nor stm-close classes exist
				if (!parentElement.classList.contains("stm-open") && !parentElement.classList.contains("stm-close")) {
					parentElement.classList.add("stm-open");
				} else {
					// Toggle stm-open and stm-close classes
					parentElement.classList.toggle("stm-open");
					parentElement.classList.toggle("stm-close");
				}
			}
		});
	});

	document.querySelectorAll(".stm-minus").forEach((minusBtn) => {
		minusBtn.addEventListener("click", function () {
			const parentElement = this.closest(".stm-faq");
			if (parentElement) {
				parentElement.classList.add("stm-close");
				parentElement.classList.remove("stm-open");
			}
		});
	});
	document.querySelectorAll(".stm-plus").forEach((plusBtn) => {
		plusBtn.addEventListener("click", function () {
			const parentElement = this.closest(".stm-faq");
			if (parentElement) {
				parentElement.classList.remove("stm-close");
				parentElement.classList.add("stm-open");
			}
		});
	});
});
const customSubmitButtons = document.querySelectorAll(".stm-submit");
customSubmitButtons.forEach((customSubmitButton) => {
	customSubmitButton.addEventListener("click", function () {
		const parentForm = customSubmitButton.closest("form"); // Find the closest parent form element
		if (parentForm) {
			const submitButton = parentForm.querySelector('input[type="submit"]'); // Find the submit button in the parent form
			if (submitButton) submitButton.click(); // Programmatically click the submit button
		}
	});
});

