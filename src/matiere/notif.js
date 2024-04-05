// Check if the browser supports notifications
if ("Notification" in window) {
    // Request permission from the user to show notifications
    Notification.requestPermission().then(function (permission) {
        if (permission === "granted") {
            // Function to show a notification
            function showNotification() {
                // Create a new notification
                var notification = new Notification("New Material Added", {
                    body: "A new material has been added to the database.",
                });

                // Optional: Add an event listener to handle user interaction with the notification
                notification.addEventListener("click", function () {
                    // Handle the notification click event
                    // For example, you can redirect the user to a specific page
                    window.location.href = "/path/to/specific/page";
                });
            }

            // Call the showNotification function when a new material is added
            function onMaterialAdded() {
                // Add your logic here to determine when a new material is added
                // For example, you can listen for a specific event or check the database periodically
                // Once a new material is added, call the showNotification function
                showNotification();
            }

            // Call the onMaterialAdded function to start listening for new materials
            onMaterialAdded();
        }
    });
}