// Get the button and modal elements
const openScannerBtn = document.getElementById('openScannerBtn');
const qrScannerModal = document.getElementById('qrScannerModal');
let scanner; // Declare scanner variable outside of the event listener
const baseUrl = window.location.origin; // Get the base URL of the current location

// Handle button click event
openScannerBtn.addEventListener('click', () => {
    // Open the modal
    qrScannerModal.style.display = 'block';

    // Initialize Instascan
    scanner = new Instascan.Scanner({ video: document.getElementById('scanner') });

    // Add a listener for QR code scan
    scanner.addListener('scan', content => {

        // Check if content is a relative URL (e.g., 'members/id/show')
    if (!content.startsWith('http://') && !content.startsWith('https://')) {
        // Construct the complete URL by combining the base URL and the content from the QR code
        const redirectUrl = baseUrl + '/' + content; // Assuming content is in the format 'members/id/show'

        // Redirect to the constructed URL
        window.location.href = redirectUrl;
    } else {
        // Content is already a complete URL, redirect to it directly
        window.location.href = content;
    }   
        // Close the modal after scanning a QR code (optional)
        qrScannerModal.style.display = 'none';
        
        // Stop scanning (optional)
        scanner.stop();
    });

    // Start scanning
    Instascan.Camera.getCameras().then(cameras => {
        if (cameras.length > 0) {
            scanner.start(cameras[0]); // You can choose a specific camera if there are multiple cameras
        } else {
            console.error('No cameras found.');
        }
    });
});

// Close the modal when clicking outside of it (optional)
qrScannerModal.addEventListener('click', event => {
    if (event.target === qrScannerModal) {
        qrScannerModal.style.display = 'none';
        
        // Stop scanning (optional)
        if (scanner) {
            scanner.stop();
        }
    }
});