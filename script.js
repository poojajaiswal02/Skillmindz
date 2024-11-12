// ================ Enquiry form =========
// function updateCourses(){

//     const selectColleges = document.getElementById("college");
//     const selectCourses = document.getElementById("course");

//     selectCourses.innerHTML = "";

//     const options = {
//         jain: ["Bachelor of Commerce(B.Com)", "Bachelor of Business Administration (BBA)", "Bachelor of Computer Applications (BCA)", "Master of Business Administration (MBA)", "Master of Computer Applications (MCA)", "Master of Computer Applications (MCA)", "Master of Commerce (MA)"],
//         shrada: ["Bachelor of Computer Applications (BCA)", "Bachelor of Arts (BA)", "Master of Business Administration (MBA)", "Master of Computer Applications (MCA)", "Master of Commerce (M.Com)"],
//         vellore: ["Master of Business Administration (MBA)", "Master of Computer Application (MCA) Programme", "Master of Science in Data Science programme"],
//         dypatil: ["Bachelor of Business Administration (BBA)","Master of Business Administration (MBA)","Certificate Programme in Digital Marketing", "Certificate Programme in Hosptal And Healthcare Management" ]
//     };

//     const selectCategory = selectColleges.value;

//     const categoryOptions = options[selectCategory];

//     categoryOptions.forEach(function(item){
//         const optionElement = document.createElement("option");
//         optionElement.textContent = item;
//         selectCourses.appendChild(optionElement);
//     }
// )}


function updateCourses(){

    const selectCourses = document.getElementById("course");
    const selectColleges = document.getElementById("college");

    selectColleges.innerHTML = "";

    const options = {
        mba: ["Vellore Institute of Technology", "Dr. D. Y. Patil Vidyapeeth Pune", "Jain University", "Shrada University"],
        mca: ["Vellore Institute of Technology", "Jain University", "Shrada University"],
        datascience: ["Vellore Institute of Technology"],
        bba:["Dr. D. Y. Patil Vidyapeeth Pune", "Jain University"],
        digitalmarketing:["Dr. D. Y. Patil Vidyapeeth Pune"],
        hospital:["Dr. D. Y. Patil Vidyapeeth Pune"],
        bca:["Jain University", "Shrada University"],
        bcom: ["Jain University"],
        ma: ["Jain University"],
        ba: ["Shrada University"],
        mcom: ["Shrada University"]
    };

    const selectCategory = selectCourses.value;

    const categoryOptions = options[selectCategory];

    categoryOptions.forEach(function(item){
        const optionElement = document.createElement("option");
        optionElement.textContent = item;
        selectColleges.appendChild(optionElement);
    }
)}







// =========== Ranking University scroll ==========







// =================== Our Courses Scroll ============
const slider = document.querySelector('.slides-track');
const cards = document.querySelectorAll('.courseSlide');
const cardWidth = cards[0].offsetWidth + 20; // Card width + margin
let currentIndex = 1; // Start at the first real card (index 1)
let autoplayInterval;

// Set the initial position of the carousel
slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

function updateCarousel() {
    slider.style.transition = 'transform 0.5s ease';
    slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

function scrollingLeft() {
    if (currentIndex <= 0) {
        currentIndex = cards.length / 2-1; // Jump to the last real card
        slider.style.transition = 'none'; // Disable transition
        slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        setTimeout(() => {
            currentIndex--;
            updateCarousel();
        }, 20); // Re-enable transition after a short delay
    } else {
        currentIndex--;
        updateCarousel();
    }
    resetAutoplay();
}
// function scrollingLeft() {
//     if (mastercardCount <= 0) {
//         mastercardCount = masterSlide.length / 2-1; // Jump to the last real card
//         masterCourse.style.transition = 'none'; // Disable transition
//         masterCourse.style.transform = `translateX(-${mastercardCount * masterCardWidth}px)`;
//         setTimeout(() => {
//             mastercardCount--;
//             updateCarousel2();
//         }, 20); // Re-enable transition after a short delay
//     } else {
//         mastercardCount--;
//         updateCarousel();
//     }
//     resetAutoplay();
// }

function scrollRight() {
    if (currentIndex >= cards.length / 2- 1) {
        currentIndex = 1; // Jump to the first real card
        slider.style.transition = 'none'; // Disable transition
        slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        setTimeout(() => {
            currentIndex++;
            updateCarousel();
        }, 20); // Re-enable transition after a short delay
    } else {
        currentIndex++;
        updateCarousel();
    }
    resetAutoplay();
}

function autoplay() {
    autoplayInterval = setInterval(scrollRight, 5000); // Autoplay every 3 seconds
}

function resetAutoplay() {
    clearInterval(autoplayInterval);
    autoplay();
}

// Initial setup
autoplay();



// ::::::::::::::::::: Master Course scrolling :::::::::::::::::

const masterCourse = document.querySelector('.masters-content');
const masterSlide = document.querySelectorAll('.master-slide');
const masterCardWidth = masterSlide[0].offsetWidth + 20; // Card width + margin
let mastercardCount = 1; // Start at the first real card (index 1)
let autoplayInterval2;

// Set the initial position of the carousel
masterCourse.style.transform = `translateX(-${mastercardCount * masterCardWidth}px)`;

function updateCarousel2() {
    masterCourse.style.transition = 'transform 0.5s ease';
    masterCourse.style.transform = `translateX(-${mastercardCount * masterCardWidth}px)`;
}

function clickingLeft() {
    if (mastercardCount <= 0) {
        mastercardCount = masterSlide.length / 2-1; // Jump to the last real card
        masterCourse.style.transition = 'none'; // Disable transition
        masterCourse.style.transform = `translateX(-${mastercardCount * masterCardWidth}px)`;
        setTimeout(() => {
            mastercardCount--;
            updateCarousel2();
        }, 20); // Re-enable transition after a short delay
    } else {
        mastercardCount--;
        updateCarousel2();
    }
    resetAutoplay2();
}

function clickRight() {
    if (mastercardCount >= masterSlide.length / 2- 1) {
        mastercardCount = 1; // Jump to the first real card
        masterCourse.style.transition = 'none'; // Disable transition
        masterCourse.style.transform = `translateX(-${mastercardCount * masterCardWidth}px)`;
        setTimeout(() => {
            mastercardCount++;
            updateCarousel2();
        }, 20); // Re-enable transition after a short delay
    } else {
        mastercardCount++;
        updateCarousel2();
    }
    resetAutoplay2();                       
}

function autoplay2() {
    autoplayInterval2 = setInterval(clickRight, 5000); // Autoplay every 3 seconds
}

function resetAutoplay2() {
    clearInterval(autoplayInterval2);
    autoplay2();
}

// Initial setup
autoplay2();






// :::::: Feedback scroll::::::::::
$(document).ready(function(){
    $('.testimonial-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});