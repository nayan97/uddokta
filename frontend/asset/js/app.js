// home page js start  ///////////////////////////////
// navbar scroll js start 
document.addEventListener('DOMContentLoaded', function () {
const navbar = document.querySelector('.navbar');
const scrollOffset = 50; // Adjust scroll offset as needed

window.addEventListener('scroll', function () {
    if (window.scrollY > scrollOffset) {
    navbar.classList.add('fixed-nav'); // Add class after scrolling
    } else {
    navbar.classList.remove('fixed-nav'); // Remove class before scrolling
        }
    });
});


// happy client count down js start 
document.addEventListener('DOMContentLoaded', function () {
    const counterElement = document.querySelector('.box-txt-two .title');
    const targetCount = parseInt(counterElement.getAttribute('data-count'), 10);
    let count = 0;
    const duration = 2000; // Total duration of the count-up in milliseconds
    const increment = targetCount / (duration / 16); // Calculate increment based on 60 FPS
  
    function updateCount() {
      count += increment;
      if (count < targetCount) {
        counterElement.textContent = Math.floor(count); // Update the number
        requestAnimationFrame(updateCount); // Keep counting until the target is reached
      } else {
        counterElement.textContent = targetCount; // Make sure the final value is exact
      }
    }
  
    updateCount(); // Start the counting process
  });
  


// portfolio slider js start 
document.querySelectorAll('.slider-wrapper').forEach((sliderWrapper, index) => {
    const productCards = sliderWrapper.querySelectorAll('.portfolio-card');
    const prevBtn = sliderWrapper.closest('.slider-container').querySelector('.prev-btn');
    const nextBtn = sliderWrapper.closest('.slider-container').querySelector('.next-btn');
    let currentIndex = 0;
    let slideInterval;

    function slideTo(index) {
        const cardWidth = productCards[0].offsetWidth + 0; // Adjust according to portfolio-card css margin 8*2=16 (margin: 0 8px;)
        const translateXValue = -(index * cardWidth);
        sliderWrapper.style.transform = `translateX(${translateXValue}px)`;

        if (index < productCards.length - 4) {
            sliderWrapper.style.transform += `translateX(-${cardWidth * 0.4}px)`;
        }

        currentIndex = index;
    }

    function nextSlide() {
        if (currentIndex < productCards.length - 4) {
            slideTo(currentIndex + 1);
        } else {
            slideTo(0);
        }
    }

    function prevSlide() {
        if (currentIndex > 0) {
            slideTo(currentIndex - 1);
        } else {
            slideTo(productCards.length - 4);
        }
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 3000); // Adjust interval as needed
    }

    function stopAutoSlide() {
        clearInterval(slideInterval);
    }

    sliderWrapper.addEventListener('mouseover', stopAutoSlide);
    sliderWrapper.addEventListener('mouseout', startAutoSlide);

    startAutoSlide();
    slideTo(0); // Start with the first card showing
});







// home page all counter js start | one page work
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".index-counter-value");
    const speed = 200; // Adjust speed here (lower is faster)

    counters.forEach(counter => {
        const updateCounter = () => {
            const target = +counter.getAttribute("data-target");
            const currentValue = +counter.innerText;

            const increment = target / speed; // The number increases gradually

            if (currentValue < target) {
                counter.innerText = Math.ceil(currentValue + increment);
                setTimeout(updateCounter, 15); // Adjust timing here for smoother effect
            } else {
                counter.innerText = target;
            }
        };

        // Initialize the counter animation
        updateCounter();
    });
});



// got to top btn js start 
document.addEventListener("DOMContentLoaded", function () {
    const scrollBtn = document.getElementById("scrollBtn");
    const progressBorder = document.getElementById("progressBorder");

    // Show or hide button based on scroll position
    window.onscroll = function () {
        toggleScrollButton();
        updateProgress();
    };

    // Scroll to top smoothly
    scrollBtn.onclick = function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    };

    function toggleScrollButton() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollBtn.classList.remove("hidden");
        } else {
            scrollBtn.classList.add("hidden");
        }
    }

    function updateProgress() {
        const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercentage = (scrollPosition / windowHeight) * 100;

        // Update the border based on the scroll percentage
        progressBorder.style.borderColor = `rgba(255, 255, 255, ${scrollPercentage / 100})`;
        progressBorder.style.borderWidth = `${scrollPercentage / 4}px`;
    }
});



// popup js start //////////////////////////////////////////////////

// testimonial popup js start 
// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get all the play buttons
    const playButtons = document.querySelectorAll('.open-popup');
    // Get the popupVideo
    const popupVideo = document.getElementById('testimonials-video-popup');
    // Get the close button inside the popupVideo
    const closeButton = document.querySelector('.close-popup');

    // Function to open the popupVideo
    function openPopup() {
        popupVideo.style.display = 'flex';
    }

    // Function to close the popup
    function closePopup() {
        popupVideo.style.display = 'none';
    }

    // Add click event to each play button to open the popup
    playButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            openPopup();
        });
    });

    // Add click event to the close button to close the popup
    closeButton.addEventListener('click', function() {
        closePopup();
    });

    // Add click event to close the popup when clicking outside of it
    window.addEventListener('click', function(event) {
        if (event.target == popupVideo) {
            closePopup();
        }
    });
});


// home page top video popup js start
// Get the button and popup elements
var popup = document.getElementById("top-video-popup");
var btn = document.querySelector(".top-video-btn");
var closeBtnTop = document.querySelector(".close-top-btn");

// Show the popup when the button is clicked
btn.onclick = function() {
    popup.style.display = "flex"; // Show the popup
}

// Close the popup when the 'x' is clicked
closeBtnTop.onclick = function() {
    popup.style.display = "none";
}

// Close the popup if clicked outside of the popup content
window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}
