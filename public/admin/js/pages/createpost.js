function previewImage() {
    const file = document.getElementById("imageUpload").files[0];
    const reader = new FileReader();
    
    reader.onload = function(e) {
        const imgElement = document.getElementById("imagePreview");
        imgElement.src = e.target.result;
        imgElement.style.display = 'block'; // Show the image after loading
    }
    
    if (file) {
        reader.readAsDataURL(file);
    }
}
