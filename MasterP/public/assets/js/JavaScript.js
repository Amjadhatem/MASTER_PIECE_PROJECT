//   <!-- --------------------- "Features Section for See More Button" --------------------- -->
 
 
 // Get all elements with the class "link-more"
 const seeMoreButtons = document.querySelectorAll(".link-more");

 // Loop through each button
 seeMoreButtons.forEach((button) => {
   // Add a click event listener to each button
   button.addEventListener("click", function (event) {
     event.preventDefault(); // Prevent the default link behavior

     // Find the parent element of the clicked button
     const parentElement = button.parentElement;

     // Find the hidden content within the parent element
     const hiddenContent = parentElement.querySelector(".hidden-content");

     // Toggle the visibility of the hidden content
     hiddenContent.classList.toggle("show");

     // Check if the hidden content is visible
     const isHidden = hiddenContent.classList.contains("show");

     // Update the button text and arrow icon based on visibility
     if (isHidden) {
       button.innerHTML = 'Hide <i class="bi bi-arrow-right"></i>';
     } else {
       button.innerHTML = 'See More <i class="bi bi-arrow-right"></i>';
     }
   });
 });

//   <!-- --------------------- /"Features Section for See More Button" --------------------- -->
