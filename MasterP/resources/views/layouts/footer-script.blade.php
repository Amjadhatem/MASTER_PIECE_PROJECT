<script src="../../../public/assets/js/JavaScript.js"></script>

<script type="text/javascript"  src="{{ URL::asset('assets/js/JavaScript.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/abdaddd2d7.js" crossorigin="anonymous"></script>


<script>
    function performLogout() {
        // Perform the logout action (e.g., making an API request or clearing session)
        // ...
    
        // Clear browser history and redirect to the login page
        window.location.replace('/login'); // Replace the current page in the history
    }
    </script>
    