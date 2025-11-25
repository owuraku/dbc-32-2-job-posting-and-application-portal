document.addEventListener('DOMContentLoaded', () => {
    const loadingScreen = document.getElementById('loading-screen');
    const mainContent = document.getElementById('main-content');

    // Simulate a network delay (e.g., 1500 milliseconds or 1.5 seconds)
    setTimeout(() => {
        // 1. Start the fade-out animation for the loading screen
        loadingScreen.classList.add('fade-out');

        // 2. Wait for the fade-out transition to complete (0.5s defined in CSS)
        setTimeout(() => {
            // 3. Hide the loading screen completely and show the main content
            loadingScreen.style.display = 'none';
            mainContent.classList.remove('d-none');
            // Optional: Add a slight opacity transition to the main content for a smooth reveal
            mainContent.style.opacity = 0;
            setTimeout(() => {
                mainContent.style.opacity = 1;
            }, 50);

        }, 500); // Must match the CSS transition time for fade-out (0.5s)

    }, 1500); // Delay before the loading screen starts to disappear (1.5s)
});
