(function ($) {
	function initCustomJS($scope) {
		console.log('initCustomJS is called');

		// First part: Background image on mouse hover
		const elements = $scope.find("div.child_el");
		if (elements.length === 0) {
			//console.error('No elements with the class "child_el" were found');
		} else {
			elements.each(function () {
				const $div = $(this);
				$div.on("mouseenter", function () {
					const parentSection = $div.closest("section");
					const bgImage = $div.attr("data-bg");
					parentSection.css("backgroundImage", `url(${bgImage})`);
				});
				$div.on("mouseleave", function () {
					const parentSection = $div.closest("section");
					parentSection.css("backgroundImage", "url('/wp-content/themes/fractal/fractal/build/slide1.png')");
				});
			});
		}

		// Second part: Slide navigation logic
		const slides = $scope.find(".slides > div");
		const images = $scope.find(".slides > img");
		let currentSlide = 0;

		function showSlide(index, direction) {
			slides.removeClass("slide-in-left slide-out-left slide-in-right slide-out-right active");
			slides.each(function (i, slide) {
				if (i === index) {
					$(slide).addClass("active");
					if (direction === "left") {
						$(slide).addClass("slide-in-left");
					} else {
						$(slide).addClass("slide-in-right");
					}
				} else {
					if (direction === "left") {
						$(slide).addClass("slide-out-right");
					} else {
						$(slide).addClass("slide-out-left");
					}
				}
			});
			changeImage(index);
		}

		function changeImage(slideIndex) {
			images.each(function (i, image) {
				if (i === slideIndex) {
					$(image).css("opacity", 1);
				} else {
					$(image).css("opacity", 0);
				}
			});
		}

		$scope.find(".nav-left").on("click", function () {
			currentSlide = currentSlide > 0 ? currentSlide - 1 : slides.length - 1;
			showSlide(currentSlide, "left");
		});

		$scope.find(".nav-right").on("click", function () {
			currentSlide = currentSlide < slides.length - 1 ? currentSlide + 1 : 0;
			showSlide(currentSlide, "right");
		});

		showSlide(currentSlide, "right");

		// Third part: FAQ toggle functionality
		$scope.find(".stm-minus").on("click", function () {
			const parentElement = $(this).closest(".stm-faq");
			if (parentElement.length) {
				parentElement.addClass("stm-close").removeClass("stm-open");
			}
		});

		$scope.find(".stm-plus").on("click", function () {
			const parentElement = $(this).closest(".stm-faq");
			if (parentElement.length) {
				parentElement.removeClass("stm-close").addClass("stm-open");
			}
		});
	}

	// Initialize on Elementor frontend init
	$(window).on('elementor/frontend/init', function () {

		console.log('init');
		// Add action for all widgets
		elementorFrontend.hooks.addAction('frontend/element_ready/global', function ($scope) {
			initCustomJS($scope);
		});

		// Also initialize for already loaded widgets
		elementorFrontend.hooks.doAction('frontend/element_ready/global', jQuery('body'));
	});

})(jQuery);
