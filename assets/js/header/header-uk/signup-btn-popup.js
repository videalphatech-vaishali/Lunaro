    //for signup button
    //         // Get elements
    document.addEventListener('DOMContentLoaded', () => {

    	const buttons = document.querySelectorAll('.signup');
    	const closePopup = document.getElementById("closePopup");
    	const popup = document.getElementById("popup");
    	buttons.forEach(button => {
    		button.addEventListener('click', () => {
    			console.log('Button clicked:', button.textContent);
    			popup.classList.add("active");

    		});
    	});
    	// Close popup on close button or background click
    	closePopup.addEventListener("click", () => {
    		popup.classList.remove("active");
    	});

    	// Optional: close when clicking outside popup box
    	popup.addEventListener("click", (e) => {
    		if (e.target === popup) {
    			popup.classList.remove("active");
    		}
    	});
    });
